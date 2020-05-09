<?php require APPROOT . '/views/inc/header.php'; ?>

<div id="content">
  <div id="inner-content" class="row">
    <main id="main" class="large-12 medium-12 columns" role="main">
      <div id="post-41615" class="post-41615 page type-page status-publish hentry" role="article">
        <!-- <header class="article-header">
        <h1 class="page-title">Biogaia®</h1>
      </header> -->
        <section class="entry-content" itemprop="mainContentOfPage">
          <section id="section--hero" data-vc-full-width="true" data-vc-full-width-init="false" 
          data-vc-stretch-content="true" class="vc_section vc_section-o-content-top vc_section-flex">
            <div class="vc_row wpb_row vc_row-fluid hero--row">
              <div class="hero--column wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element hero--title generic-wrapper">
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
          <section id="section--product-tabs" data-vc-full-width="true" data-vc-full-width-init="false" 
            data-vc-stretch-content="true" class="vc_section">
            <div class="vc_row wpb_row vc_row-fluid product-tabs--row generic-wrapper vc_row-o-equal-height vc_row-flex">
              <?php foreach ($data['pharmaceuticals'] as $pharmaceutical) : ?>
                <div class="product-tabs--column theme-<?php echo (!empty($data['category']->color)) ? $data['category']->color : 'orange'; ?> wpb_column vc_column_container vc_col-sm-3">
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
                            &#039;theme-<?php echo (!empty($data['category']->color)) ? $data['category']->color : 'orange'; ?>&#039;)">
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
              <div class="vc_row wpb_row vc_row-fluid laboratory--row generic-wrapper vc_row-o-content-top vc_row-flex">
                <div class="laboratory--column left wpb_column vc_column_container vc_col-sm-6">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_text_column wpb_content_element  generic-title-alt laboratory-title">
                        <div class="wpb_wrapper">
                          <p><?php echo utf8_encode($pharmaceutical->title); ?></p>
                          <h3><?php echo utf8_encode($pharmaceutical->title1); ?></h3>
                        </div>
                      </div>

                      <div class="wpb_text_column wpb_content_element  laboratory-text">
                        <div class="wpb_wrapper">
                          <p><?php echo utf8_encode($pharmaceutical->body1); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="laboratory--column right theme-yellow wpb_column vc_column_container vc_col-sm-6">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_single_image wpb_content_element vc_align_center   generic-line right laboratory-img">

                        <figure class="wpb_wrapper vc_figure">
                          <div class="vc_single_image-wrapper   vc_box_border_grey">
                            <img width="550" height="507" src="<?php echo URLROOT; ?>/img/<?php echo $pharmaceutical->img1; ?>" class="vc_single_image-img attachment-full" alt="Lait de Chèvre en Poudre et Lait Bébé Gourmand" style="max-height: 250px; width: auto;" />
                          </div>
                        </figure>
                      </div>

                      <div class="wpb_text_column wpb_content_element  laboratory--text-right">
                        <div class="wpb_wrapper">
                          <p><?php echo utf8_encode($pharmaceutical->body); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vc_row-full-width vc_clearfix"></div>
              <div class="vc_row wpb_row vc_row-fluid laboratory--row generic-wrapper vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
                <div class="laboratory--column left wpb_column vc_column_container vc_col-sm-6">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_single_image wpb_content_element vc_align_center   generic-line left laboratory-img">
                        <figure class="wpb_wrapper vc_figure">
                          <div class="vc_single_image-wrapper   vc_box_border_grey">
                            <img width="649" height="598" src="<?php echo URLROOT; ?>/img/pharmaceuticals/<?php echo $pharmaceutical->img2; ?>" class="vc_single_image-img attachment-full" alt="ORL Pédiatrique et Rhinite Bébé et Infection ORL" />
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
                          <h2><?php echo utf8_encode($pharmaceutical->title2); ?></h2>
                        </div>
                      </div>
                      <div class="wpb_text_column wpb_content_element  laboratory-text">
                        <div class="wpb_wrapper">
                          <?php echo utf8_encode($pharmaceutical->body2); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
                          <img width="649" height="598" src="<?php echo URLROOT; ?>/img/categories/<?php echo $data["category"]->img1; ?>" class="vc_single_image-img attachment-full" alt="petit-garcon-avec-panier" sizes="(max-width: 649px) 100vw, 649px" />
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
                          <span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Une expertise reconnue&quot;}" data-sheets-userformat="{&quot;2&quot;:23041,&quot;3&quot;:&#091;null,0&#093;,&quot;12&quot;:0,&quot;14&quot;:&#091;null,2,0&#093;,&quot;15&quot;:&quot;Quicksand&quot;,&quot;17&quot;:1}">Une expertise reconnue</span>
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
                      <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-custom vc_btn3-color-grey" 
                        href="<?php echo URLROOT; ?>/pages/nouscontacter" title="">nous contacter</a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="vc_row-full-width vc_clearfix"></div>
          <section id="section--contact-view" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section">
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
      </div> <!-- end article -->
    </main> <!-- end #main -->
  </div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php require APPROOT . '/views/inc/footer.php'; ?>