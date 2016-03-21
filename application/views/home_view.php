<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>BUSKIPM - Balai Uji Standar Karantina Ikan</title>		
		<meta name="keywords" content="BUSKIPM Template" />
		<meta name="description" content="BUSKIPM - Balai Uji Standar Karantina Ikan">
		<meta name="author" content="halimc17">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/fontawesome/css/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/owlcarousel/owl.carousel.min.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/owlcarousel/owl.theme.default.min.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/magnific-popup/magnific-popup.css" media="screen">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/theme-shop.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/theme-animate.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/circle-flip-slideshow/css/component.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/nivo-slider/nivo-slider.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/nivo-slider/default/default.css" media="screen">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>vendor/modernizr/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond/respond.js"></script>
			<script src="vendor/excanvas/excanvas.js"></script>
		<![endif]-->
		
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="js/script.js"></script>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
					//$('.infoTerbaru').fadeOut(500).fadeIn(500, blink); 
				
			});
		</script>

		<script type="text/javascript">
		    var blink = function(){
		        $('.infoTerbaru').toggle();
		    };
		    $(document).ready(function() {
		        setInterval(blink, 1000);
		    });
		</script>

		<script type='text/javascript'>
<!--
			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			
		//-->
		</script>


		<style style="text/css">
			.example1 {
			 height: 25px;	
			 overflow: hidden;
			 position: relative;
			}
			.example1 h5 {
			 position: absolute;
			 width: 100%;
			 height: 100%;
			 margin: 0;
			 line-height: 25px;
			 text-align: center;
			 /* Starting position */
			 -moz-transform:translateX(100%);
			 -webkit-transform:translateX(100%);	
			 transform:translateX(100%);
			 /* Apply animation to this element */	
			 -moz-animation: example1 15s linear infinite;
			 -webkit-animation: example1 15s linear infinite;
			 animation: example1 15s linear infinite;
			}
			/* Move it (define the animation) */
			@-moz-keyframes example1 {
			 0%   { -moz-transform: translateX(100%); }
			 100% { -moz-transform: translateX(-100%); }
			}
			@-webkit-keyframes example1 {
			 0%   { -webkit-transform: translateX(100%); }
			 100% { -webkit-transform: translateX(-100%); }
			}
			@keyframes example1 {
			 0%   { 
			 -moz-transform: translateX(100%); /* Firefox bug fix */
			 -webkit-transform: translateX(100%); /* Firefox bug fix */
			 transform: translateX(100%); 		
			 }
			 100% { 
			 -moz-transform: translateX(-100%); /* Firefox bug fix */
			 -webkit-transform: translateX(-100%); /* Firefox bug fix */
			 transform: translateX(-100%); 
			 }
			}
		</style>

	</head>
	<body>

		<div class="body">
			<header id="header">				
				<div class="container">					
					<div class="search">
						<form id="searchForm" action="page-search-results.html" method="get">
							<div class="input-group">
								<input type="text" class="form-control search" name="q" id="q" placeholder="Search..." required>
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
					<nav>
						<ul class="nav nav-pills nav-top">
							<li>
								<a href="about-us.html"><i class="fa fa-angle-right"></i>Visitor</a>
							</li>
							<li>
								<a href="contact-us.html"><i class="fa fa-angle-right"></i>Log In</a>
							</li>
						</ul>
					</nav>
					<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>
				
				
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">					
						<div class="row center" style="background-image('<?php echo base_url(); ?>img/header3.jpg');">							
							<div class="col-md-12">
								<div class="header" style="background-color:#000;height:150px;background-image:url('<?php echo base_url(); ?>img/header3.jpg');">							
																		
								</div>
							</div>
							
							
						</div>
					</div>	
					<br />
				
					<div class="container">	
						

						<!-- cssmenu-->
						<?php $this->load->view('menu_view'); ?>
						<!-- css menu -->
						<div class="row">
							<div class="col-md-12">
								<div class="example1" style="background-color:#66ff66;" >
									<h5 style="color:#000;">KKP targetkan produksi ikan budidaya capai 19 juta ton di 2016 - Registrasi pakan ikan akan digratiskan pada tahun 2016</h4>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="example1" style="background-color:#FFF;">&nbsp;</div>
							</div>
							<div class="col-md-4">
								<div class="example1" style="background-color:#FFF;">&nbsp;</div>
							</div>
							<div class="col-md-4">
								<div style="background-color:#66ff66;height:25px;margin-top:5px;">
										<h5 style="color:#000;text-align:right;margin-right:10px;padding-top:3px;">
											<script type="text/javascript">
												document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
											</script>	
								</h5></div>
							</div>
						</div>
					</div>
					
				</div>				
				
			</header> 

			<div role="main" class="main">			

				<div class="container">

					<div class="row">
						<hr class="tall" />
					</div>

				</div>
				
				<div class="container">

					<div class="row">
						<div class="col-md-4">

							<div class="owl-carousel" data-plugin-options='{"items": 1}'>
								<div>
									<div class="thumbnail">
										<img alt="" height="300" class="img-responsive" src="<?php echo base_url(); ?>img/team/img-1.jpg">
									</div>
								</div>
								<div>
									<div class="thumbnail">
										<img alt="" height="300" class="img-responsive" src="<?php echo base_url(); ?>img/team/img-2.jpg">
									</div>
								</div>
								<div>
									<div class="thumbnail">
										<img alt="" height="300" class="img-responsive" src="<?php echo base_url(); ?>img/team/img-3.jpg">
									</div>
								</div>
								<div>
									<div class="thumbnail">
										<img alt="" height="300" class="img-responsive" src="<?php echo base_url(); ?>img/team/img-4.jpg">
									</div>
								</div>
							</div>

						</div>
					
						<div class="col-md-4">

							<h2 class="shorter">Info <strong>Kegiatan</strong></h2>
							<h4>Workshop pengujian EHP</h4>
							<p>Balai Uji Standar Karantina Ikan, Pengendalian Mutu, dan Keamanan Hasil Perikanan bekerja sama dengan PT. KingLab Indonesia mengadakan kegiatan workshop pengujian EHP (Enterocytozoon Hepatopenaei).  Kegiatan ini diselenggarakan di Ruang rapat Kuda Laut BUSKIPM Jalan Raya Setu No. 1, Setu, Jakarta Timur pada tanggal 19 Januari 2016.</p>

							<!--<div class="infoTerbaru">
								<div class="alert alert-success" style="text-align:center;valign:middle;">
									<h2><strong>INFO TERBARU</strong></h2>
								</div>
							</div>-->

						</div>


						
						<div class="col-md-4">
								<h2><strong>Video</strong> BUSKIPM</h2>
								<div class="embed-responsive embed-responsive-16by9">									
									<iframe src="https://www.youtube.com/embed/h6vkLEobeJk" frameborder="0" allowfullscreen></iframe>
								</div>	
						</div>
		
					</div>

				</div>

				<div class="container">	
					<!--<div class="row">
						<div class="col-md-8">
							<div class="example1" style="background-color:#CCC;">
								<h4>KKP targetkan produksi ikan budidaya capai 19 juta ton di 2016 - Registrasi pakan ikan akan digratiskan pada tahun 2016</h4>
							</div>
						</div>
					</div>-->

					<div class="row">
						<div class="col-md-8">
							<h2><strong>Berita</strong> Informasi</h2>				
							
							<article>
								<div class="row">
									<div class="col-md-12">
										<div class="post-content">
											<div class="alert alert-info">
												<h4>Menteri Susi siap tenggelamkan kapal pencuri ikan</h4>
												<p>Menteri Kelautan dan Perikanan (MKP), Susi Pudjiastuti menerangkan, kapal-kapl tersebut akan ditenggelamkan pada 19-20 Oktober 2015. "Semangat kita menegakkan sesuai UU Perikanan No 45 Tahun 2009," kata Susi di kantornya, Jakarta, Kamis (15/10/2015).</p>

												<div class="post-meta">
													<span><i class="fa fa-calendar"></i> January 10, 2016 </span>
													<span><i class="fa fa-user"></i> By <a href="#">Meri Herawaty</a> </span>											
												</div>
											</div>											
										</div>
									</div>
								</div>
							</article>

							<article style="margin-top:5px;">
								<div class="row">
									<div class="col-md-12">
										<div class="post-content">
												<div class="alert alert-info">
													<h4>AS bebaskan tarif impor produk perikanan RI.</h4>
													<p>Menteri Kelautan dan Perikanan, Susi Pudjiastuti menyatakan kini beberapa produk perikanan Indonesia telah bebas bea masuk ke Amerika Serikat (AS). Dengan begitu, produk tertentu yang dikirim ke negeri Paman Sam tak dikenakan pungutan.</p>

													<div class="post-meta">
														<span><i class="fa fa-calendar"></i> January 10, 2016 </span>
														<span><i class="fa fa-user"></i> By <a href="#">Meri Herawaty</a> </span>											
													</div>
												</div>											
										</div>
									</div>
								</div>
							</article>

							<article style="margin-top:5px;">
								<div class="row">
									<div class="col-md-12">
										<div class="post-content">
											<div class="alert alert-info">
												<h4>Anggaran Meningkat, Menteri Susi Bakal Rekrut Banyak Pegawai KKP</h4>
												<p>Terkait ekspansi Kementerian Kelautan dan Perikanan (KKP), Susi menjelaskan KKP akan menambah karyawan yang lebih baik dan yang lebih berkualitas tentunya. Sebelumnya, Susi mengaku sudah pernah membahas hal ini dengan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (PAN-RB) Yuddy Chrisnandi.</p>

												<div class="post-meta">
													<span><i class="fa fa-calendar"></i> January 10, 2016 </span>
													<span><i class="fa fa-user"></i> By <a href="#">Meri Herawaty</a> </span>											
												</div>
											</div>											
										</div>
									</div>
								</div>
							</article>

						</div>
						<div class="col-md-4">
							
							


							<div class="row">
								<div class="col-md-12">
									<div id="map_canvas">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.49256304483!2d106.8981931153708!3d-6.330166863702469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed258745f6e7%3A0x70ac844594f953da!2sBUSKIPM%2C+Jakarta+Timur!5e0!3m2!1sen!2sid!4v1447915690522" width="100%" height="348" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-12">
									<a class="img-thumbnail" href="#">
											<img class="img-responsive" src="<?php echo base_url(); ?>img/simlab.png">
										</a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<a class="img-thumbnail" href="#">
										<img class="img-responsive" src="<?php echo base_url(); ?>img/uji_profisiensi.png">
									</a>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<a class="img-thumbnail" href="#">
										<img class="img-responsive" src="<?php echo base_url(); ?>img/grey.jpg">
									</a>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<a class="img-thumbnail" href="#">
										<img class="img-responsive" src="<?php echo base_url(); ?>img/grey.jpg">
									</a>
								</div>
							</div>							
							
						</div>
					</div>
					
					<hr class="tall" />

					

					<div class="row">
							<div class="col-md-4">
								<h2><strong>Interaksi</strong></h2>

								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_nama" class="control-label">Nama</label>
											<input type="text" class="form-control" id="txt_nama" name="txt_nama" value="">											
										</div>							
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_email" class="control-label">Email</label>
											<input type="text" class="form-control" id="txt_email" name="txt_email" value="">											
										</div>							
									</div>
								</div>	

								<div class="row">
									<div class="col-md-12">						
										<div class="form-group">
											<label for="txt_pesan" class="control-label">Pesan</label>											
											<textarea type="text" class="form-control" id="txt_pesan" name="txt_pesan" value=""></textarea>
										</div>							
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="KIRIM" class="btn btn-primary btn-lg" data-loading-text="Loading...">
									</div>
								</div>
							</div>
							
							<div class="col-md-4">
								
								<div class="row">
									<div class="col-md-12">
										<a class="img-thumbnail" href="mailto:buski_jkt@yahoo.com">
											<img class="img-responsive" src="<?php echo base_url(); ?>img/layanan_pengaduan2.png">
										</a>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<a class="img-thumbnail" href="#">
											<img class="img-responsive" src="<?php echo base_url(); ?>img/grey.jpg">
										</a>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<a class="img-thumbnail" href="#">
											<img class="img-responsive" src="<?php echo base_url(); ?>img/grey.jpg">
										</a>
									</div>
								</div>

						
							</div>
							
							<div class="col-md-4">
								
								<div class="row">
									<div class="col-md-12">
										<a class="img-thumbnail" href="http://www.kkp.go.id">
											<img class="img-responsive" src="<?php echo base_url(); ?>img/antikorupsi2.png">
										</a>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">
										<a class="img-thumbnail" href="http://www.kkp.go.id">
											<img class="img-responsive" src="<?php echo base_url(); ?>img/wb.jpg">
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<a class="img-thumbnail" href="#">
											<img class="img-responsive" src="<?php echo base_url(); ?>img/grey.jpg">
										</a>
									</div>
								</div>
							</div>
					</div>
					
					

					<hr class="tall" />

					<div class="row">

						<div class="owl-carousel" data-plugin-options='{"items": 8, "autoplay": true, "autoplayTimeout": 3000}'>
								<div>
									<a href="http://www.kkp.go.id"><img class="img-responsive" src="<?php echo base_url(); ?>img/ico_link_kkp.png" alt="" style="width:100px;height:100px;"></a>
								</div>
								<div>
									<img class="img-responsive" src="<?php echo base_url(); ?>img/ico_link_barantan.png" alt="" style="width:100px;height:100px;">
								</div>
								<div>
									<a href="http://www.oie.int"><img class="img-responsive" src="<?php echo base_url(); ?>img/ico_link_oie.png" alt="" style="width:100px;height:100px;"></a>
								</div>
								<div>
									<a href="http://www.beacukai.go.id"><img class="img-responsive" src="<?php echo base_url(); ?>img/ico_link_customs.png" alt="" style="width:100px;height:100px;"></a>
								</div>
								<div>
									<a href="http://www.kan.or.id"><img class="img-responsive" src="<?php echo base_url(); ?>img/KAN1.png" alt="" style="width:100px;height:100px;"></a>
								</div>
								<div>
									<a href="http://www.codexindonesia.bsn.go.id"><img class="<?php echo base_url(); ?>img-responsive" src="img/logo_codexind.png" alt="" style="width:100px;height:100px;">
								</div>
								<div>
									<a href="http://www.iso.org"><img class="img-responsive" src="<?php echo base_url(); ?>img/iso-logo.png" alt="" style="width:100px;height:100px;"></a>
								</div>
								<div>
									<a href="http://www.ibsn.org"><img class="img-responsive" src="<?php echo base_url(); ?>img/bsn.png" alt="" style="width:100px;height:100px;"></a>
								</div>
							</div>
					</div>

				</div>
				
				

			
					<section class="featured footer map">
						
					</section>
				
			</div>

			<?php $this->load->view('footer_view.php'); ?>
		</div>

		<!-- Vendor -->
		<script src="<?php echo base_url(); ?>vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url(); ?>vendor/jquery.appear/jquery.appear.js"></script>
		<script src="<?php echo base_url(); ?>vendor/jquery.easing/jquery.easing.js"></script>
		<script src="<?php echo base_url(); ?>vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="<?php echo base_url(); ?>vendor/bootstrap/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>vendor/common/common.js"></script>
		<script src="<?php echo base_url(); ?>vendor/jquery.validation/jquery.validation.js"></script>
		<script src="<?php echo base_url(); ?>vendor/jquery.stellar/jquery.stellar.js"></script>
		<script src="<?php echo base_url(); ?>vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="<?php echo base_url(); ?>vendor/jquery.gmap/jquery.gmap.js"></script>
		<script src="<?php echo base_url(); ?>vendor/isotope/jquery.isotope.js"></script>
		<script src="<?php echo base_url(); ?>vendor/owlcarousel/owl.carousel.js"></script>
		<script src="<?php echo base_url(); ?>vendor/jflickrfeed/jflickrfeed.js"></script>
		<script src="<?php echo base_url(); ?>vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="<?php echo base_url(); ?>vendor/vide/vide.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url(); ?>js/theme.js"></script>

		<!-- Specific Page Vendor and Views -->
		<script src="<?php echo base_url(); ?>vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
		<script src="<?php echo base_url(); ?>vendor/nivo-slider/jquery.nivo.slider.js"></script>
		<script src="<?php echo base_url(); ?>js/views/view.home.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url(); ?>js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url(); ?>js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12345678-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>
		 -->

	</body>
</html>
