<?php

if (!$_POST) exit;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require __DIR__ . '/../vendor/autoload.php';

function business_way_is_valid_email( $email ) {
	return( preg_match( "/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email ) );
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = strip_tags( trim( $_POST['name'] ) );
$email    = strip_tags( trim( $_POST['email'] ) );
$comments = strip_tags( trim( $_POST['comments'] ) );

if( '' == $name ) {
	echo '<div class="error_message">Inserisci il tuo nome.</div>';
	exit();
} else if( '' == $email || ! business_way_is_valid_email( $email ) ) {
	echo '<div class="error_message">Inserisci il tuo indirizzo email.</div>';
	exit();
} else if( '' == $comments ) {
	echo '<div class="error_message">Inserisci il tuo messaggio.</div>';
	exit();
}

$email_subject = 'Contatto da sito web | ' . $name;
$email_body = "Sei stato contattato da $name." . PHP_EOL . PHP_EOL;
$email_content = "\"$comments\"" . PHP_EOL . PHP_EOL;
$email_reply = "Puoi contattatare $name via email: $email";
$message = wordwrap( $email_body . $email_content . $email_reply, 70 );

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = getenv('SMTP_SERVER');  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = getenv('SMTP_USERNAME');                 // SMTP username
    $mail->Password = getenv('SMTP_PASSWORD');                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = getenv('SMTP_PORT');                                    // TCP port to connect to

    //Recipients
    $mail->setFrom(getenv('MAIL_FROM'));
    $mail->addAddress(getenv('MAIL_TO'));     // Add a recipient
    $mail->addReplyTo($email);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $email_body;
    $mail->Body    = $message;

    $mail->send();

} catch (Exception $e) {
	echo '<div class="error_message">Qualcosa è andato storto.</div>';
	exit;
}

echo "<fieldset>";
echo "<div id='success_page'>";
echo "<h2>Email inviata.</h2>";
echo "<p>Grazie <strong>$name</strong>, il tuo messaggio è stato inviata.</p>";
echo "</div>";
echo "</fieldset>";

