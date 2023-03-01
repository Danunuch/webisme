<!DOCTYPE html>
<html lang="en">
<base href="<?=url('')?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="content-language" content="th" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="เว็บร้านค้าออนไลน์สำเร็จรูป เว็บพร้อมใช้ เว็บไซต์ขายสินค้าออนไลน์">
	<meta name="description"
	content="เว็บร้านค้าออนไลน์สำเร็จรูป เว็บพร้อมใช้ เว็บไซต์ขายสินค้าออนไลน์">
	<meta name="author"
	content="เว็บร้านค้าออนไลน์สำเร็จรูป เว็บพร้อมใช้ เว็บไซต์ขายสินค้าออนไลน์">
	<meta name="distribution" content="global" />
	<meta name="robots" content="index,follow" />
	<meta name="googlebot" content="index,follow" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta property="og:title"
	content="เว็บร้านค้าออนไลน์สำเร็จรูป เว็บพร้อมใช้ เว็บไซต์ขายสินค้าออนไลน์">
	<meta property="og:image" content="http://benzbkkgroup.co.th/v1/rotating_images/untitled-1.png" />
	<meta property="og:description"
	content="เว็บร้านค้าออนไลน์สำเร็จรูป เว็บพร้อมใช้ เว็บไซต์ขายสินค้าออนไลน์">

	<title>เว็บร้านค้าออนไลน์สำเร็จรูป เว็บพร้อมใช้ เว็บไซต์ขายสินค้าออนไลน์</title>

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">



	<script src="js/jquery.min.js"></script>

	<script>
		WebFontConfig = {
			google: {
				families: [
				'Prompt:300,400,500,600'
				]
			}
		};
		(function () {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
			'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>

	<script>
		function loadCSS(e, n, o, t) {
			"use strict";
			var d = window.document.createElement("link"),
			i = n || window.document.getElementsByTagName("script")[0],
			s = window.document.styleSheets;
			return d.rel = "stylesheet", d.href = e, d.media = "only x", t && (d.onload = t), i.parentNode.insertBefore(d, i),
			d.onloadcssdefined = function (n) {
				for (var o, t = 0; t < s.length; t++) s[t].href && s[t].href.indexOf(e) > -1 && (o = !0);
					o ? n() : setTimeout(function () {
						d.onloadcssdefined(n)
					})
			}, d.onloadcssdefined(function () {
				d.media = o || "all"
			}), d
		}
	</script>


	<script>
		loadCSS('css/all.css');
		loadCSS('css/coreNavigation-1.1.3.css');
		loadCSS('css/animate.min.css');
		loadCSS('css/typography.css');
		loadCSS('css/header.css');
		loadCSS('css/footer.css');
		loadCSS('css/column.css');
		loadCSS('css/hidden.css');
		loadCSS('css/btn.css');
		loadCSS('css/forms.css');
		loadCSS('css/themes-section-contant.css');
		loadCSS('css/nav-menu-base.css');
	</script>
<!--   	<noscript>
		<link rel="stylesheet" href="css/coreNavigation-1.1.3.css" />
		<link rel="stylesheet" href="css/animate.min.css" />
		<link rel="stylesheet" href="css/typography.css" />
		<link rel="stylesheet" href="css/header.css" />
		<link rel="stylesheet" href="css/footer.css" />
		<link rel="stylesheet" href="css/column.css" />
		<link rel="stylesheet" href="css/hidden.css" />
		<link rel="stylesheet" href="css/btn.css" />
		<link rel="stylesheet" href="css/forms.css" />
		<link rel="stylesheet" href="css/section-contant.css" />
		<link rel="stylesheet" href="css/nav-menu-base.css" />
	</noscript> -->






</head>

<body>

	<?php include("header.php");?>











	<section id="section-themes">
		<div class="container">
			<center>
				<h2>เว็บสำเร็จรูป เว็บพร้อมใช้ ราคาถูก</h2>
				<h3>ระบบครบครัน เต็มรูปแบบ ราคาถูก <br>เว็บสำเร็จรูป เปิดร้านค้าขายสินค้าออนไลน์ เว็บพร้อมใช้ราคาถูก</h3>
			</center>
			<div class="row">



<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12"></div>
<form name="sendmail" method="post" action="<?=url('themes')?>">
			<input type="hidden" name="_token" id="csrf_token" value="<?=csrf_token()?>">
<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
	
<div class="row">
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
      <label for="usr">ค้นหาเทมเพลต</label>
      <input type="text" name="keyword" class="form-control" id="usr" placeholder="เช่น รถ, บ้าน, เครื่องสำอาง">
    </div>
			</div>
			<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
      <label for="pwd">ค้นหาเทมเพลต ตามกลุ่มธุรกิจ</label>
      <input type="text" class="form-control" id="usr" placeholder="เช่น รถ, บ้าน, เครื่องสำอาง">
    </div>
			</div> -->
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<button class="btn btn-default"><i class="fas fa-search"></i> <span>ค้นหา</span></button>
	</div>
	</form>
</div>


</div>
<div class="col-lg-1 col-md-12 col-sm-12 col-xs-12"></div>



<div class="clearfix"></div>
<br>
<div class="clearfix"></div>


				<?php
				if(!empty($product)){
						foreach($product as $data){
				?>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="box-theme">
							<img data-src="images/product/<?=$data->product_Images?>" src="images/product/<?=$data->product_Images?>" class="lazy img-responsive">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<h4><?=$data->product_Name_th?></h4>
									<h5>Responsive</h5>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-right">
									<a class="btn btn-success" href="<?=url('livedemo/'.$data->product_ID)?>" title="GifShop">Live Demo</a>
									<a class="btn btn-danger" href="<?=url('register/'.$data->product_ID)?>" title="ใช้เว็บเทมเพลตนี้">ใช้เว็บเทมเพลตนี้</a>
								</div>
							</div>
						</div>
					</div>
				<?php } } ?>
			</div>
			<br>


<div class="clearfix"></div>
<br>
<div class="clearfix"></div>

			<center>
				<?=$product->links()?>
				<!-- <span class="page">First</span>
				<span class="page01">&lt;&lt;</span>
				<span class="page01">1</span>
				<span class="page01">2</span>
				<span class="page01">3</span>
				<span class="page01">4</span>
				<span class="page01">5</span>
				<span class="pagedot">...</span>
				<span class="page01">90</span>
				<span class="page01">&gt;&gt;</span>
				<span class="page">Last</span> -->
			</center>
		</div>
	</section>














<section id="section-e-commerce">
		<div class="container">
			<center>
				<h2>ราคาเว็บ E-Commerce ร้านค้าออนไลน์</h2>
			</center>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

					<a href="<?=url('register')?>" class="box-e-commerce">
						<h3>1ปี<span class="small">รับส่วนลด</span><span class="hl">20%</span></h3>
						<h4>12,500 บาท</h4>
						<h5>(เฉลี่ยวันละ 35 บาท)</h5>
						<p>ราคาดังกล่าวยังไม่รวมภาษีมูลค่าเพิ่ม 7%<br>
							ขอสงวนสิทธิ์ในการเปลี่ยนแปลงข้อมูลและราคา<br>
						โดยไม่แจ้งให้ทราบล่วงหน้า</p>
						<div class="bay-e-commerce"><span>สั่งซื้อ</span>โปรโมชั่นนี้</div>
					</a>


				</div>


				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

					<a href="<?=url('register')?>" class="box-e-commerce">
						<h3>2ปี<span class="small">รับส่วนลด</span><span class="hl">50%</span></h3>
						<h4>15,500 บาท</h4>
						<h5>(เฉลี่ยวันละ 22 บาท)</h5>
						<p>ราคาดังกล่าวยังไม่รวมภาษีมูลค่าเพิ่ม 7%<br>
							ขอสงวนสิทธิ์ในการเปลี่ยนแปลงข้อมูลและราคา<br>
						โดยไม่แจ้งให้ทราบล่วงหน้า</p>
						<div class="bay-e-commerce"><span>สั่งซื้อ</span>โปรโมชั่นนี้</div>
					</a>


				</div>


			</div>
		</div>
	</section>





	<section id="section-contact">
		<div class="container">
			<center>
				<h2>ติดต่อบริการ โทร.02-100-5055 <span>(จ.-ศ. 8.00-17.00น.)</span></h2>
				<h3>มือถือ. 095-987-4956, 096-292-4669</h3>
			</center>
			<br>
			<br>
			<br>
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<center>
						<h4>ให้เราติดต่อกลับ</h4>
					</center>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
										<label for="usr">ชื่อ <span>*</span></label>
									</div>
									<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
										<input type="text" class="form-control" id="usr">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
										<label for="usr">อีเมล <span>*</span></label>
									</div>
									<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
										<input type="text" class="form-control" id="usr">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
										<label for="usr">มือถือ <span>*</span></label>
									</div>
									<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
										<input type="text" class="form-control" id="usr">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
										<label for="usr">ข้อความ </label>
									</div>
									<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
										<input type="text" class="form-control" id="usr">
									</div>
								</div>
							</div>
						</div>
					</div>
					<center>
						<img src="images/Captcha-demo.gif" width="280" height="76" alt="">
						<br>
						<br>
						<a class="btn btn-danger" href="">ติดต่อทีมงาน</a>
					</center>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<center>
						<h5>คุยกับเราทางไลน์</h5>
						<a href="http://line.me/ti/p/~@webisme" title="Line ID : @webisme">
							<img data-src="images/line-at.png" src="images/blank.gif" class="lazy img-responsive">
						</a>
						<p>** มี@ข้างหน้าด้วย</p>
					</center>
				</div>
			</div>
		</div>
	</section>


	<?php include("footer.php");?>

	
	<script defer src="js/all.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/lazyload.js"></script>
	<script src="js/bg-lazyload.js"></script>

	<script src="js/coreNavigation-1.1.3.js"></script>
	<script>
		$('nav').coreNavigation({
                menuPosition: "center", // left, right, center, bottom
               container: true, // true or false
      responsideSlide: true, // true or false
      mode: 'sticky',
      onStartSticky: function () {
      	console.log('Start Sticky');
      },
      onEndSticky: function () {
      	console.log('End Sticky');
      }
  });
</script>








</body>

</html>