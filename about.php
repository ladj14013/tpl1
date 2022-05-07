<?php
include "init.php";
$title="About";
?>
<!-- /* Start About */ -->
<div class="heading"><?php echo $title; ?></div>
<div class="about">
    <div class="container">
        <div class="box">
            <span>Welcome to our Shop</span>

            <div class="special_head">About <strong class="white">Our Salon</strong></div>
            <p>It is a long established fact that a reader will be 
                distracted by the readable content of a page when 
                looking at its layout. The point of using Lorem Ipsum 
                is that it has a more-or-less normal distribution of 
                letters, as opposed to using 'Content here, content 
                here', making it look like readable English. Many deskt 
                op publishing packages and web page editors now use 
                Lorem Ipsum as their default model text, and a search 
                for 'lorem ipsum' will uncover many web sites still in 
                their
            </p>
            <div class="a"><a href="#">Read more</a></div>
            
        </div>
        <div class="about_img">
            <img src="images/about_img.png" alt="">
        </div>
    </div>
</div>

<!-- /* End About */ -->
<?php 
include "$tpl/footer.php";
?>