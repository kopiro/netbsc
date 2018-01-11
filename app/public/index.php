<?php include __DIR__ . '/../dataset.php'; ?>
<?php include __DIR__ . '/../modules/header.php'; ?>

<div id="featured-slider">
  <div class="cycle-slideshow  overlay-enabled" id="main-slider" data-cycle-fx="fadeout"  data-cycle-speed="1000"  data-cycle-pause-on-hover="true"  data-cycle-loader="true"  data-cycle-log="false"  data-cycle-swipe="true" data-cycle-auto-height="container"  data-cycle-timeout="3000"  data-cycle-slides="article" data-pager-template='<span class="pager-box"></span>'>
    <!-- prev/next links -->
    <div class="cycle-prev btn-circle"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    <div class="cycle-next btn-circle"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    <!-- pager --> 
    <div class="cycle-pager"> </div>
    <?php foreach ($carousel as $i => $a) : ?>
      <article>
        <div class="caption">
          <div class="cycle-caption text-aligncenter">
            <div class="container">
              <h3><a href="#" ><?= $a['title'] ?></a></h3>
              <p><?= $a['description'] ?></p>
              <div class="slider-buttons">
<!--                 <a class="btn btn-large btn-circle" href="#">Learn More</a>
 -->              </div> <!-- .slider-buttons -->
            </div> <!-- .container -->
          </div> <!-- .cycle-caption -->
        </div> <!-- .caption -->
        <a href= "#"  >
          <img src="images/slider/slide<?= (1+$i) ?>.jpg" alt="" />
        </a>
      </article>  <!-- article -->    
    <?php endforeach; ?>

  </div><!-- #main-slider -->
</div> <!-- #featured-slider -->

<div id="content" class="site-content global-layout-no-sidebar">
  <div class="container">
    <div class="inner-wrapper">    
      <div id="primary" class="content-area">
        <main id="main" class="site-main" >
         
          <aside  class="section section-featured-page">
            <div class="container">
              <img class="alignleft" alt="Chi siamo" src="/images/slider/slide3.jpg">
              <div class="featured-page-section">
                <h2 class="section-title">Chi siamo</h2>
                <h5></h5>
                <p>NET BSC nasce nel 2004 per supportare le aziende agro-alimentari nella loro crescita ed innovazione continua.</p>
                <p>La conoscenza approfondita da parte dei soci delle problematiche produttive nel settore food ha permesso di sviluppare soluzioni IT innovative, semplici e non invasive nelle aree di produzione.</p>
              </div><!-- .featured-page-section -->
            </div> <!-- .container -->
          </aside> <!-- .section-featured-page -->
         
          <aside class="section section-services lite-background">
            <div class="container">
              <div class="section-title-wrap">
                <h2 class="section-title">Le nostre soluzioni</h2><span class="divider"></span>
                <p class="section-subtitle"></p>
              </div> <!-- .section-title-wrap -->
              <div class="service-block-list">
                <div class="inner-wrapper">
                  <div class="col-grid-4 service-block-item service-item-1">
                    <div class="service-block-inner">
                      <a class="service-icon" href="#" ><i class="fa fa-mobile"></i></a>
                      <div class="service-block-inner-content">
                        <h3 class="service-item-title"><a href="#" >Sistemi ERP</a></h3>
                        <div class="service-block-item-excerpt">
                          <p>Sviluppiamo sistemi ERP all’avanguardia con la piattaforma MICROSOFT DYNAMICS NAV, la soluzione strategica per ogni azienda che ritiene il sistema informativo importante fattore per il proprio business</p>
                        </div><!-- .service-block-item-excerpt -->
                      </div><!-- .service-block-inner-content -->
                    </div> <!-- .service-block-inner -->
                  </div> <!-- .service-block-item --> 
                  <div class="col-grid-4 service-block-item service-item-2">
                    <div class="service-block-inner">
                      <a class="service-icon" href="#" ><i class="fa fa-tint"></i></a>
                      <div class="service-block-inner-content">
                        <h3 class="service-item-title"><a href="#" >Soluzioni gestionali</a>  </h3>
                        <div class="service-block-item-excerpt">
                          <p>Offriamo servizi completi e mirati di consulenza tecnologica e progettazione, capaci di rispondere alle esigenze aziendali in termini di infrastrutture IT, riducendo i costi e ottimizzando le performance.</p>
                        </div><!-- .service-block-item-excerpt -->
                      </div><!-- .service-block-inner-content -->
                    </div> <!-- .service-block-inner -->
                  </div> <!-- .service-block-item -->
                  <div class="col-grid-4 service-block-item service-item-3">
                    <div class="service-block-inner">
                      <a class="service-icon" href="#" ><i class="fa fa-star-o"></i></a>
                      <div class="service-block-inner-content">
                        <h3 class="service-item-title"><a href="#" >Facility Management</a>  </h3>
                        <div class="service-block-item-excerpt">
                          <p>Siamo specializzati nell’installazione di prodotti hardware &amp; software che hanno lo scopo di soddisfare le esigenze del cliente migliorando la funzionalità dei sistemi di gestione aziendale aumentandone il valore.</p>
                        </div><!-- .service-block-item-excerpt -->
                      </div><!-- .service-block-inner-content -->
                    </div> <!-- .service-block-inner -->    
                  </div> <!-- .service-block-item -->
                  <div class="col-grid-4 service-block-item service-item-4">
                    <div class="service-block-inner">
                      <a class="service-icon" href="#" ><i class="fa fa-paper-plane"></i></a>
                      <div class="service-block-inner-content">
                        <h3 class="service-item-title"><a href="#" >Retail</a>  </h3>
                        <div class="service-block-item-excerpt">
                          <p>Soluzioni software modulari per l’automazione del punto cassa con interfaccia di vendita intuitiva e personalizzabile.</p>
                        </div><!-- .service-block-item-excerpt -->
                      </div><!-- .service-block-inner-content -->
                    </div> <!-- .service-block-inner -->
                  </div> <!-- .service-block-item --> 
                  <div class="col-grid-4 service-block-item service-item-5">
                    <div class="service-block-inner">
                      <a class="service-icon" href="#" ><i class="fa fa-magic"></i></a>
                      <div class="service-block-inner-content">
                        <h3 class="service-item-title"><a href="#" >Supporto</a> </h3>
                        <div class="service-block-item-excerpt">
                          <p>Il nostro team si metterà in contatto con te ogni giorno per verificare che lo stato di avanzamento del lavoro sia in linea con i tuoi obiettivi.</p>
                        </div><!-- .service-block-item-excerpt -->
                      </div><!-- .service-block-inner-content -->
                    </div> <!-- .service-block-inner -->
                  </div> <!-- .service-block-item -->
                  <div class="col-grid-4 service-block-item service-item-6">
                    <div class="service-block-inner">
                      <a class="service-icon" href="#" ><i class="fa fa-search-plus"></i></a>
                      <div class="service-block-inner-content">
                        <h3 class="service-item-title"><a href="#" >Consulenza</a> </h3>
                        <div class="service-block-item-excerpt">
                          <p>Grazie alla nostra esperienza offriamo un ventaglio di competenze di alto livello su tutte le tematiche dell’information e communication technology.</p>
                        </div><!-- .service-block-item-excerpt -->
                      </div><!-- .service-block-inner-content -->
                    </div> <!-- .service-block-inner -->    
                  </div> <!-- .service-block-item -->
                </div> <!-- .inner-wrapper -->
              </div> <!-- .service-block-list -->
            </div> <!-- .container -->
          </aside> <!-- .section section-services -->

          <aside class="section section-teams">
            <div class="container">
              <div class="section-title-wrap">
                <h2 class="section-title">Il nostro team</h2><span class="divider"></span>
<!--                 <p class="section-subtitle">Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. Praesent sed elit. Nulla posuere. Etiam sit amet turpis. Nullam mattis libero non</p>
 -->              </div> <!-- .section-title-wrap -->
              <div class="teams-section">
                <div class="inner-wrapper">

                  <?php foreach ($people as $p) : ?>
                  <div class="col-grid-3 team-item">
                    <div class="thumb-summary-wrap">
                      <div class="team-thumb">
                        <a href="#" target="-sefl"> <img alt="Team" src="<?= $p['picture'] ?>"></a>
                      </div><!-- .team-thumb-->
                      <div class="team-text-wrap">
                        <h3 class="team-title"><a href="#"><?= $p['name'] ?></a></h3>
                        <p class="team-position"><?= $p['role'] ?></p>
                      </div><!-- .team-text-wrap -->
                      <div class="social-links circle">
                        <ul>
                          <?php foreach ($p['social'] as $k => $s) : ?>
                            <li><a href="<?= $s ?>" target="_blank"><?= ucwords($k) ?></a></li>
                          <?php endforeach; ?>
                        </ul>
                      </div><!-- .social-links --> 
                    </div> <!-- .team-item -->
                  </div> <!-- .team-item  -->
                <?php endforeach; ?>

                </div> <!-- .inner-wrapper -->
              </div> <!-- .teams-section -->
            </div> <!-- .container -->
          </aside> <!-- .section section-teams -->

          <aside class="section section-counter dark-background background-img">
            <div class="container">
              <div class="counter-section">
                <div class="inner-wrapper">
                  <div class="col-grid-3 counter-item">
                    <div class="thumb-summary-wrap">
                      <div class="counter-icon"><i class="fa fa-globe"></i></div>
                      <p class="counter-nos">30</p><span>%</span>
                      <h3 class="counter-title"><a  href="#">Riduzione costi<br> della non qualità</a></h3>
                    </div><!-- .counter-text-wrap -->
                  </div> <!-- .counter-item -->
                  <div class="col-grid-3 counter-item">
                    <div class="thumb-summary-wrap">
                      <div class="counter-icon"><i class="fa fa-heartbeat"></i></div>
                      <p class="counter-nos">60</p><span>%</span>
                      <h3 class="counter-title"><a  href="#">Incremento <br>della produttività delle risorse umane</a></h3>
                    </div><!-- .counter-text-wrap -->
                  </div> <!-- .counter-item -->
                  <div class="col-grid-3 counter-item">
                    <div class="thumb-summary-wrap">
                      <div class="counter-icon"><i class="fa fa-commenting"></i></div>
                      <p class="counter-nos">90</p><span>%</span>
                      <h3 class="counter-title"><a  href="#">Disponibilità immediata<br>dell'informazione</a></h3>
                    </div><!-- .counter-text-wrap -->
                  </div> <!-- .counter-item -->
                  <div class="col-grid-3 counter-item">
                    <div class="thumb-summary-wrap">
                      <div class="counter-icon"><i class="fa fa-comments-o"></i></div>
                      <p class="counter-nos">100</p><span>%</span>
                      <h3 class="counter-title"><a  href="#">Soddisfazione <br>dei nostri clienti</a></h3>
                    </div><!-- .counter-text-wrap -->
                  </div> <!-- .counter-item -->
                </div> <!-- .inner-wrapper -->
              </div> <!-- .counter-section -->
            </div> <!-- .container -->
          </aside> <!-- .section section-counter -->

          <?php include __DIR__ . '/../modules/clients.php'; ?>

          <aside class="section  section-quick-contact dark-background background-img">

           <div class="container">
            <div class="inner-wrapper">
              <div class="col-grid-6">
                <div class="section-title-wrap text-alignleft">
                  <h2 class="section-title">Contattaci</h2><span class="divider"></span>
                  <p class="section-subtitle"><!-- Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. Praesent sed elit. Nulla posuere. Etiam sit amet turpis. Nullam mattis libero non --></p>
                </div> <!-- .section-title-wrap -->
                <div class="quick-contact-widget">
                  <span><i class="fa fa-phone" aria-hidden="true"></i>Tel <?= $info['tel'] ?></span>
                  <span><i class="fa fa-envelope" aria-hidden="true"></i><?= $info['email'] ?></span>
                  <span><i class="fa fa-map-o" aria-hidden="true"></i><?= $info['location'] ?></span>
                </div>
                <div class="social-links real-background  alignleft circle">
                  <ul>
                    <?php foreach ($info['social'] as $k => $s) : ?>
                    <li><a href="<?= $s ?>" target="_blank"><?= ucwords($k) ?></a></li>
                    <?php endforeach; ?> 
                  </ul>
                </div>
              </div><!-- col-grid-6 -->
              <div class="col-grid-6 contact-form-area contactdesc">

                <div id="contact-form" class="contact-form">
                  <div id="message"></div>
                  <form id="contactform" action="/contact.php" name="contactform" method="post">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nome *"> 
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email *"> 
                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder=""></textarea>
                    <button type="submit" value="SEND" id="submit" class="btn btn-primary btn-lg btn-circle">Invia</button>
                  </form>    
                </div><!-- .contact-form -->
              </div><!-- .contact-form-area -->
            </div><!--.inner-wrapper -->
          </div>   
        </aside><!-- .section-quick-contact -->
        <aside class="section section-testimonial-carousel circle-btn">
          <div class="container">
            <div class="section-title-wrap">
              <h2 class="section-title">I nostri partner</h2><span class="divider"></span>
<!--               <p class="section-subtitle">La nostra società collabora</p>
 -->            </div> <!-- .section-title-wrap -->
            <div class="testimonial-carousel-wrapper">

            <?php foreach ($partners as $p) : ?>
              <div class="testimonial-item">
                <div class="testimonial-wrapper">
                  <div class="testimonial-thumb">
                    <a href="#"><img alt="" src="<?= $p['picture'] ?>"></a> 
                  </div><!-- .testimonial-thumb -->
                  <div class="testimonial-summary">
<!--                     <p>Wow, I'm so happy with your service. You managed to exceed my expectatio</p>
 -->                    <h3 class="testimonial-title"><a href="<?= $p['link' ] ?>"><?= $p['name'] ?></a></h3>
                    <p class="testimonial-position"><?= $p['business'] ?></p>  
                  </div><!-- .testimonial-summary -->
                </div> <!-- .testimonial-wrapper -->
              </div> <!-- .testimonial-item  -->
            <?php endforeach; ?>
            <div> <!-- .testimonial-carousel-wrapper -->

          </div><!-- .container -->
        </aside> <!-- .section section-testimonial-carousel -->

      </main> <!-- #main -->  
    </div> <!-- #primary -->  
  </div> <!-- .inner-wrapper -->  
</div> <!-- .container -->
</div> <!-- #content-->            

<footer id="colophon" class="site-footer">
  <div class="colophon-bottom">
    <div class="container">
     <div class="copyright">
      <p> Copyright © <?= date('Y') ?> <a href="http://anilbasnet.com"><?= $info['name'] ?></a>. Tutti i diritti riservati. </p> </div>
    </div> <!-- .container -->
  </div> <!-- .colophon-bottom -->
</footer> <!-- footer ends here -->
</div> <!-- #page -->

<?php include __DIR__ . '/../modules/footer.php' ?>
