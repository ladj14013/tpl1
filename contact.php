<?php
include "init.php";
$title="Contact";
?>
<!-- Start Contact -->
<div class="heading"><?php echo $title; ?></div>
<div class="contact">
  <div class="container">
    <div class="special_head">Request A <strong>Call Back</strong></div>
      <div class="creat-contact">
        <form action="" method="post">
          <input type="text" name="user" id="" placeholder="Your Name">      
          <input type="text" name="phone" id="" placeholder="Phone Number">      
          <input type="email" name="email" id="" placeholder="Your Name">      
          <input type="date" name="date" id="" placeholder="jj/mm/aaaa">
          <input type="textarea" name="message" id="" placeholder="Message">
          <input type="submit" value="Send">
        </form>
        <div class="figure"><img src="images//img.jpg" alt=""></div>
      </div>
  </div>
</div>
<!-- End Contact -->


<?php 
include "$tpl/footer.php";
?>