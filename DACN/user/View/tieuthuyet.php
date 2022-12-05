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
                                <h3 style="color: deepskyblue;">Tiểu Thuyết</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Trang chủ</li>
                                <li>Tiểu Thuyết</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
         <!-- Team area start -->	
        <div class="team-page-area page-padding-2">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Tiểu thuyết</h3>
                            <!--<p></p>-->
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="team-member text-center">
                        <!-- Single team member -->
                        <?php 
                        $arrSach = array("Hai số phận - Jeffrey Archer","Kẻ Trộm Sách - Markus Zusak","Rừng Na Uy - Haruki Murakami","Ông già và biển cả - Ernest Hemingway");
                        $arrSoluong = array("Hai số phận - Jeffrey Archer</a></h5>
                                    <p><i>Hai Số Phận (tựa gốc tiếng Anh: Kane and Abel) là một cuốn tiểu thuyết nổi tiếng kinh điển của nhà văn người Anh Jeffrey Archer được ra mắt lần đầu vào năm 1979.",
                            "Tác phẩm Kẻ trộm sách được nhà văn Markus Zusak ra mắt và xuất bản lần đầu vào năm 2005 và nhanh chóng trở thành một trong những cuốn tiểu thuyết nổi tiếng bán chạy nhất trên thế giới.",
                                    "Tác phẩm được lấy bối cảnh xã hội Nhật Bản của những năm 1960-1970. Qua ngòi bút tài tình của tác giả Murakami tác phẩm sẽ đưa người đọc qua nhiều cung bậc cảm xúc khác nhau, đôi khi có cả sự ám ảnh…",
                                    "Tác phẩm có tên tiếng Anh là The Old Man and the Sea, đây là một tiểu thuyết nổi tiếng của nhà văn Ernest Hemingway được viết vào năm 1951 và được xuất bản lần đầu tiên vào năm 1952.");
                        $arrAnh = array ("5.jpg","6.jpg","7.jpg","8.jpg");
                        $arrGia = array ("99.000VNĐ","118.000VNĐ","90.000VNĐ","98.000VNĐ");
                        for ($i = 0 ; $i < count($arrSach); $i++){
                            echo '<div class="col-md-3 col-sm-6 col-xs-12">';
                            echo '<div class="single-member">';
                                echo '<div class="team-img">';
                                    echo '<a href="index.php?controller=cart">';
                                        echo '<img src="View/img/team/'.$arrAnh[$i].'" alt="" style="height: 250px;">';
                                    echo '</a>';
                                echo '</div>';
                                echo '<div class="team-content">';
                                    echo '<h5><a href="#">'.$arrSach[$i].'</a></h5>';
                                    echo '<p><i>'.$arrSoluong[$i].'</i></p>';
                                    echo '<ul class="team-hover">';
                                        echo '<li><a href="index.php?controller=cart" style="width: 150px">'.$arrGia[$i].'</a></li>';
                                     
                                    echo '</ul>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>  ';
                        }
                        ?>

                        
                    </div>
                </div>
            </div>
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