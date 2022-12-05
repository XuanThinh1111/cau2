
<!doctype html>
<html class="no-js" lang="en">

<head>
		<?php include 'View/layout/headerpage.php'?>
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        
        <!-- header end -->
        <!-- Start Intro Area -->
		<div class="slide-area fix" data-stellar-background-ratio="0.6">

            <div class="display-table">

                <div class="display-table-cell">

					<div class="container">

						<div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <!-- Start Slider content -->
                                <div class="slide-content text-center">
                                    <h2 class="title2" style="font-size: 50px;">Sách mới</h2>
                                    <div class="layer-1-3">
                                        <a href="index.php?controller=sachmoi" class="ready-btn left-btn" > Xem sản phẩm </a>
                                        
                                    </div>
                                </div>
                                <!-- End Slider content -->
						    </div>
						</div>
					</div>
				</div>
            </div>
		</div>
		<!-- End Intro Area -->
        <!-- Start Count area -->
       
        <!-- End Count area -->
        <!-- Start Invest area -->



        <div class="invest-area bg-color area-padding-2">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Giới Thiệu</h3>
                            <p>Công ty Bán Sách BookStoreSTU là công ty uy tín thành lập vào Tháng 9 Năm 2021. Có nhiều những tác phẩm và sách giáo khoa có ưu đãi cho sinh viên và học sinh. </p>
						</div>
					</div>
				</div>

                <?php 
                foreach($data as $r) {
                    ?>
                <div class="row">
                    <div class="pricing-content">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="pri_table_list">
                                <div class="top-price-inner">
                                   <div class="rates">
                                        
                                    </div>
                                    <span class="per-day"><img src="../admin/back-end/View/assets/upload/<?php echo $r['img'] ?>"></span>
                                </div>
                                <ol class="pricing-text">
                                    <li class="check"><?php echo $r['book_name'] ?></li>
                                    <li class="check"><?php echo $r['price'] ?>.VND</li>
                                </ol>
                                <div class="price-btn blue">
                                    <a class="blue" href="index.php?controller=book&&action=detail&id=<?php echo $r['book_id']?>" style="width: 201px;">Thông tin sản phẩm</a>
                                    
                    </div>
                </div>
                
                        </div>
                                </div>
                                <?php
                }
                ?>
                            </div>
                            
                        </div>
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Invest area -->
    
        <!--Start payment-history area -->
        <div class="payment-history-area bg-color fix area-padding-2">
      
        <!-- End payment-history area -->
        <!-- Start Banner Area -->
        <div class="banner-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-all area-80 text-center">
                            <div class="banner-content">
                                <h3>Our investment plan world wide business relations for development</h3>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->
     
      
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

</html>