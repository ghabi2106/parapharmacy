<div class="main-menu--logo">
  <a href="<?php echo URLROOT; ?>" class="custom-logo-link" rel="home">
    <img width="206" height="35" src="<?php echo URLROOT; ?>/img/DS-Pharma-loxxxgo-final.png" 
      class="custom-logo" alt="Laboratoire PediAct" />
  </a>
</div>
<div class="main-menu--navigation">
  <ul id="menu-main-menu-navigation-pages-1" class="vertical medium-horizontal menu" data-responsive-menu="accordion medium-dropdown">
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item current_page_item
                <?php if ($data["name"] == "categories-index") echo "active"; ?>">
      <a href="<?php echo URLROOT; ?>" aria-current="page">Accueil</a>
    </li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page
                <?php if ($data["name"] == "pages-notrelaboratoire") echo "active"; ?>">
      <a href="<?php echo URLROOT; ?>/pages/notrelaboratoire">Notre Laboratoire</a>
    </li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page
                <?php if ($data["name"] == "pages-nousrejoindre") echo "active"; ?>">
      <a href="<?php echo URLROOT; ?>/pages/nousrejoindre">Nous rejoindre</a>
    </li>

    <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41665">
      <a>Nous connaÎtre</a>
      <ul class="menu">
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41666"><a href="<?php echo URLROOT; ?>/pages/notreLaboratoire">Notre Laboratoire</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41667"><a href="<?php echo URLROOT; ?>/pages/nousrejoindre">Nous Rejoindre</a></li>
      </ul>
    </li> -->
    <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41668"><a>Nos domaines d&#8217;expertises</a>
      <ul class="menu">
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41669"><a href="<?php echo URLROOT; ?>/pages/dermatologie">Dermatologie</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41670"><a href="<?php echo URLROOT; ?>/pages/fermentslactiques">Ferments Lactiques</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41671"><a href="<?php echo URLROOT; ?>/pages/nutritioninfantile">Nutrition Infantile</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41672"><a href="<?php echo URLROOT; ?>/pages/orl">ORL</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41673"><a href="<?php echo URLROOT; ?>/pages/pneumologie">Pneumologie</a></li>
      </ul>
    </li> -->

    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children
                <?php if ($data["name"] == "categories-show") echo "active"; ?>">
      <a href="#">Nos produits</a>
      <ul class="menu">
        <?php foreach ($data['categories'] as $category) : ?>
          <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
            <a><?php echo $category->title; ?></a>
            <ul class="menu">
              <li class="menu-item menu-item-type-custom menu-item-object-custom
                <?php if ($data["name"] == "categories-show" && $category->id==end(explode('/', trim($_SERVER['REQUEST_URI'], '/')))) echo "active"; ?>">
                <a href="<?php echo URLROOT; ?>/categories/show/<?php echo $category->id; ?>">
                  <?php echo $category->title; ?>
                </a></li>
              <!-- <li    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41678"><a href="biogaia/indexca2f.html?produit=comprimes">BioGaia® Comprimés</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41679"><a href="biogaia/index4529.html?produit=vitamine">BioGaia® + Vitamine D</a></li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-56397"><a href="biogaia/index38a8.html?produit=minipack">BioGaia® Minipack</a></li> -->
            </ul>
          </li>
        <?php endforeach; ?>
        <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41680">
          <a>Capricare®</a>
          <ul class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41681"><a href="capricare/index5c1c.html?produit=deuxieme-age">Capricare® 2ème âge</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41682"><a href="capricare/index6cc9.html?produit=croissance">Capricare® Croissance</a></li>
          </ul>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41700"><a>TipsHaler®</a>
          <ul class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41701"><a href="tips-haler/indexe3ea.html?produit=nourrisson">TipsHaler® nourrisson</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41702"><a href="tips-haler/indexee26.html?produit=pediatrique">TipsHaler® pédiatrique</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41703"><a href="tips-haler/index0fee.html?produit=sans-masque">TipsHaler® sans masque</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41704"><a href="tips-haler/indexa957.html?produit=masque-adulte">TipsHaler® masque adulte</a></li>
          </ul>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41683">
          <a>Pharyndol®</a>
          <ul class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41684"><a href="pharyndol/indexe8ed.html?produit=enfant">Pharyndol® Enfant</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41685"><a href="pharyndol/index29eb.html?produit=adulte">Pharyndol® Adulte</a></li>
          </ul>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41688">
          <a>PoxClin®</a>
          <ul class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41689"><a href="poxclin/index8fc0.html?produit=varicelle">PoxClin® Varicelle</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41690"><a href="poxclin/indexe2ee.html?produit=demangeaisons">PoxClin® Démangeaisons</a></li>
          </ul>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41695">
          <a>KidsClin®</a>
          <ul class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41697"><a href="kidsclin/index48f3.html?produit=erytheme-fessier">KidsClin® Érythème fessier</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41696"><a href="kidsclin/indexf930.html?produit=croutes-de-lait">KidsClin® Croûtes de lait</a></li>
          </ul>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41686">
          <a>LinfoVir® Plus</a>
          <ul class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41687"><a href="linfovir-plus/index.html">LinfoVir® Plus</a></li>
          </ul>
        </li>
        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41698">
          <a>PoxKare®</a>
          <ul class="menu">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41699"><a href="poxkare/index.html">PoxKare®</a></li>
          </ul>
        </li> -->
      </ul>
    </li>

    <li class="menu-item menu-item-type-post_type menu-item-object-page
      <?php if ($data["name"] == "pages-notreblog") echo "active"; ?>">
      <a href="<?php echo URLROOT; ?>/pages/notreblog">Notre blog</a>
    </li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page
      <?php if ($data["name"] == "pages-nosguides") echo "active"; ?>">
      <a href="<?php echo URLROOT; ?>/pages/nosguides">Nos guides</a>
    </li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page
      <?php if ($data["name"] == "pages-nouscontacter") echo "active"; ?>">
      <a href="<?php echo URLROOT; ?>/pages/nouscontacter">Nous contacter</a>
    </li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page">
      <a href="<?php echo URLROOT; ?>/pages/ouacheter">Où Acheter</a>
    </li>
  </ul>
</div>
<div class="main-menu--mobile-btn">
  <button class="" type="button" data-toggle="off-canvas">☰</button>
</div>