<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from rockstheme.com/rocks/aievari-live/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:27:46 GMT -->
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
                                <h3>Thông tin sản phẩm</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Trang chủ</li>
                                <li>Thông tin sản phẩm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- about-area start -->
        <?php
        foreach($data as $r) {
        ?>
        <div class="about-area page-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div >
                            <img src="../admin/back-end/View/assets/upload/<?php echo $r['img']?>" style="height: 500px;">
                           
                        </div>
                    </div>
                    <!-- column end -->
                    
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-content">
							<h3><?php echo $r['book_name'] ?></h3>
                            <p></p>
                            <div class="about-details">
                                <ul class="marker-list">
									
									<li><?php echo $r['description'] ?></li>
									
                                    <li><b><?php echo $r['price'] ?>VND</b></li>
                                    
								</ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- column end -->
                </div>
                  <h3 style="text-align: right;"> <a href="index.php?controller=cart"><button type="button" class="btn btn-cart"><b>Thêm Vào Giỏ Hàng</b></button></a></h3>
            </div>
        </div>
        <?php
        }
        ?>
        <!-- about-area end -->
        <!-- Start About Area -->
       
        <!-- End Feature Area -->
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
        <!-- Chart JS -->
        <script src="View/js/Chart.bundle.min.js"></script>
        <script src="View/js/Chart.js"></script>
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

<!-- Mirrored from rockstheme.com/rocks/aievari-live/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:28:01 GMT -->
</html>