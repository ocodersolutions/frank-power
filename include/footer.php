
<div class="tag-line">
	<h2>NYQ GNRC $41.48 12/16/2016 4:04 PM EST</h2>
</div>
<!----------------------------------- start footer section ----------------------------------------->
<div class="container-fluid footer">
	<div class="container footer-top">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<h3>All Products</h3>
				<ul class="footer-menu">
					<li><a href="#">Generators</a></li>
					<li><a href="#">Transfer Switches</a></li>
					<li><a href="#">Pressure Washers</a></li>
					<li><a href="#">Water Pumps</a></li>
					<li><a href="#">AC Power Inverters</a></li>
					<li><a href="#">Parts & Accessories</a></li>
					<li><a href="#">Redeem Your 10-Yr Warranty Here</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6">
				<h3>Learn About us</h3>
				<ul class="footer-menu">
					<li><a href="<?php echo URL; ?>about.php">About Us</a></li>
					<li><a href="<?php echo URL; ?>news-article.php">News & Articles</a></li>
					<li><a href="<?php echo URL; ?>career.php">Careers</a></li>
					<li><a href="#">Investor Relations</a></li>
					<li><a href="<?php echo URL; ?>media.php">Media Relations</a></li>
					<li><a href="#">Patents</a></li>
					<li><a href="#">Promotional Store</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6">
				<h3>i'm looking for...</h3>
				<ul class="footer-menu">
					<li><a href="<?php echo URL; ?>contact.php">Contact Us</a></li>
					<li><a href="#">Home Backup Power</a></li>
					<li><a href="#">Home Backup Retailers</a></li>
					<li><a href="#">Portable Power</a></li>
					<li><a href="#">Pressure Washers</a></li>
					<li><a href="<?php echo URL; ?>business.php">Business Solutions</a></li>
					<li><a href="<?php echo URL; ?>heater.php">Resources & Tools</a></li>
					<li><a href="#">Service & Support</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6"> 
				<h3>Programs</h3>
				<ul class="footer-menu">
					<li><a href="#" >Become a Dealer</a></li>
					<li><a href="#" >Builder Alliance</a></li>
					<li><a href="#" >Power Resource</a></li>
					<li><a href="#">GENconnect</a></li>
					<li><a href="#">GENService</a></li>
					<li><a href="#" >Dealer Connection</a></li>
					<li><a href="#" >Sales Connection</a></li>
					<li><a href="#" >GSA</a></li>
				</ul>
			</div>
			
		</div>
	</div>
	
	<div class="copyright row">
		<div class="col-md-12 col-sm-12">
			<div class="f-social"> 
				<ul>
					<li><a href="#"><i class="fa fa-facebook" ></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" ></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" ></i></a></li>
					<li><a href="#"><i class="fa fa-youtube" ></i></li>
					<li><a href="#"><i class="fa fa-google-plus" ></i></li>
				</ul>
			</div>
			<p class="c-text">© 2016 Generac Power Systems, Inc. All rights reserved.<br/>
Privacy Policy Terms & Conditions Site Map</p>
		</div>
	</div>
</div>
<!----------------------------------- end footer section ----------------------------------------->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo URL; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo URL; ?>js/owl.carousel.min.js"></script>
	<script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
				autoplay: true,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: true
                  },
                  1366: {
                    items: 3,
                    nav: true,
                    loop: true,
                    margin: 20
                  }
                }
              })
			  
			  $('.owl-carousel-2').owlCarousel({
                loop: true,
                margin: 10,
				autoplay: true,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: true
                  },
                  1366: {
                    items: 5,
                    nav: true,
                    loop: true,
                    margin: 20
                  }
                }
              })
			  
			  
				$( ".owl-prev").html('<img src="<?php echo URL; ?>images/arrow-left-bk.png" class="img-responsive center-block">');
				$( ".owl-next").html('<img src="<?php echo URL; ?>images/arrow-right-bk.png" class="img-responsive center-block">');
            })
          </script>
  </body>
</html>
