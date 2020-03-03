<?php require APPROOT . '/views/inc/header.php'; ?>










</div>

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
                        <h1>La gamme BioGaia®</h1>
                        <p><em>Lactobacillus reuteri</em> Protectis®</p>
                        <p>(DSM 17938)</p>

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
                <div class="product-tabs--column theme-yellow wpb_column vc_column_container vc_col-sm-3">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_text_column wpb_content_element  product-tabs--tab">
                        <div class="wpb_wrapper">
                          <p>Stilligoutte</p>
                          <h2><?php echo $pharmaceutical->title; ?> Gouttes</h2>
                          <p>Flacon de 5 ml</p>

                        </div>
                      </div>
                      <div class="vc_btn3-container  product-tabs--button gouttes vc_btn3-right">
                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-custom vc_btn3-color-grey" href="#" title="" onclick="openProduct(event, &#039;product1&#039;, &#039;https://www.pediact.com/wp-content/uploads/2018/07/slider-biogaia-gouttes.jpg&#039;, &#039;theme-yellow&#039;)">Découvrir le produit</a></div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>  
                <!-- <div class="product-tabs--column theme-yellow wpb_column vc_column_container vc_col-sm-3">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_text_column wpb_content_element  product-tabs--tab">
                        <div class="wpb_wrapper">
                          <p>Stick de poudre</p>
                          <h2>BioGaia® Minipack</h2>
                          <p>Boîte de 10</p>

                        </div>
                      </div>
                      <div class="vc_btn3-container  product-tabs--button minipack vc_btn3-right">
                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-custom vc_btn3-color-grey" href="#" title="" onclick="openProduct(event, &#039;product2&#039;, &#039;https://www.pediact.com/wp-content/uploads/2018/07/header-ferments-lactiques.jpg&#039;, &#039;theme-yellow&#039;)">Découvrir le produit</a></div>
                    </div>
                  </div>
                </div>
                <div class="product-tabs--column theme-orange wpb_column vc_column_container vc_col-sm-3">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_text_column wpb_content_element  product-tabs--tab">
                        <div class="wpb_wrapper">
                          <p>Comprimés à croquer</p>
                          <h2>BioGaia® à croquer</h2>
                          <p>Boîte de 10 ou 30</p>

                        </div>
                      </div>
                      <div class="vc_btn3-container  product-tabs--button comprimes vc_btn3-right">
                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-custom vc_btn3-color-grey" href="#" title="" onclick="openProduct(event, &#039;product3&#039;, &#039;https://www.pediact.com/wp-content/uploads/2018/07/slider-biogaia-a-croquer.jpg&#039;, &#039;theme-orange&#039;)">Découvrir le produit</a></div>
                    </div>
                  </div>
                </div>
                <div class="product-tabs--column theme-orange wpb_column vc_column_container vc_col-sm-3">
                  <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                      <div class="wpb_text_column wpb_content_element  product-tabs--tab">
                        <div class="wpb_wrapper">
                          <p>Comprimés à croquer</p>
                          <h2>BioGaia® + Vitamine D</h2>
                          <p>Pilulier de 30</p>

                        </div>
                      </div>
                      <div class="vc_btn3-container  product-tabs--button vitamine vc_btn3-right">
                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-custom vc_btn3-color-grey" href="#" title="" onclick="openProduct(event, &#039;product4&#039;, &#039;https://www.pediact.com/wp-content/uploads/2018/07/slider-biogaia-vitamine.jpg&#039;, &#039;theme-orange&#039;)">Découvrir le produit</a></div>
                    </div>
                  </div>
                </div> -->
            </div>
          </section>
          <div class="vc_row-full-width vc_clearfix"></div>
          <section id="product1" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section product-tab--content">
            <div class="vc_row wpb_row vc_row-fluid product-content--row generic-wrapper vc_row-o-content-top vc_row-flex">
              <div class="product-content--column left text wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  generic-title-alt product-content--title">
                      <div class="wpb_wrapper">
                        <p>BioGaia® Gouttes</p>
                        <h3>Stilligoutte de 5 mL</h3>

                      </div>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--text">
                      <div class="wpb_wrapper">
                        <p>BioGaia® Gouttes est un complément alimentaire au <em>Lactobacillus reuteri</em> Protectis® (DSM 17938).</p>
                        <p>Le <em>Lactobacillus reuteri</em> Protectis® (DSM 17938) a été testé dans de nombreuses études cliniques qui ont permis de démontrer sa bonne tolérance.</p>

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
                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="639" height="415" src="../wp-content/uploads/2018/11/produit-biogaia-goutte.png" class="vc_single_image-img attachment-full" alt="produit-biogaia-goutte" srcset="https://www.pediact.com/wp-content/uploads/2018/11/produit-biogaia-goutte.png 639w, https://www.pediact.com/wp-content/uploads/2018/11/produit-biogaia-goutte-300x195.png 300w" sizes="(max-width: 639px) 100vw, 639px" /></div>
                      </figure>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--text-right">
                      <div class="wpb_wrapper">
                        <p>Système doseur innovant (stilligoutte) pour une utilisation simple et précise.</p>

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
                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="649" height="598" src="../wp-content/uploads/2018/11/mere-et-nourrisson.jpg" class="vc_single_image-img attachment-full" alt="mere-et-nourrisson" srcset="https://www.pediact.com/wp-content/uploads/2018/11/mere-et-nourrisson.jpg 649w, https://www.pediact.com/wp-content/uploads/2018/11/mere-et-nourrisson-300x276.jpg 300w" sizes="(max-width: 649px) 100vw, 649px" /></div>
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
                        <h3>Exclusivité du <em>Lactobacillus reuteri</em> Protectis (DSM 17938)</h3>

                      </div>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--text">
                      <div class="wpb_wrapper">
                        <p>La souche bactérienne <em>Lactobacillus reuteri</em> Protectis® a été identifiée en 1962 puis isolée en 1990 du lait maternel de femmes vivants sur les hauts plateaux péruviens.</p>
                        <p>La souche doit être clairement identifiée. Différentes souches d’une même espèce ont des propriétés différentes.<br />
                          Le <em>Lactobacillus reuteri</em> Protectis® (souche DSM 17938) appartient à l’espèce des <em>Lactobacillus reuteri</em>, mais les résultats démontrés du <em>Lactobacillus reuteri</em> Protectis® (DSM 17938), au travers plus de 150 études cliniques, ne peuvent en aucun cas être extrapolés à une autre souche et sont exclusivement applicables aux produits de la gamme BioGaia®.</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid row--caroussel-using-advice generic-wrapper">
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
                                <h4 class="vc_tta-panel-title"><a href="#content01-ea0a" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Agiter</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p>Agiter le stilligoutte avant chaque utilisation.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="vc_tta-panel tab-item" id="content021532963811117-b4b92f96-e18e" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#content021532963811117-b4b92f96-e18e" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Administrer</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p><strong>5 gouttes/jour en une seule prise.</strong></p>
                                    <p>Presser doucement sur le stilligoutte pour délivrer les gouttes une à une. Administrer dans la bouche à l’aide d’une cuillère ou dans une boisson à température ambiante</p>

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
                                    <p>Conserver à température ambiante (maximum 25°C). A cette température, le stilligoutte se conserve 3 mois après ouverture. En dehors de l’utilisation normale du produit, veillez à le tenir hors de portée des enfants.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="vc_tta-panel tab-item" id="contentNB-cbda9c96-ea0a" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#contentNB-cbda9c96-ea0a" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Composition</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p>Ingrédients par dose journalière (5 gouttes) :</p>
                                    <p>Huile de tournesol, triglycérides à chaîne moyenne (palmiste), <em>Lactobacillus reuteri</em> DSM 17938 ( <em>Lactobacillus reuteri</em> Protectis® dosé à 10⁸ UFC*/jour).<br />
                                      *UFC = unité formant colonie</p>

                                  </div>
                                </div>

                                <div class="wpb_text_column wpb_content_element  text-table-composition">
                                  <div class="wpb_wrapper">
                                    <p>5 gouttes contiennent au minimum 100 millions de bactéries <em>Lactobacillus reuteri</em> DSM 17938 vivantes.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="vc_tta-panel tab-item" id="contentNB-cbda9c961515" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#contentNB-cbda9c961515" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Précautions</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p>Ne pas prendre BioGaia® Gouttes avec une boisson ou une alimentation chaude qui détériorerait le<em> Lactobacillus reuteri</em> Protectis®. Eviter le contact de l’ouverture du stilligoutte avec la salive.<br />
                                      BioGaia® Gouttes ne modifie pas la saveur de la boisson ou de l’alimentation.</p>
                                    <p>Ne pas dépasser la dose journalière recommandée. Les compléments alimentaires doivent être utilisés dans le cadre d’un mode de vie sain et ne pas être utilisés comme substituts d’un régime alimentaire varié et équilibré.</p>
                                    <p>Peut être conseillé chez la femme enceinte ou en cours d’allaitement.<br />
                                      Demandez conseil à votre médecin avant toute supplémentation.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <ul class="vc_general vc_pagination vc_pagination-style-flat vc_pagination-shape-round vc_pagination-color-grey">
                            <li class="vc_pagination-item vc_active" data-vc-tab><a href="#content01-ea0a" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#content021532963811117-b4b92f96-e18e" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#content031532963827931-22dc9b4b-49d6" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#contentNB-cbda9c96-ea0a" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#contentNB-cbda9c961515" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="vc_row-full-width vc_clearfix"></div>
          <section id="product2" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section product-tab--content">
            <div class="vc_row wpb_row vc_row-fluid product-content--row generic-wrapper vc_row-o-content-top vc_row-flex">
              <div class="product-content--column left text wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  generic-title-alt product-content--title">
                      <div class="wpb_wrapper">
                        <p>BioGaia® Minipack</p>
                        <h3>Stick de poudre</h3>

                      </div>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--text">
                      <div class="wpb_wrapper">
                        <p>BioGaia® Minipack est un complément alimentaire au <em>Lactobacillus reuteri</em> Protectis® (DSM 17938).</p>
                        <p>Le <em>Lactobacillus reuteri</em> Protectis® (DSM 17938) a été testé dans de nombreuses études cliniques qui ont permis de démontrer sa bonne tolérance.</p>

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
                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="658" height="246" src="../wp-content/uploads/2018/11/produit-biogaia-minipack.png" class="vc_single_image-img attachment-full" alt="produit-biogaia-minipack" srcset="https://www.pediact.com/wp-content/uploads/2018/11/produit-biogaia-minipack.png 658w, https://www.pediact.com/wp-content/uploads/2018/11/produit-biogaia-minipack-300x112.png 300w" sizes="(max-width: 658px) 100vw, 658px" /></div>
                      </figure>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--text-right">
                      <div class="wpb_wrapper">
                        <p>La poudre peut être mélangée à du lait maternel, du lait infantile, de l’eau, un SRO ou saupoudrée sur de la nourriture.</p>

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
                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="649" height="598" src="../wp-content/uploads/2018/11/mere-et-bebe-dans-un-lit.jpg" class="vc_single_image-img attachment-full" alt="mere-et-bebe-dans-un-lit" srcset="https://www.pediact.com/wp-content/uploads/2018/11/mere-et-bebe-dans-un-lit.jpg 649w, https://www.pediact.com/wp-content/uploads/2018/11/mere-et-bebe-dans-un-lit-300x276.jpg 300w" sizes="(max-width: 649px) 100vw, 649px" /></div>
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
                        <h3>Exclusivité du<em> Lactobacillus reuteri </em>Protectis (DSM 17938)</h3>

                      </div>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--text">
                      <div class="wpb_wrapper">
                        <p>La souche bactérienne <em>Lactobacillus reuteri</em> Protectis® a été identifie en 1962 puis isolée en 1990 du lait maternel de femmes vivants sur les hauts plateaux péruviens.</p>
                        <p>La souche doit être clairement identifiée. Différentes souches d’une même espèce ont des propriétés différentes.<br />
                          Le <em>Lactobacillus reuteri</em> Protectis® (souche DSM 17938) appartient à l’espèce des <em>Lactobacillus reuteri</em>, mais les résultats démontrés du <em>Lactobacillus reuteri</em> Protectis® (DSM 17938), au travers plus de 150 études cliniques, ne peuvent en aucun cas être extrapolés à une autre souche et sont exclusivement applicables aux produits de la gamme BioGaia®.</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid row--caroussel-using-advice generic-wrapper">
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
                            <li class="vc_tta-tab vc_active" data-vc-tab><a href="#content011532963726348-4fcba6cb-75ef" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Administrer</span></a></li>
                            <li class="vc_tta-tab" data-vc-tab><a href="#content021532963546284-c3192d1d-fcc5" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Conserver</span></a></li>
                            <li class="vc_tta-tab" data-vc-tab><a href="#contentNB1532963742578-dc9010f8-9324" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Composition</span></a></li>
                            <li class="vc_tta-tab" data-vc-tab><a href="#contentNB1532963546532-281fe0ad-e122" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Précautions</span></a></li>
                          </ul>
                        </div>
                        <div class="vc_tta-panels-container">
                          <div class="vc_tta-panels">
                            <div class="vc_tta-panel vc_active tab-item" id="content011532963726348-4fcba6cb-75ef" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#content011532963726348-4fcba6cb-75ef" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Administrer</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p><strong>1 à 2 minipack(s)/jour</strong>, suivant les recommandations de votre médecin.</p>
                                    <p>BioGaia® Minipack peut être mélangé à du lait maternel, du lait infantile, de l’eau, une solution de réhydratation orale ou saupoudrée sur de la nourriture ou une boisson. Ne pas ajouter sur des aliments chauds ou boissons chaudes car cela pourrait endommager les bactéries vivantes.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="vc_tta-panel tab-item" id="content021532963546284-c3192d1d-fcc5" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#content021532963546284-c3192d1d-fcc5" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Conserver</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p>Conserver dans un endroit sec et frais (&lt;25°C). Tenir hors de portée des enfants.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="vc_tta-panel tab-item" id="contentNB1532963742578-dc9010f8-9324" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#contentNB1532963742578-dc9010f8-9324" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Composition</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p>Maltodextrine et <em>Lactobacillus reuteri</em> DSM 17938 (<em>Lactobacillus reuteri</em> Protectis® dosé à 10⁸ UFC* par jour).<br />
                                      *UFC = unité formant colonie</p>
                                    <p>Un minipack contient au minimum 100 millions de bactéries <em>Lactobacillus reuteri</em> DSM 17938 vivantes.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="vc_tta-panel tab-item" id="contentNB1532963546532-281fe0ad-e122" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#contentNB1532963546532-281fe0ad-e122" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Précautions</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p>Ne pas dépasser la dose journalière recommandée. Les compléments alimentaires doivent être utilisés dans le cadre d’un mode de vie sain et ne pas être utilisés comme substituts d’un régime alimentaire varié et équilibré. Peut être conseillé chez la femme enceinte ou en cours d’allaitement. Demandez conseil à votre médecin avant toute supplémentation.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <ul class="vc_general vc_pagination vc_pagination-style-flat vc_pagination-shape-round vc_pagination-color-grey">
                            <li class="vc_pagination-item vc_active" data-vc-tab><a href="#content011532963726348-4fcba6cb-75ef" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#content021532963546284-c3192d1d-fcc5" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#contentNB1532963742578-dc9010f8-9324" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#contentNB1532963546532-281fe0ad-e122" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="vc_row-full-width vc_clearfix"></div>
          <section id="product3" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section product-tab--content">
            <div class="vc_row wpb_row vc_row-fluid product-content--row generic-wrapper">
              <div class="product-content--column left wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  generic-title-alt product-content--title">
                      <div class="wpb_wrapper">
                        <p>BioGaia® en comprimés à croquer</p>
                        <h3>Arôme citron ou fraise</h3>

                      </div>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--text">
                      <div class="wpb_wrapper">
                        <p><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;BioGaia® Comprimés à croquer est un complément alimentaire au Lactobacillus reuteri Protectis® (DSM 17938). \nLe Lactobacillus reuteri Protectis® (DSM 17938) a été testé dans de nombreuses études cliniques qui ont permis de démontrer sa bonne tolérance.&quot;}" data-sheets-userformat="{&quot;2&quot;:8403713,&quot;3&quot;:&#091;null,0&#093;,&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:&#091;null,2,0&#093;,&quot;15&quot;:&quot;Quicksand&quot;,&quot;16&quot;:10,&quot;26&quot;:300}">BioGaia® Comprimés à croquer est un complément alimentaire au <em>Lactobacillus reuteri Protectis</em>® (DSM 17938).<br />
                            <em>Le Lactobacillus reuteri Protectis</em>® (DSM 17938) a été testé dans de nombreuses études cliniques qui ont permis de démontrer sa bonne tolérance.</span></p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-content--column image right wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_single_image wpb_content_element vc_align_right   product-content--img">

                      <figure class="wpb_wrapper vc_figure">
                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="624" height="328" src="../wp-content/uploads/2018/11/produit-biogaia-comprime-a-croquer.png" class="vc_single_image-img attachment-full" alt="produit-biogaia-comprime-a-croquer" srcset="https://www.pediact.com/wp-content/uploads/2018/11/produit-biogaia-comprime-a-croquer.png 624w, https://www.pediact.com/wp-content/uploads/2018/11/produit-biogaia-comprime-a-croquer-300x158.png 300w" sizes="(max-width: 624px) 100vw, 624px" /></div>
                      </figure>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--text-right">
                      <div class="wpb_wrapper">
                        <p>Citron ou fraise, de quoi plaire à toute la famille !</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid product-content--row generic-wrapper">
              <div class="product-content--column image wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_single_image wpb_content_element vc_align_left   generic-line left product-content--img">

                      <figure class="wpb_wrapper vc_figure">
                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="649" height="598" src="../wp-content/uploads/2018/11/famille-assis-a-table.jpg" class="vc_single_image-img attachment-full" alt="famille-assis-a-table" srcset="https://www.pediact.com/wp-content/uploads/2018/11/famille-assis-a-table.jpg 649w, https://www.pediact.com/wp-content/uploads/2018/11/famille-assis-a-table-300x276.jpg 300w" sizes="(max-width: 649px) 100vw, 649px" /></div>
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
                        <h3>Exclusivité du <em>Lactobacillus reuteri</em> Protectis (DSM 17938)</h3>

                      </div>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--text">
                      <div class="wpb_wrapper">

                        <p>La souche bactérienne <em>Lactobacillus reuteri</em> Protectis® a été identifie en 1962 puis isolée en 1990 du lait maternel de femmes vivants sur les hauts plateaux péruviens.</p>
                        <p>La souche doit être clairement identifiée. Différentes souches d’une même espèce ont des propriétés différentes.<br />
                          Le <em>Lactobacillus reuteri</em> Protectis® (souche DSM 17938) appartient à l’espèce des <em>Lactobacillus reuteri</em>, mais les résultats démontrés du <em>Lactobacillus reuteri</em> Protectis® (DSM 17938), au travers plus de 150 études cliniques, ne peuvent en aucun cas être extrapolés à une autre souche et sont exclusivement applicables aux produits de la gamme BioGaia®.</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid generic-wrapper row--caroussel-using-advice">
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
                            <li class="vc_tta-tab vc_active" data-vc-tab><a href="#content01-ea0a" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Administrer</span></a></li>
                            <li class="vc_tta-tab" data-vc-tab><a href="#content02538991249052-09527e5d-9746" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Conserver</span></a></li>
                            <li class="vc_tta-tab" data-vc-tab><a href="#contentNB-312d5a16-8e75a193-cbda9c96-ea0a" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Composition</span></a></li>
                            <li class="vc_tta-tab" data-vc-tab><a href="#contentNB-32078ff3-678da193-cbda9c96-ea0a" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Précautions</span></a></li>
                          </ul>
                        </div>
                        <div class="vc_tta-panels-container">
                          <div class="vc_tta-panels">
                            <div class="vc_tta-panel vc_active tab-item" id="content01-ea0a" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#content01-ea0a" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Administrer</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p>1 comprimé à croquer/jour.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="vc_tta-panel" id="content02538991249052-09527e5d-9746" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#content02538991249052-09527e5d-9746" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Conserver</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p>Conserver dans un endroit sec et frais (&lt;25°C). Tenir hors de portée des enfants.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="vc_tta-panel tab-item" id="contentNB-312d5a16-8e75a193-cbda9c96-ea0a" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#contentNB-312d5a16-8e75a193-cbda9c96-ea0a" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Composition</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <div class="tab-table-composition"><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Agent de charge : isomalt, édulcorant : xylitol, Lactobacillus reuteri\n DSM 17938 (Lactobacillus reuteri Protectis® dosé à\n 108 UFC* par jour), huile de palme, arôme citron ou fraise, exhausteur de goût : acide citrique\n*UFC = unité formant colonie\n\nUn comprimé contient au minimum 100 millions de bactéries Lactobacillus reuteri DSM 17938 vivantes.&quot;}" data-sheets-userformat="{&quot;2&quot;:8395587,&quot;3&quot;:&#091;null,0&#093;,&quot;4&quot;:&#091;null,2,16777215&#093;,&quot;9&quot;:0,&quot;11&quot;:4,&quot;12&quot;:0,&quot;14&quot;:&#091;null,2,0&#093;,&quot;15&quot;:&quot;Quicksand&quot;,&quot;26&quot;:300}">Agent de charge : isomalt, édulcorant : xylitol, <em>Lactobacillus reuteri</em><br />
                                        DSM 17938 (<em>Lactobacillus reuteri</em> Protectis® dosé à 10<sup>8</sup> UFC* par jour), huile de palme, arôme citron ou fraise, exhausteur de goût : acide citrique</span></div>
                                    <div class="tab-table-composition"></div>

                                  </div>
                                </div>

                                <div class="wpb_text_column wpb_content_element  text-table-composition">
                                  <div class="wpb_wrapper">
                                    <p>*UFC = unité formant colonie</p>
                                    <p>Un comprimé contient au minimum 100 millions de bactéries <em>Lactobacillus reuteri</em> DSM 17938 vivantes.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="vc_tta-panel tab-item" id="contentNB-32078ff3-678da193-cbda9c96-ea0a" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#contentNB-32078ff3-678da193-cbda9c96-ea0a" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Précautions</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p>Ne pas dépasser la dose journalière recommandée. Les compléments alimentaires doivent être utilisés dans le cadre d’un mode de vie sain et ne pas être utilisés comme substituts d’un régime alimentaire varié et équilibré. Une consommation excessive peut avoir des effets laxatifs.<br />
                                      Peut être conseillé chez la femme enceinte ou en cours d’allaitement.</p>
                                    <p>Demandez conseil à votre médecin avant toute supplémentation.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <ul class="vc_general vc_pagination vc_pagination-style-flat vc_pagination-shape-round vc_pagination-color-grey">
                            <li class="vc_pagination-item vc_active" data-vc-tab><a href="#content01-ea0a" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#content02538991249052-09527e5d-9746" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#contentNB-312d5a16-8e75a193-cbda9c96-ea0a" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#contentNB-32078ff3-678da193-cbda9c96-ea0a" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="vc_row-full-width vc_clearfix"></div>
          <section id="product4" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section product-tab--content">
            <div class="vc_row wpb_row vc_row-fluid product-content--row generic-wrapper">
              <div class="product-content--column left wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element  generic-title-alt product-content--title">
                      <div class="wpb_wrapper">
                        <p>BioGaia® en comprimés à croquer</p>
                        <h3>+ Vitamine D 20µg (800 UI)</h3>

                      </div>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--text">
                      <div class="wpb_wrapper">
                        <p>BioGaia® Comprimés à croquer est un complément alimentaire au <em>Lactobacillus reuteri</em> Protectis® (DSM 17938) et vitamine D avec édulcorant.<br />
                          Le <em>Lactobacillus reuteri</em> Protectis® (DSM 17938) a été testé dans de nombreuses études cliniques qui ont permis de démontrer sa bonne tolérance.</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-content--column image right wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_single_image wpb_content_element vc_align_right   product-content--img">

                      <figure class="wpb_wrapper vc_figure">
                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="611" height="381" src="../wp-content/uploads/2018/11/produit-biogaia-vitamines.png" class="vc_single_image-img attachment-full" alt="produit-biogaia-vitamines" srcset="https://www.pediact.com/wp-content/uploads/2018/11/produit-biogaia-vitamines.png 611w, https://www.pediact.com/wp-content/uploads/2018/11/produit-biogaia-vitamines-300x187.png 300w" sizes="(max-width: 611px) 100vw, 611px" /></div>
                      </figure>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--text-right">
                      <div class="wpb_wrapper">
                        <p>Découvrez l&#8217;association <em>Lactobacillus reuteri</em> Protectis® (DSM 17938) et vitamine D au sein d&#8217;un même comprimé.</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid product-content--row generic-wrapper">
              <div class="product-content--column image wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="wpb_single_image wpb_content_element vc_align_left   generic-line left product-content--img">

                      <figure class="wpb_wrapper vc_figure">
                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="649" height="598" src="../wp-content/uploads/2018/11/mere-petit-enfant-a-la-plage.jpg" class="vc_single_image-img attachment-full" alt="mere-petit-enfant-a-la-plage" srcset="https://www.pediact.com/wp-content/uploads/2018/11/mere-petit-enfant-a-la-plage.jpg 649w, https://www.pediact.com/wp-content/uploads/2018/11/mere-petit-enfant-a-la-plage-300x276.jpg 300w" sizes="(max-width: 649px) 100vw, 649px" /></div>
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
                        <h3>A quoi sert la vitamine D ?</h3>

                      </div>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--text">
                      <div class="wpb_wrapper">
                        <p>La vitamine D possède une double origine : elle est apportée par l’alimentation et synthétisée par l&#8217;organisme au niveau de la peau sous l&#8217;action des rayons solaires ou ultraviolets.<br />
                          Deux formes de vitamine D existent : la vitamine D2 ou ergo-calciférol, produite par les végétaux, et la vitamine D3 ou cholécalciférol, produite par les animaux. Chez l&#8217;homme, ces deux formes exercent les mêmes activités biologiques, puis-qu&#8217;elles sont converties en 1,25-dihydroxyvitamine D (communément appelé vitamine D), leur principal métabolite actif (ANSES, 2013).</p>
                        <p>La vitamine D contribue :</p>

                      </div>
                    </div>

                    <div class="wpb_text_column wpb_content_element  product-content--list">
                      <div class="wpb_wrapper">
                        <ul>
                          <li>au fonctionnement normal du système immunitaire</li>
                          <li>au maintien d&#8217;une fonction musculaire normale</li>
                          <li>au maintien d&#8217;une ossature normale</li>
                        </ul>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid generic-wrapper row--caroussel-using-advice">
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
                            <li class="vc_tta-tab vc_active" data-vc-tab><a href="#content0105992-a830e79e-3ee3" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Administrer</span></a></li>
                            <li class="vc_tta-tab" data-vc-tab><a href="#content02-f2JZJ150ed5" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Conserver</span></a></li>
                            <li class="vc_tta-tab" data-vc-tab><a href="#contentNB-243-74ca2418-2095" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Composition</span></a></li>
                            <li class="vc_tta-tab" data-vc-tab><a href="#contentNB-ea0a538992085814-b022c808-373f" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Précautions</span></a></li>
                          </ul>
                        </div>
                        <div class="vc_tta-panels-container">
                          <div class="vc_tta-panels">
                            <div class="vc_tta-panel vc_active tab-item" id="content0105992-a830e79e-3ee3" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#content0105992-a830e79e-3ee3" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Administrer</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p>1 comprimé à croquer/jour.</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="vc_tta-panel tab-item" id="content02-f2JZJ150ed5" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#content02-f2JZJ150ed5" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Conserver</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <div class="tab-table-composition">
                                      <p>Conserver dans un endroit sec et frais (&lt;25°C). Tenir hors de portée des enfants.</p>
                                    </div>

                                  </div>
                                </div>

                                <div class="wpb_text_column wpb_content_element  text-table-composition">
                                  <div class="wpb_wrapper">

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="vc_tta-panel tab-item" id="contentNB-243-74ca2418-2095" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#contentNB-243-74ca2418-2095" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Composition</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">

                                    <p>Agent de charge : isomalt, édulcorant : xylitol, <em>Lactobacillus reuteri</em> DSM 17938 (<em>Lactobacillus reuteri</em> Protectis® dosé à 10⁸ UFC* par jour), huile de palme, arôme orange, cholécalciférol (vitamine D3), exhausteur de goût : acide citrique<br />
                                      *UFC = unité formant colonie</p>
                                    <p>Un comprimé contient au minimum 100 millions de bactéries <em>Lactobacillus reuteri</em> DSM 17938 vivantes et  20μg de vitamine D3 (soit 400% des Apports de Référence)</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="vc_tta-panel" id="contentNB-ea0a538992085814-b022c808-373f" data-vc-content=".vc_tta-panel-body">
                              <div class="vc_tta-panel-heading">
                                <h4 class="vc_tta-panel-title"><a href="#contentNB-ea0a538992085814-b022c808-373f" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Précautions</span></a></h4>
                              </div>
                              <div class="vc_tta-panel-body">
                                <div class="wpb_text_column wpb_content_element ">
                                  <div class="wpb_wrapper">
                                    <p>Ne pas dépasser la dose journalière recommandée. Les compléments alimentaires doivent être utilisés dans le cadre d’un mode de vie sain et ne pas être utilisés comme substituts d’un régime alimentaire varié et équilibré. Une consommation excessive peut avoir des effets laxatifs.</p>
                                    <p>Peut être conseillé chez la femme enceinte ou en cours d’allaitement.</p>
                                    <p>Demandez conseil à votre médecin avant toute supplémentation</p>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <ul class="vc_general vc_pagination vc_pagination-style-flat vc_pagination-shape-round vc_pagination-color-grey">
                            <li class="vc_pagination-item vc_active" data-vc-tab><a href="#content0105992-a830e79e-3ee3" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#content02-f2JZJ150ed5" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#contentNB-243-74ca2418-2095" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                            <li class="vc_pagination-item" data-vc-tab><a href="#contentNB-ea0a538992085814-b022c808-373f" class="vc_pagination-trigger" data-vc-tabs data-vc-container=".vc_tta"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
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
                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="649" height="598" src="../wp-content/uploads/2018/11/petit-garcon-avec-panier.jpg" class="vc_single_image-img attachment-full" alt="petit-garcon-avec-panier" srcset="https://www.pediact.com/wp-content/uploads/2018/11/petit-garcon-avec-panier.jpg 649w, https://www.pediact.com/wp-content/uploads/2018/11/petit-garcon-avec-panier-300x276.jpg 300w" sizes="(max-width: 649px) 100vw, 649px" /></div>
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
                        <p>Développé par un des leaders mondiaux</p>
                        <h2>Présentation du Laboratoire BIOGAIA AB</h2>

                      </div>
                    </div>

                    <div class="wpb_text_column wpb_content_element  laboratory-text">
                      <div class="wpb_wrapper">
                        <p>BIOGAIA AB est un laboratoire de biotechnologies, spécialisé dans le développement et la commercialisation de produits conçus à base de <em>Lactobacillus reuteri</em> Protectis® (souche DSM 17938).</p>
                        <p>Fondé en 1990, BIOGAIA AB est reconnu comme un leader mondial et compte plus de 25 années d’expérience. Au fil des années, BIOGAIA AB a développé un réseau de chercheurs indépendants et d’experts à travers le monde.</p>
                        <p>Les produits BioGaia® sont aujourd&#8217;hui distribués dans plus de 90 pays.</p>

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
                        <h2><span data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Une expertise reconnue&quot;}" data-sheets-userformat="{&quot;2&quot;:23041,&quot;3&quot;:&#091;null,0&#093;,&quot;12&quot;:0,&quot;14&quot;:&#091;null,2,0&#093;,&quot;15&quot;:&quot;Quicksand&quot;,&quot;17&quot;:1}">Une expertise reconnue</span></h2>

                      </div>
                    </div>

                    <div class="wpb_text_column wpb_content_element  laboratory-text">
                      <div class="wpb_wrapper">
                        <p>Aujourd’hui, 137 études cliniques et 9 méta-analyses publiées, et menées sur plus de 12800 patients, font du <em>Lactobacillus reuteri</em> Protectis® l’une des souches les plus documentées au monde. Brevetée, elle est propriété exclusive du Laboratoire BIOGAIA AB.</p>

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
          <section id="section--contact-view" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_section">
            <div id="review-product1" class="vc_row wpb_row vc_row-fluid contact-view--row generic-wrapper review--content">
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
                        <p>Il est important de demander l&#8217;avis d&#8217;un professionnel de santé concernant la prise de de compléments alimentaires chez les enfants et adultes.</p>
                        <p>Ce complément alimentaire ne peut se substituer à une alimentation variée, équilibrée et à un mode de vie sain. www.mangerbouger.fr</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="review-product2" class="vc_row wpb_row vc_row-fluid contact-view--row generic-wrapper review--content">
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
                        <p>Doit être utilisé sous contrôle médical. Ne peut constituer la seule source d&#8217;alimentation. Déstiné à être utilisé en complément de l&#8217;alimentation ou de la prise d&#8217;un soluté de réhydratation orale.</p>
                        <p>Ne peut se substituer à une alimentation variée, équilibrée et à un mode de vie sain. www.mangerbouger.fr</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="review-product3" class="vc_row wpb_row vc_row-fluid contact-view--row generic-wrapper review--content">
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
                        <p>Il est important de demander l&#8217;avis d&#8217;un professionnel de santé concernant la prise de de compléments alimentaires chez les enfants et adultes.</p>
                        <p>Ce complément alimentaire ne peut se substituer à une alimentation variée, équilibrée et à un mode de vie sain. www.mangerbouger.fr</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="review-product4" class="vc_row wpb_row vc_row-fluid contact-view--row generic-wrapper review--content">
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
                        <p>Il est important de demander l&#8217;avis d&#8217;un professionnel de santé concernant la prise de de compléments alimentaires chez les enfants et adultes.</p>
                        <p>Ce complément alimentaire ne peut se substituer à une alimentation variée, équilibrée et à un mode de vie sain. www.mangerbouger.fr</p>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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