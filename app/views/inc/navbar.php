<div class="off-canvas position-right main-menu--off-canvas" id="off-canvas" data-off-canvas>
  <div class="off-canvas--logo">
    <a href="#">
      <img src="<?php echo URLROOT; ?>/wp-content/uploads/2018/05/logo-pediact-blanc.png" alt="" class="img-rounded center-block">
    </a>
  </div>
  <div class="off-canvas--navigation">
    <ul id="menu-main-menu-navigation-pages" class="vertical menu" data-accordion-menu>
      <li id="menu-item-56356" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-55738 current_page_item menu-item-56356 active">
        <a href="<?php echo URLROOT; ?>" aria-current="page">Accueil</a>
      </li>
      <li id="menu-item-41665" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41665">
        <a>Nous connaÎtre</a>
        <ul class="vertical menu">
          <li id="menu-item-41666" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41666">
            <a href="<?php echo URLROOT; ?>/pages/notreLaboratoire">Notre Laboratoire</a>
          </li>
          <li id="menu-item-41667" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41667">
            <a href="<?php echo URLROOT; ?>/pages/nousrejoindre">Nous Rejoindre</a>
          </li>
        </ul>
      </li>
      <li id="menu-item-41668" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41668">
        <a>Nos domaines d&#8217;expertises</a>
        <ul class="vertical menu">
          <li id="menu-item-41669" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41669"><a href="<?php echo URLROOT; ?>/pages/dermatologie">Dermatologie</a></li>
          <li id="menu-item-41670" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41670"><a href="<?php echo URLROOT; ?>/pages/fermentslactiques">Ferments Lactiques</a></li>
          <li id="menu-item-41671" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41671"><a href="<?php echo URLROOT; ?>/pages/nutritioninfantile">Nutrition Infantile</a></li>
          <li id="menu-item-41672" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41672"><a href="<?php echo URLROOT; ?>/pages/orl">ORL</a></li>
          <li id="menu-item-41673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41673"><a href="<?php echo URLROOT; ?>/pages/pneumologie">Pneumologie</a></li>
        </ul>
      </li>
      <li id="menu-item-41674" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41674"><a href="#">Nos produits</a>
        <ul class="vertical menu">
        <?php foreach ($data['categories'] as $category) : ?>
          <li id="menu-item-41675" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41675">
            <a><?php echo $category->title; ?></a>
              <ul class="vertical menu">
                <li id="menu-item-41676" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41676"><a href="<?php echo URLROOT; ?>/categories/show/<?php echo $category->id; ?>">hhhhhhhhhh</a></li>
                <!-- <li id="menu-item-41678" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41678"><a href="biogaia/indexca2f.html?produit=comprimes">BioGaia® Comprimés</a></li>
                <li id="menu-item-41679" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41679"><a href="biogaia/index4529.html?produit=vitamine">BioGaia® + Vitamine D</a></li>
                <li id="menu-item-56397" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-56397"><a href="biogaia/index38a8.html?produit=minipack">BioGaia® Minipack</a></li> -->
              </ul> 
          </li>
        <?php endforeach; ?> 
          <!-- <li id="menu-item-41680" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41680"><a>Capricare®</a>
            <ul class="vertical menu">
              <li id="menu-item-41681" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41681"><a href="capricare/index5c1c.html?produit=deuxieme-age">Capricare® 2ème âge</a></li>
              <li id="menu-item-41682" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41682"><a href="capricare/index6cc9.html?produit=croissance">Capricare® Croissance</a></li>
            </ul>
          </li>
          <li id="menu-item-41700" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41700"><a>TipsHaler®</a>
            <ul class="vertical menu">
              <li id="menu-item-41701" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41701"><a href="tips-haler/indexe3ea.html?produit=nourrisson">TipsHaler® nourrisson</a></li>
              <li id="menu-item-41702" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41702"><a href="tips-haler/indexee26.html?produit=pediatrique">TipsHaler® pédiatrique</a></li>
              <li id="menu-item-41703" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41703"><a href="tips-haler/index0fee.html?produit=sans-masque">TipsHaler® sans masque</a></li>
              <li id="menu-item-41704" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41704"><a href="tips-haler/indexa957.html?produit=masque-adulte">TipsHaler® masque adulte</a></li>
            </ul>
          </li>
          <li id="menu-item-41683" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41683"><a>Pharyndol®</a>
            <ul class="vertical menu">
              <li id="menu-item-41684" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41684"><a href="pharyndol/indexe8ed.html?produit=enfant">Pharyndol® Enfant</a></li>
              <li id="menu-item-41685" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41685"><a href="pharyndol/index29eb.html?produit=adulte">Pharyndol® Adulte</a></li>
            </ul>
          </li>
          <li id="menu-item-41688" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41688"><a>PoxClin®</a>
            <ul class="vertical menu">
              <li id="menu-item-41689" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41689"><a href="poxclin/index8fc0.html?produit=varicelle">PoxClin® Varicelle</a></li>
              <li id="menu-item-41690" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41690"><a href="poxclin/indexe2ee.html?produit=demangeaisons">PoxClin® Démangeaisons</a></li>
            </ul>
          </li>
          <li id="menu-item-41695" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41695"><a>KidsClin®</a>
            <ul class="vertical menu">
              <li id="menu-item-41697" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41697"><a href="kidsclin/index48f3.html?produit=erytheme-fessier">KidsClin® Érythème fessier</a></li>
              <li id="menu-item-41696" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41696"><a href="kidsclin/indexf930.html?produit=croutes-de-lait">KidsClin® Croûtes de lait</a></li>
            </ul>
          </li>
          <li id="menu-item-41686" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41686"><a>LinfoVir® Plus</a>
            <ul class="vertical menu">
              <li id="menu-item-41687" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41687"><a href="linfovir-plus/index.html">LinfoVir® Plus</a></li>
            </ul>
          </li>
          <li id="menu-item-41698" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41698"><a>PoxKare®</a>
            <ul class="vertical menu">
              <li id="menu-item-41699" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41699"><a href="poxkare/index.html">PoxKare®</a></li>
            </ul>
          </li> -->
        </ul>
      </li>
      <li id="menu-item-41705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41705"><a href="<?php echo URLROOT; ?>/pages/notreblog">Notre blog</a></li>
      <li id="menu-item-41706" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41706"><a href="<?php echo URLROOT; ?>/pages/nosguides">Nos guides</a></li>
      <li id="menu-item-41707" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41707"><a href="<?php echo URLROOT; ?>/pages/nouscontacter">Nous contacter</a></li>
      <li id="menu-item-56166" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56166"><a href="ou-acheter-nos-produits/index.html">Où Acheter</a></li>
    </ul>
  </div>
</div>