<?php require APPROOT . '/views/inc/header.php'; ?>

<div id="content">

  <div id="inner-content" class="row">

    <main id="main" class="large-12 medium-12 columns" role="main">

      <div id="post-41615" class="post-41615 page type-page status-publish hentry" role="article">
        <!-- <header class="article-header">
        <h1 class="page-title">Biogaia®</h1>
      </header> -->
        <section class="entry-content" itemprop="mainContentOfPage">
          <section id="section--hero" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section vc_section-o-content-top vc_section-flex">
            <div class="vc_row wpb_row vc_row-fluid hero--row">
              <div class="hero--column wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  hero--title generic-wrapper">
                      <div class="wpb_wrapper">
                        <h1><?php echo utf8_encode($data['category']->title); ?></h1>
                        <p><?php echo utf8_encode($data['category']->body); ?></p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="vc_row-full-width vc_clearfix"></div>
          <section id="section--product-tabs" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section">
            <div class="vc_row wpb_row vc_row-fluid product-tabs--row generic-wrapper vc_row-o-equal-height vc_row-flex">
              <?php foreach ($data['pharmaceuticals'] as $pharmaceutical) : ?>
                <div class="product-tabs--column theme-<?php echo (!empty($pharmaceutical->color)) ? $pharmaceutical->color : 'orange'; ?> wpb_column vc_column_container vc_col-sm-3">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_text_column wpb_content_element  product-tabs--tab">
                        <div class="wpb_wrapper">
                          <p><?php echo utf8_encode($pharmaceutical->type); ?></p>
                          <h2><?php echo utf8_encode($pharmaceutical->title); ?></h2>
                          <p><?php echo utf8_encode($pharmaceutical->volume); ?></p>
                        </div>
                      </div>
                      <div class="vc_btn3-container  product-tabs--button gouttes vc_btn3-right">
                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-custom vc_btn3-color-grey" href="#" title="" onclick="openProduct(event, 
                            &#039;product<?php echo $pharmaceutical->id; ?>&#039;, 
                            &#039;<?php echo URLROOT; ?>/img/pharmaceuticals/<?php echo $pharmaceutical->img; ?>&#039;, 
                            &#039;theme-<?php echo (!empty($pharmaceutical->color)) ? $pharmaceutical->color : 'orange'; ?>&#039;)">
                          Découvrir le produit
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </section>
          <?php foreach ($data['pharmaceuticals'] as $pharmaceutical) : ?>
            <div class="vc_row-full-width vc_clearfix"></div>
            <section id="product<?php echo $pharmaceutical->id; ?>" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section product-tab--content">
              <div class="vc_row wpb_row vc_row-fluid product-content--row generic-wrapper vc_row-o-content-top vc_row-flex">
                <div class="product-content--column left text wpb_column vc_column_container vc_col-sm-6">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_text_column wpb_content_element  generic-title-alt product-content--title">
                        <div class="wpb_wrapper">
                          <p><?php echo utf8_encode($pharmaceutical->title); ?></p>
                          <h3><?php echo utf8_encode($pharmaceutical->title1); ?></h3>

                        </div>
                      </div>

                      <div class="wpb_text_column wpb_content_element  product-content--text">
                        <div class="wpb_wrapper">
                          <?php echo utf8_encode($pharmaceutical->body1); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content--column image right wpb_column vc_column_container vc_col-sm-6">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_single_image wpb_content_element vc_align_center   product-content--img">

                        <figure class="wpb_wrapper vc_figure">
                          <div class="vc_single_image-wrapper   vc_box_border_grey">
                            <img width="639" height="415" src="<?php echo URLROOT; ?>/img/pharmaceuticals/<?php echo $pharmaceutical->img1; ?>" class="vc_single_image-img attachment-full" alt="produit-biogaia-goutte" sizes="(max-width: 639px) 100vw, 639px" />
                          </div>
                        </figure>
                      </div>

                      <div class="wpb_text_column wpb_content_element  product-content--text-right">
                        <div class="wpb_wrapper">
                          <p><?php echo utf8_encode($pharmaceutical->body); ?></p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vc_row wpb_row vc_row-fluid product-content--row generic-wrapper second vc_row-o-content-top vc_row-flex">
                <div class="product-content--column image left wpb_column vc_column_container vc_col-sm-6">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_single_image wpb_content_element vc_align_center   generic-line left product-content--img">

                        <figure class="wpb_wrapper vc_figure">
                          <div class="vc_single_image-wrapper   vc_box_border_grey">
                            <img width="649" height="598" src="<?php echo URLROOT; ?>/img/pharmaceuticals/<?php echo $pharmaceutical->img2; ?>" class="vc_single_image-img attachment-full" alt="mere-et-nourrisson" sizes="(max-width: 649px) 100vw, 649px" />
                          </div>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product-content--column right text wpb_column vc_column_container vc_col-sm-6">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_text_column wpb_content_element  generic-title-alt product-content--title">
                        <div class="wpb_wrapper">
                          <h3><?php echo utf8_encode($pharmaceutical->title2); ?></h3>
                        </div>
                      </div>

                      <div class="wpb_text_column wpb_content_element  product-content--text">
                        <div class="wpb_wrapper">
                          <?php echo utf8_encode($pharmaceutical->body2); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="vc_row wpb_row vc_row-fluid row--caroussel-using-advice generic-wrapper">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                          <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                              <div class="wpb_text_column wpb_content_element  generic-title-alt product-content--title">
                                <div class="wpb_wrapper">
                                  <h3>Conseils d&#8217;utilisation<br />
                                    &amp; Conservation</h3>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="vc_tta-container" data-vc-action="collapse">
                        <div class="vc_general vc_tta vc_tta-tabs vc_tta-color-grey vc_tta-style-classic vc_tta-shape-square vc_tta-o-shape-group vc_tta-has-pagination  tabs--using-advice vc_tta-o-no-fill vc_tta-tabs-position-top vc_tta-controls-align-left">
                          <div class="vc_tta-tabs-container">
                            <ul class="vc_tta-tabs-list">
                              <li class="vc_tta-tab vc_active" data-vc-tab><a href="#content01-ea0a" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Agiter</span></a></li>
                              <li class="vc_tta-tab" data-vc-tab><a href="#content021532963811117-b4b92f96-e18e" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Administrer</span></a></li>
                              <li class="vc_tta-tab" data-vc-tab><a href="#content031532963827931-22dc9b4b-49d6" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Conserver</span></a></li>
                              <li class="vc_tta-tab" data-vc-tab><a href="#contentNB-cbda9c96-ea0a" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Composition</span></a></li>
                              <li class="vc_tta-tab" data-vc-tab><a href="#contentNB-cbda9c961515" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Précautions</span></a></li>
                            </ul>
                          </div>
                          <div class="vc_tta-panels-container">
                            <div class="vc_tta-panels">
                              <div class="vc_tta-panel vc_active tab-item" id="content01-ea0a" data-vc-content=".vc_tta-panel-body">
                                <div class="vc_tta-panel-heading">
                                  <h4 class="vc_tta-panel-title">
                                    <a href="#content01-ea0a" data-vc-accordion data-vc-container=".vc_tta-container">
                                      <span class="vc_tta-title-text">Agiter</span>
                                    </a>
                                  </h4>
                                </div>
                                <div class="vc_tta-panel-body">
                                  <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                      <?php echo utf8_encode($pharmaceutical->agiter); ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="vc_tta-panel tab-item" id="content021532963811117-b4b92f96-e18e" data-vc-content=".vc_tta-panel-body">
                                <div class="vc_tta-panel-heading">
                                  <h4 class="vc_tta-panel-title"><a href="#content021532963811117-b4b92f96-e18e" data-vc-accordion data-vc-container=".vc_tta-container">
                                      <span class="vc_tta-title-text">Administrer</span>
                                    </a>
                                  </h4>
                                </div>
                                <div class="vc_tta-panel-body">
                                  <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                      <?php echo utf8_encode($pharmaceutical->administrer); ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="vc_tta-panel tab-item" id="content031532963827931-22dc9b4b-49d6" data-vc-content=".vc_tta-panel-body">
                                <div class="vc_tta-panel-heading">
                                  <h4 class="vc_tta-panel-title"><a href="#content031532963827931-22dc9b4b-49d6" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Conserver</span></a></h4>
                                </div>
                                <div class="vc_tta-panel-body">
                                  <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                      <?php echo utf8_encode($pharmaceutical->conserver); ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="vc_tta-panel tab-item" id="contentNB-cbda9c96-ea0a" data-vc-content=".vc_tta-panel-body">
                                <div class="vc_tta-panel-heading">
                                  <h4 class="vc_tta-panel-title">
                                    <a href="#contentNB-cbda9c96-ea0a" data-vc-accordion data-vc-container=".vc_tta-container">
                                      <span class="vc_tta-title-text">Composition</span>
                                    </a>
                                  </h4>
                                </div>
                                <div class="vc_tta-panel-body">
                                  <?php echo utf8_encode($pharmaceutical->composition); ?>
                                </div>
                              </div>
                              <div class="vc_tta-panel tab-item" id="contentNB-cbda9c961515" data-vc-content=".vc_tta-panel-body">
                                <div class="vc_tta-panel-heading">
                                  <h4 class="vc_tta-panel-title">
                                    <a href="#contentNB-cbda9c961515" data-vc-accordion data-vc-container=".vc_tta-container">
                                      <span class="vc_tta-title-text">Précautions</span>
                                    </a>
                                  </h4>
                                </div>
                                <div class="vc_tta-panel-body">
                                  <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                      <?php echo utf8_encode($pharmaceutical->precautions); ?>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <ul class="vc_general vc_pagination vc_pagination-style-flat vc_pagination-shape-round vc_pagination-color-grey">
                              <li class="vc_pagination-item vc_active" data-vc-tab>
                                <a href="#content01-ea0a" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a>
                              </li>
                              <li class="vc_pagination-item" data-vc-tab>
                                <a href="#content021532963811117-b4b92f96-e18e" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a>
                              </li>
                              <li class="vc_pagination-item" data-vc-tab>
                                <a href="#content031532963827931-22dc9b4b-49d6" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a>
                              </li>
                              <li class="vc_pagination-item" data-vc-tab>
                                <a href="#contentNB-cbda9c96-ea0a" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a>
                              </li>
                              <li class="vc_pagination-item" data-vc-tab>
                                <a href="#contentNB-cbda9c961515" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </section>
          <?php endforeach; ?>
          <div class="vc_row-full-width vc_clearfix"></div>
          <section id="section--laboratory-mid" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section">
            <div class="vc_row wpb_row vc_row-fluid">
              <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  generic-title">
                      <div class="wpb_wrapper">
                        <h2>UNE PRESENCE INTERNATIONALE</h2>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid laboratory--row generic-wrapper vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
              <div class="laboratory--column left wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_single_image wpb_content_element vc_align_center   generic-line left laboratory-img">

                      <figure class="wpb_wrapper vc_figure">
                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                          <img width="649" height="598" 
                          src="<?php echo URLROOT; ?>/img/categories/<?php echo $data["category"]->img1; ?>" 
                            class="vc_single_image-img attachment-full" 
                            alt="petit-garcon-avec-panier" 
                            sizes="(max-width: 649px) 100vw, 649px" />
                          </div>
                      </figure>
                    </div>
                  </div>
                </div>
              </div>
              <div class="laboratory--column right wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  generic-title-alt laboratory-title">
                      <div class="wpb_wrapper">
                        <?php echo utf8_encode($data["category"]->title1); ?>
                      </div>
                    </div>

                    <div class="wpb_text_column wpb_content_element  laboratory-text">
                      <div class="wpb_wrapper">
                        <?php echo utf8_encode($data["category"]->body1); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="vc_row-full-width vc_clearfix"></div>
          <section id="section--laboratory-bottom" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section">
            <div class="vc_row wpb_row vc_row-fluid laboratory--row generic-wrapper vc_row-o-content-top vc_row-flex">
              <div class="laboratory--column left wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  generic-title-alt laboratory-title">
                      <div class="wpb_wrapper">
                        <h2>
                          <span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Une expertise reconnue&quot;}" 
                          data-sheets-userformat="{&quot;2&quot;:23041,&quot;3&quot;:&#091;null,0&#093;,&quot;12&quot;:0,&quot;14&quot;:&#091;null,2,0&#093;,&quot;15&quot;:&quot;Quicksand&quot;,&quot;17&quot;:1}">Une expertise reconnue</span>
                        </h2>
                      </div>
                    </div>
                    <div class="wpb_text_column wpb_content_element  laboratory-text">
                      <div class="wpb_wrapper">
                        <?php echo utf8_encode($data["category"]->body2); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="laboratory--column right wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  laboratory--text-left">
                      <div class="wpb_wrapper">
                        <p>Pour plus d’informations,<br />
                          contactez-nous.</p>
                      </div>
                    </div>
                    <div class="vc_btn3-container  generic-button vc_btn3-inline">
                      <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-custom vc_btn3-color-grey" href="../nous-contacter/index.html" title="">nous contacter</a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="vc_row-full-width vc_clearfix"></div>
          <section id="section--contact-view" data-vc-full-width="true" 
            data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section">
            <?php foreach ($data['pharmaceuticals'] as $pharmaceutical) : ?>
              <div id="review-product<?php echo $pharmaceutical->id; ?>" class="vc_row wpb_row vc_row-fluid contact-view--row generic-wrapper review--content">
                <div class="contact-view--column wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_text_column wpb_content_element  generic-title-alt">
                        <div class="wpb_wrapper">
                          <h3>Avis important</h3>
                        </div>
                      </div>
                      <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                          <?php echo utf8_encode($pharmaceutical->body3); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </section>
          <div class="vc_row-full-width vc_clearfix"></div>
        </section> <!-- end article section -->
        <!-- <footer class="article-footer">
      </footer> -->


        <div id="comments" class="comments-area">





        </div><!-- #comments -->
      </div> <!-- end article -->



    </main> <!-- end #main -->

  </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php require APPROOT . '/views/inc/footer.php'; ?>