<?php 
include "header.php" 
?>
<style type="text/css">
    .carti{
  visibility: hidden;
}
.dealbanner :hover.img{
opacity: 0.3;
color: silver;
}
.dealbanner 

</style>
<div class="col-4 col-4 col-sm-12">
<div class="container-fluid">
<div class="row">
    <div class="col-sm-12">
        <img src="img/menu.jpg" width="100%" height="350">
    </div>
</div>
</div>
</div>







<div class="banners-group" style="margin-top: 2%; margin-bottom: 1%; margin-right: 20%">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-12">
            <div class="dealbanner">
              <a href="http://localhost/assi2/addtocart.php">
                <img src="img/deal1.jpg" alt="banner" style="width: 100%; height: auto;">  
              </a>
              <p style="text-align: center;">THREE'S A PARTY</p>
             
                 <button class="carti">add to cart   </button>
            </div><!-- End .banner -->
          </div><!-- End .col-md-4 -->

          <div class="col-lg-3 col-md-3 col-12">
            <div class="banner banner-image">
              <a href="http://localhost/assi2/addtocart.php">
                <img src="img/deal2.jpg" alt="banner" style="width: 100%; height: auto;">
                  </a>
                  <p style="text-align: center;">PECK FOR TWO</p>
                 
                 <button class="carti">add to cart   </button>

            
            </div><!-- End .banner -->
          </div><!-- End .col-md-4 -->

          <div class="col-lg-3 col-md-3 col-12" >
             <a href="http://localhost/assi2/addtocart.php">
                <img src="img/deal3.jpg" alt="banner" style="width: 100%; height: auto;">
               </a>
                <p style="text-align: center;"> FLYING SOLO</p>
                
              <button class="carti" >add to cart   </button>
             </div><!-- End .col-md-4 -->
        </div><!-- End .row -->
      </div><!-- End .container -->
    </div>

   
         
     




<?php
include "footer.php"; 
 ?>