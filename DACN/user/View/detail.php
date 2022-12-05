<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from rockstheme.com/rocks/aievari-live/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:01 GMT -->
<head>
		<?php include 'View/layout/headerpage.php' ?>
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        
        <!-- header end -->
        <!-- Start breadcumb Area -->
        	 <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <h3>BookStoreSTU</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Trang chủ</li>
                                <li>Chi Tiết</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
         <!-- Team area start -->	
        
<div></br></br>
<center>
        <main class="container">

  <!-- Left Column / Headphones Image -->

                       
  <div class="left-column">
     <section class="section">
      <?php
      foreach($data as $r) {
      ?>
  <img class="active" src="../admin/back-end/View/assets/upload/<?php echo $r['img']?>"  style="height: 300px;">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Book Store STU</span>
      <h1><?php echo $r['book_name'] ?></h1>
      <p><?php echo $r['description'] ?></p>
    </div>
 
    <!-- Product Configuration -->
    <div class="product-configuration">
 
      <!-- Product Color -->
      
 
      <!-- Cable Configuration -->
      
    </div>
 
    <!-- Product Pricing -->
    <br>
    <div class="product-price">
      <span><?php echo $r['price'] ?>VND</span>
      <form class="form form-horizontal"  method = "POST" action = "index.php?controller=cart&action=add">
      <input type="number" id="quantity" name="quantity[<?php echo $r['book_id'] ?>]" class="quantity form-control input-number" value="1" min="1" max="100" >
      <button type="submit" class="cart-btn">Add to cart</button>
  </form>
    </div>
    <?php
}
?>
  </div>
  
</main>
</center>
</div>
        <!-- team area end -->
        <!-- Start Footer Area -->
        <?php include 'View/layout/footerpage.php' ?>
        <!-- End Footer area -->
		
		<!-- all js here -->

		<!-- jquery latest version -->
		<script src="View/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="View/js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="View/js/owl.carousel.min.js"></script>
		  <!-- stellar js -->
        <script src="View/js/jquery.stellar.min.js"></script>
		<!-- magnific js -->
        <script src="View/js/magnific.min.js"></script>
        <!-- wow js -->
        <script src="View/js/wow.min.js"></script>
        <!-- meanmenu js -->
        <script src="View/js/jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		<script src="View/js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="View/js/plugins.js"></script>
		<!-- main js -->
		<script src="View/js/main.js"></script>
	</body>

<!-- Mirrored from rockstheme.com/rocks/aievari-live/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:19 GMT -->
</html>