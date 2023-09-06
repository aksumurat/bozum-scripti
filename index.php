<?php include('header.php'); ?>
  <!--hero section end-->
  <!--pricing section start-->
  <section class="pricing" id="pricing">
    <div class="pricing__wrapper">
      <h2 class="section-heading color-black"><?php echo $site_slogan; ?></h2>
      <div class="container">
        <div class="row">
	
		<?php
$query = $db->query("SELECT * FROM urun1 order by id DESC LIMIT 0,3", PDO::FETCH_ASSOC);
$scid=0;
if ( $query->rowCount() ){
	
     foreach( $query as $row ){ 
	 $scid++;
	 ?>
          <div class="col-lg-4">
		  
            <div class="pricing__single pricing__single-<?php echo $scid; ?>">
              <div class="icon">
                <i class="fad fa-mobile"></i>
              </div>
              <h4><?php echo $row['ad']; ?></h4>
              <h6><?php echo $row['aciklama']; ?> %<?php echo $row['oran']; ?></h6>
              <div class="list">
                <ul>
                  <li><?php echo $row['satir1']; ?></li>
                  <li><?php echo $row['satir2']; ?></li>
                  <li><?php echo $row['satir3']; ?></li>
                  <li><?php echo $row['satir4']; ?></li>
                  <li><?php echo $row['satir5']; ?></li>
                </ul>
              </div>
              <a href="https://wa.me/<?php echo $site_tlf; ?>?text=<?php echo $site_tlf_text; ?>
" class="button">
                <span>Whatsapp <i class="fad fa-long-arrow-right"></i></span>
              </a>
            </div>
			
          </div>
		  	 <?php
     }
}
?>
		               
        </div>
      </div>
    </div>
  </section>  <!--pricing section end--> 
  <!--pricing section start2-->
  <section class="pricing1" id="pricing1">
    <div class="pricing__wrapper">
      <div class="container">
        <div class="row">
		
		<?php
$query = $db->query("SELECT * FROM urun1 order by id ASC LIMIT 0,3", PDO::FETCH_ASSOC);
$scid=0;
if ( $query->rowCount() ){
     foreach( $query as $row ){ 
	 $scid++;
	 ?>
          <div class="col-lg-4">
            <div class="pricing__single pricing__single-<?php echo $scid; ?>">
              <div class="icon">
                <i class="fad fa-mobile"></i>
              </div>
              <h4><?php echo $row['ad']; ?></h4>
              <h3>%<?php echo $row['oran']; ?></h3>
              <h6><?php echo $row['aciklama']; ?></h6>
              <div class="list">
                <ul>
                  <li><?php echo $row['satir1']; ?></li>
                  <li><?php echo $row['satir2']; ?></li>
                  <li><?php echo $row['satir3']; ?></li>
				  <li><?php echo $row['satir4']; ?></li>
				  <li><?php echo $row['satir5']; ?></li>
                </ul>
              </div>
              <a href="https://wa.me/<?php echo $site_tlf; ?>?text=<?php echo $site_tlf_text; ?>
" class="button">
                <span>Whatsapp <i class="fad fa-long-arrow-right"></i></span>
				

              </a>
            </div>
          </div>
		  <?php
     }
}
?>
		                    
        </div>
      </div>
    </div>
  </section>  <!--pricing section end2-->
   <!--questions section start-->
  <?php include ('ss.php'); ?>
  <!--growth section end-->
<?php include('footer.php'); ?>