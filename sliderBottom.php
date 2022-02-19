<?php  
  include_once('Database.php');
  $db = new Database();

?>

        <div class="info-boxes wow fadeInUp">
            <?php  
                $sliderBottoms = $db->sliderBottom();
            
            ?>
          <div class="info-boxes-inner">
            <div class="row">
                <?php  foreach($sliderBottoms as $data): ?>
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green"><?= $data['title'];?></h4>
                    </div>
                  </div>
                  <h6 class="text"><?= $data['subtitle'];?></h6>
                </div>
              </div>
              <?php  endforeach; ?>
            </div>
          </div>
        </div>
        