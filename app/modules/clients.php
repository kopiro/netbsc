<aside class="section section-portfolio">
  <div class="container">
    <div class="section-title-wrap">
      <h2 class="section-title">Clienti</h2><span class="divider"></span>
<!--       <p class="section-subtitle">Nullam vulputate lorem ut leo. Sed volutpat. Etiam non pede. Nullam et mauris. Praesent sed elit. Nulla posuere. Etiam sit amet turpis. Nullam mattis libero non</p>
 -->    </div> <!-- .section-title-wrap -->
    <nav class="portfolio-filter">
      <ul>
        <li><a class="active" href="#" data-filter="*"><span></span> Tutte</a></li>
        <?php 
        $categories = [];
        foreach ($clients as $c) :
          foreach ($c['categories'] as $cat) :
            if (isset($categories[$cat])) continue;
            $categories[$cat] = true;
            ?>
            <li><a class="" href="#" data-filter=".<?= $cat ?>"><?= $cat ?></a></li>
          <?php endforeach; ?>
        <?php endforeach; ?>
      </ul>
    </nav>

    <div id="portfolio" class="portfolio-wrapper wow fadeInUp">
      <?php foreach ($clients as $c) : ?>
        <div class="portfolio-item  photography">
          <div class="item-inner-wrapper">
            <img src="<?= $c['logo'] ?>" alt="" class="portfolio-thumb">
            <div class="overlay"></div>
            <div class="portfolio-content">
              <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" href="<?= $c['logo'] ?>"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
              <h3><a href="#" ><?= $c['name'] ?></a></h3>
              <p><?= implode(', ', $c['categories']) ?></p>
            </div>
          </div>
        </div><!-- end item -->
      <?php endforeach; ?>
    </div>
  </div><!-- end masonry-wrapper -->
</aside><!-- end portfolio -->