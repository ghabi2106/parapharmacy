<?php require APPROOT . '/views/inc/header.php'; ?>
<section id="main" class="site-main">

  <div id="opal-breadscrumb">
    <div class="opal-breadscrumb">
      <div class="container">
        <ol class="opal-woocommerce-breadcrumb breadcrumb">
          <li><a href="<?php echo URLROOT; ?>">Home</a></li>
          <li>Pharmaceuticals</li>
        </ol>
      </div>
    </div>
  </div>
  <section id="main-container" class="container mainright">

    <div class="row">


      <div class="col-lg-3 col-md-3 pull-left col-xs-12">
        <aside class="sidebar sidebar-left" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
          <aside id="woocommerce_product_categories-20" class="widget widget-style  clearfix woocommerce widget_product_categories">
            <ul class="product-categories">
              <li class="cat-item cat-item-334">
                <a href="indexc36c.html?product_cat=best-sellers">Best sellers</a>
              </li>
              <li class="cat-item cat-item-331">
                <a href="index59ce.html?product_cat=new-arrivals">New arrivals</a>
              </li>
              <li class="cat-item cat-item-275 current-cat cat-parent">
                <a href="indexc068.html?product_cat=pharmacies">Pharmaceuticals</a>
                <ul class='children'>
                  <?php foreach ($data['categories'] as $category) : ?>
                    <li class="cat-item cat-item-317">
                      <a href="<?php echo URLROOT; ?>/categories/show/<?php echo $category->id; ?>">
                        <?php echo $category->title; ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </li>
              <li class="cat-item cat-item-335">
                <a href="index3b93.html?product_cat=popular">Popular</a>
              </li>
              <li class="cat-item cat-item-376">
                <a href="indexd312.html?product_cat=uncategorized">Uncategorized</a>
              </li>
            </ul>
          </aside>
          <aside id="tag_cloud-12" class="widget widget-style  clearfix widget_tag_cloud">
            <h3 class="widget-title"><span><span>Popular tags</span></span></h3>
            <div class="tagcloud"><a href="indexf9c3.html?product_tag=alcohol" class="tag-cloud-link tag-link-77 tag-link-position-1" style="font-size: 16.324324324324pt;" aria-label="Alcohol (4 items)">Alcohol</a>
              <a href="index5c93.html?product_tag=antibiotic" class="tag-cloud-link tag-link-38 tag-link-position-2" style="font-size: 22pt;" aria-label="Antibiotic (6 items)">Antibiotic</a>
              <a href="index27e4.html?product_tag=aspirin" class="tag-cloud-link tag-link-35 tag-link-position-3" style="font-size: 19.351351351351pt;" aria-label="Aspirin (5 items)">Aspirin</a>
              <a href="index2833.html?product_tag=caffeine" class="tag-cloud-link tag-link-37 tag-link-position-4" style="font-size: 16.324324324324pt;" aria-label="Caffeine (4 items)">Caffeine</a>
              <a href="index6b76.html?product_tag=cytotoxic" class="tag-cloud-link tag-link-39 tag-link-position-5" style="font-size: 22pt;" aria-label="Cytotoxic (6 items)">Cytotoxic</a>
              <a href="index3534.html?product_tag=diuretics" class="tag-cloud-link tag-link-261 tag-link-position-6" style="font-size: 12.540540540541pt;" aria-label="Diuretics (3 items)">Diuretics</a>
              <a href="indexe29a.html?product_tag=idiosyncratic" class="tag-cloud-link tag-link-36 tag-link-position-7" style="font-size: 19.351351351351pt;" aria-label="Idiosyncratic (5 items)">Idiosyncratic</a>
              <a href="indexb5fc.html?product_tag=quinine" class="tag-cloud-link tag-link-40 tag-link-position-8" style="font-size: 8pt;" aria-label="Quinine (2 items)">Quinine</a></div>
          </aside>
        </aside>
      </div>




      <div id="main-content" class="main-content col-xs-12 col-lg-9 col-md-9">
        <div id="primary" class="content-area">
          <div id="content" class="site-content" role="main">

            <h1 class="page-title">Pharmaceuticals</h1>


            <p class="category-banner">
              <img src="<?php echo URLROOT; ?>/wp-content/uploads/2016/08/image-6.jpg" /></p>

            <div class=" products-top-wrap clearfix">
              <div class="woocommerce-notices-wrapper"></div>
              <form action="" class="display-mode" method="get">
                <button title="Grid" class="btn active" value="grid" name="display" type="submit">
                  <i class="fa fa-th"></i>
                </button>
                <button title="List" class="btn " value="list" name="display" type="submit">
                  <i class="fa fa-th-list"></i>
                </button>
              </form>
              <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby" aria-label="Shop order">
                  <option value="menu_order" selected='selected'>Default sorting</option>
                  <option value="popularity">Sort by popularity</option>
                  <option value="rating">Sort by average rating</option>
                  <option value="date">Sort by latest</option>
                  <option value="price">Sort by price: low to high</option>
                  <option value="price-desc">Sort by price: high to low</option>
                </select>
                <input type="hidden" name="paged" value="1" />
                <input type="hidden" name="product_cat" value="pharmacies" />
              </form>
            </div>
            <div class="childrens">

            </div>

            <div class="products products-grid">
              <div class="row row-products">


                <?php foreach ($data['pharmaceuticals'] as $pharmaceutical) : ?>
                  <div class="product-wrapper  col-lg-4 col-md-4 col-sm-4 grid post-5317 product type-product status-publish has-post-thumbnail product_cat-drug product_cat-medication product_cat-new-arrivals product_cat-pharmacies product_tag-antibiotic product_tag-cytotoxic pa_color-black pa_color-blue pa_color-green pa_color-orange pa_color-red pa_color-yellow pa_size-l pa_size-large pa_size-m pa_size-s pa_size-small pa_size-xl pa_size-xxl last instock featured shipping-taxable product-type-external">
                    <div class="product-block" data-product-id="5317">
                      <figure class="image">
                        <a title="<?php echo $pharmaceutical->title; ?>" href="<?php echo URLROOT; ?>/pharmaceuticals/show/<?php echo $pharmaceutical->id; ?>" class="product-image zoom-2">
                          <img width="465" height="465" src="<?php echo URLROOT; ?>/img/uploads/pharmaceuticals/<?php echo $pharmaceutical->img; ?>" class="attachment-shop_catalog image-effect" alt="" />
                          <img width="465" height="465" src="<?php echo URLROOT; ?>/img/uploads/pharmaceuticals/<?php echo $pharmaceutical->img1; ?>" class="image-hover wp-post-image" alt="" /> </a>
                        <div class="button-action button-groups clearfix">


                          <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5317">
                            <div class="yith-wcwl-add-button show" style="display:block">


                              <a title="Add to wishlist" href="index49d3.html?product_cat=pharmacies&amp;add_to_wishlist=5317" rel="nofollow" data-product-id="5317" data-product-type="external" class="add_to_wishlist">
                                <i class="fa fa-heart-o"></i><span>Wishlist</span></a>
                              <img src="wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                            </div>

                            <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                              <span class="feedback">Product added!</span>
                              <a href="indexab3f.html?page_id=143&amp;wishlist-action" rel="nofollow">
                                <i class="fa fa-heart-o"></i><span>Wishlist</span> </a>
                            </div>

                            <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                              <span class="feedback">The product is already in the wishlist!</span>
                              <a href="indexab3f.html?page_id=143&amp;wishlist-action" rel="nofollow">
                                <i class="fa fa-heart-o"></i><span>Wishlist</span> </a>
                            </div>

                            <div style="clear:both"></div>
                            <div class="yith-wcwl-wishlistaddresponse"></div>

                          </div>

                          <div class="clear"></div>
                          <div class="yith-compare">
                            <a title="Add to compare" href="index8105.html?product_cat=pharmacies&amp;action=yith-woocompare-add-product&amp;id=5317&amp;_wpnonce=59f1310161" class="compare" data-product_id="5317">
                              <em class="fa fa-exchange"></em>
                            </a>
                          </div>
                          <div class="quick-view hidden-xs">
                            <a title="Quick view" href="#" class="quickview" data-productslug="serta-cr-43529pb-santa-cruz-collection-61inch-love-seat-platinum-fabric" data-toggle="modal" data-target="#opal-quickview-modal">
                              <i class="fa fa-eye"> </i><span>Quick view</span>
                            </a>
                          </div>


                        </div>
                      </figure>

                      <div class="caption">

                        <div class="meta">

                          <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>519.99</span></span>
                          <h3 class="name"><a href="index7f5d.html?product=serta-cr-43529pb-santa-cruz-collection-61inch-love-seat-platinum-fabric">Acetaminophen Liquid</a></h3>

                          <div class="rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                          </div>


                        </div>
                        <div class="add-cart">
                          <a href="product/poundex-bobkona-winden-blended-linen-3-piece-reversible-sectional-sofa-with-ottoman-carmine/index.html" data-quantity="1" class="button product_type_external btn btn-primary" data-product_id="5317" data-product_sku="fur10" aria-label="Buy product" rel="nofollow">
                            <span class="title-cart">Buy product</span>
                          </a>
                        </div>
                      </div>


                    </div>
                  </div>
                <?php endforeach; ?>


              </div>
            </div>
            <div class="products-bottom-wrap clearfix">
              <nav class="woocommerce-pagination">
                <?php echo $data['page_links'] ?>
              </nav>
              <!-- <p class="woocommerce-result-count">
                Showing 1&ndash;9 of 23 results</p> -->
            </div>

          </div><!-- #content -->
        </div><!-- #primary -->


      </div><!-- #main-content -->

    </div>
  </section>
</section><!-- #main -->
<?php require APPROOT . '/views/inc/footer.php'; ?>