
        <section class="section featured-product wow fadeInUp">
          <h3 class="section-title">Featured products</h3>
          
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
              <?php  
                $products = $db->products();
                foreach($products as $data):
                    if($data['featured'] == true):
              ?>
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.html"><img  src="assets/images/products/<?= $data['featured_image'] ?>" alt=""></a> </div>
                    <!-- /.image -->
                    
                        <?php  
                            $productStatus = null;
                            if($data['new'] == true){
                              $productStatus = "new";
                            }elseif($data['hot'] == true){
                              $productStatus = "hot";
                            }elseif($data['sale'] == true){
                              $productStatus = "sale";
                            }
                            if($productStatus != null):
                          ?>
                          <div class="tag <?= $productStatus?>"><span><?= $productStatus;?></span></div>
                          <?php  
                            endif;
                          ?>
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.html"><?= $data['title']?></a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> DBT <?= $data['offer_price'] ?> </span> <span class="price-before-discount">DBT <?= $data['regular_rice']  ?></span> </div>
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
              </div>
              <!-- /.products --> 
            </div>
            <?php 
                 endif;  
                endforeach;
            ?>
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
