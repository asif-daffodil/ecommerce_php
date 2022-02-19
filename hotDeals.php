

<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
          <h3 class="section-title">hot deals</h3>
          
          <div class="all-box" style="display:flex">
              <div class="box"> <span class="key" style="padding-left: 8px;" id="days"></span><br><span class="value" style="padding-right: 5px;"> DAYS</span> </div>

              <div class="box"> <span class="key" style="padding-left: 8px;" id="hours"></span> <br><span class="value" style="padding-right: 5px;"> HRS</span> </div>

              <div class="box"> <span class="key" style="padding-left: 8px;" id="minuts"></span><br> <span class="value" style="padding-right: 5px;"> MINS</span> </div>

              <div class="seconds box"> <span class="key" style="padding-left: 8px;" id="second"></span> <br><span class="value" style="padding-right: 5px;"> SEC</span> </div>
          </div>
          
          <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
          <?php  
            $products = $db->products();
            foreach($products as $data):
                if($data['hot_deals'] == true):
          ?>
            <div class="item">
              <div class="products">
                <div class="hot-deal-wrapper">
                  
                  <div class="image"> <img src="assets/images/products/<?=$data['featured_image'];?>" alt=""> </div>
                  <div class="sale-offer-tag"><span>49%<br>
                    off</span></div>
 
                </div>
                <!-- /.hot-deal-wrapper -->
                
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
                    <div class="add-cart-button btn-group">
                      <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                      <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                    </div>
                  </div>
                  <!-- /.action --> 
                </div>
                <!-- /.cart --> 
              </div>
            </div>
            <?php 
                endif;  
                endforeach;
            ?>
          </div>
          
          
        </div>