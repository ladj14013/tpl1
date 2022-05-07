<?php
include "init.php";
$title="Our Barbers";
?>
<!-- /* Start About */ -->
<div class="heading"><?php echo $title; ?></div>

<!-- Start Our Barbes -->
<div class="our_barbes">
  <div class="container">
    <div class="one barbes">
    <img src="images/1.png" alt="">
    <h2>Jone due</h2>
    <span>Haircutte</span>
    </div>
    <div class="two barbes">
    <img src="images/2.png" alt="">
    <h2>Jone due</h2>
    <span>Haircutte</span>
    </div>
    <div class="three barbes">
    <img src="images/3.png" alt="">
    <h2>Jone due</h2>
    <span>Haircutte</span>
    </div>
     
  </div>
  <div class="flesh">
    <img class="im1" src="images/icon.jpg" alt="">
    <img class="im2" src="images/-2.jpg" alt="">
  </div>   
</div>
<!-- End Our Barbes -->


<?php 
include "$tpl/footer.php";
?>