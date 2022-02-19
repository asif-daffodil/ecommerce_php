<?php  
  include_once('Database.php');
  $db = new Database();

?>



        <div id="hero">
            <?php  
                $sliders = $db->slider();
            ?>
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
              <?php  foreach($sliders as $data): ?>
            <div class="item" style="background-image: url(assets/images/sliders/<?= $data['img']?>);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1"><?= $data['heading']?></div>
                  <div class="big-text fadeInDown-1"> <?= $data['subheading']?> </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span><?= $data['description']?></span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button"><?= $data['btntext']?></a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <?php  endforeach; ?>
            <!-- /.item -->
            
          </div>
          <!-- /.owl-carousel --> 
        </div>