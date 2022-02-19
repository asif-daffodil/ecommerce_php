<?php  
  include_once('Database.php');
  $db = new Database();

?>


     <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">New Products</h3>
            <?php  
                $newProCategorys = $db->newProCategory();
            ?>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                
              <li class=""><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
              <?php  foreach($newProCategorys as $data): ?>
              <li><a data-transition-type="backSlide" href="#<?= $data['name'];?>" data-toggle="tab"><?= $data['name'];?></a></li>
              <?php  endforeach; ?>
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">

            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                <?php
                  $Products = $db->products();  
                  foreach($Products as $data): 
                ?>
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="assets/images/products/<?= $data['featured_image']?>" alt=""></a> </div>
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
                          <h3 class="name"><a href="detail.html"><?=  $data['title']; ?></a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> BDT <?=  $data['offer_price']; ?> </span> <span class="price-before-discount">BDT <?=  $data['regular_rice']; ?></span> </div>
                          <!-- /.product-price --> 
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
                    endforeach; 
                 ?>
                </div>
              </div>
            </div>

            <?php  
              $proCatNew = $db->newProCategory();
              foreach($proCatNew as $data):
            ?>
            <div class="tab-pane" id="<?=$data['name'];?>">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <?php  
                    $proCatNewAll = $db->newProducts($data['id']);
                    foreach($proCatNewAll as $data):
                  ?>
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="assets/images/products/<?= $data['featured_image']?>" alt=""></a> </div>
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
                            
                            if($productStatus !== null):
                          ?>
                          <div class="tag <?= $productStatus?>"><?= $productStatus;?><span></span></div>
                          <?php  
                            endif;
                          ?>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html"><?=  $data['title']; ?></a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> BDT <?=  $data['offer_price']; ?>  </span> <span class="price-before-discount">BDT <?=  $data['regular_rice']; ?></span> </div>
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
                  <?php  endforeach; ?>
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
          <?php  endforeach; ?>  
          </div>
        </div>