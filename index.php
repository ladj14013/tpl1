<?php 
include "init.php";
$title="Home";
?>
<div class="pres">
        <div class="style">
            <p class="p1">Stylish Hair</p>
            <p class="p2">Cutting for New Look</p>
            <a href=""><button>Contact Us</button></a>
        </div>
</div>
<!-- /* Start About */ -->
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
<!-- Start Our Service -->
<div class="our-service">
    <div class="container">
        <div class="special_head">Our
            <strong>service</strong>
        </div>
        <p>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis n</p>
        <div class="content">
            <div class="one our">
                <img src="images/ser1.png" alt="">
                    <div class="text">
                    <h2>Clean Shave</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Inventore sed aperiam eum.
                    </p>
                </div>
            </div>
            <div class="two our">
            <img src="images/ser.png" alt="">
                <div class="text">
                    <h2>Haircut Styles</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Inventore sed aperiam eum.
                    </p>
                </div>
            </div>
            <div class="three our">
            <img src="images/ser3.png" alt="">
                <div class="text">
                    <h2>Face Masking</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Inventore sed aperiam eum.
                    </p>
                </div>
            </div>

        </div>
        <div class="span">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </div>
</div>
<!-- End Our Service -->

<!-- Start Pricing Table -->
<div class="price">
  <div class="special_head">Pricing
    <strong>Table</strong>
  </div>
  <div class="content">
    <div class="img"><img src="images/vvv.png" alt=""></div>
    <div class="prices">
      <div class="span">
        <div> <span>Haircuts .................................................. $ 35</span>
              <span>Haircuts .................................................. $ 35</span></div>
        <div> <span>Skin Fade ............................................... $ 40</span>
              <span>Stache Trim ......................................... $ 35</span></div>
        <div> <span>Buzz Cut ................................................. $ 30</span>
              <span>Beard Trim ........................................... $ 35</span></div>
        <div> <span>Classic Haircut .................................. $ 35</span>
              <span>Colouring ............................................. $ 50</span></div>
      </div>
      <div class="a"><a href="">Read more</a></div>
    </div>
      </div>
      <div class="opening">
        <div class="special_head">Opening
          <strong>Times</strong>
        </div>
        <div class="container">
          <div class="first-ul ul">
            <li>Monday    > 9:00Am > 9:00Pm</li>
            <li>Tuesday   > 9:00Am > 9:00Pm</li>
            <li>Wednesday > 9:00Am > 9:00Pm</li>
          </div>
          <div class="second-ul ul">
            <li>Thuesday > 9:00Am > 9:00Pm</li>
            <li>Friday   > 9:00Am > 9:00Pm</li>
            <li>Saturday > 9:00Am > 9:00Pm</li>
            <li>Sunday   > 9:00Am > 9:00Pm</li>
          </div>
        </div>
      </div>       
</div>
<!-- End Pricing Table -->

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
<!-- Start Contact -->
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
