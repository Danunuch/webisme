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
		loadCSS('css/register-section-contant.css');
		loadCSS('css/nav-menu-base.css');
		loadCSS('css/modal.css');
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




	
	<section id="section-register">
	<form name="register" method="post" action="<?=url('save_member')?>" onsubmit="return checkvalitate()">
								<input type="hidden" name="_token" id="csrf_token" value="<?=csrf_token()?>">
		<div class="container">
			<center>
				<h2>สมัครสมาชิก</h2>
				<h3>สมัครสมาชิก เปิดใช้งานเว็บไซต์ สําหรับลูกค้าที่สนใจเปิดเว็บไซต์ กับทาง WEBisme โดยกรอกข้อมูลสมัครสมาชิกด้านล่าง</h3>
			</center>
			<br>
			<br>
			<br>

			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
					<div class="box-form">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<div class="row">
										<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
										</div>
										<div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
											<div class="row">
												<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
													<div class="input-group">
														<span class="input-group-addon"><i class="fas fa-desktop"></i></span>
														<input type="text" name="product_Name" class="form-control" value="<?=$product_Name_th?>" required>
													</div>
												</div>
												<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
													<center>
													<?php if($product_ID!=''){ ?>
											
														<a href="<?=url('livedemo/'.$product_ID)?>" class="btn btn-success">View</a>
													<?php	}else{ ?>
														<a href="<?=url('themes/')?>" class="btn btn-success">View</a>
													<?php } ?>
														<a href="<?=url('themes/')?>" class="btn btn-danger">Change</a>
													</center>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										<label for="usr">ต้องเลือก <span>*</span></label>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
											<div class="input-group">
												<span class="input-group-addon"><i class="fas fa-parking"></i></span>
												<select class="form-control" name="member_Year" id="sel1" required>
													<option value="">กรุณาเลือก</option>
													<?php if(!empty($price)){
														foreach($price as $data){ ?>
													<option value="<?=$data->producttype_ID?>"><?=$data->producttype_Name?></option>
													<?php }
													}  ?>
													<!-- <option value="2">2ปี - ราคา 12,500 บาท</option> -->
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
				
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<div class="row">
										<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
											<label for="usr">ชื่อโดเมน <span>*</span></label>
										</div>
										<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
											<input type="text" class="form-control" name="domain_Name" id="usr" placeholder="www.domainname.com" onkeypress="return chspace()" required>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="row">
									<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
									</div>
									<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
										<p><i>ชื่อโดเมนความยาว 2 - 30 ตัวอักษร ต้องเป็นตัวอักษรภาษาอังกฤษตัวเล็ก (a-z)<br>
										ตัวเลข (0-9) ห้ามใช้เครื่องหมาย, ห้ามเว้นวรรค ใช้ภาษาไทยได้</i></p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<div class="row">
										<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
											<label for="usr">ชื่อ <span>*</span></label>
										</div>
										<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
											<input type="text" class="form-control" name="member_Name" id="usr" required>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<div class="row">
										<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
											<label for="usr">นามสกุล <span>*</span></label>
										</div>
										<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
											<input type="text" class="form-control"  name="member_Surname" id="usr" required>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<div class="row">
										<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
											<label for="usr">มือถือ. <span>*</span></label>
										</div>
										<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
											<input type="text" name="member_Mobile" id="member_Mobile" class="form-control" maxlength="10"  onkeypress="return Numbers(event);"  required>
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
											<input type="email"  name="member_Email" class="form-control" id="usr" required>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="form-group">
									<div class="row">
										<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
											<label for="usr">LINE ID </label>
										</div>
										<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
											<input type="text" name="member_Line_ID" class="form-control" id="usr" >
										</div>
									</div>
								</div>
							</div>
						</div>
						<center>
							<!-- <img src="images/Captcha-demo.gif" width="280" height="76" alt=""> -->
							<div class="g-recaptcha" data-callback="makeaction" data-sitekey="6LcyfaYUAAAAAP6uVtGFKXq9oGlfdKZXZ-gj6pLQ" ></div><br>
                        <script>
                              function makeaction()
                              {
                                    document.getElementById('submit').disabled = false;  
                              }
                        </script> 
							<br>
							<div class="checkbox">
								<label><input type="checkbox" name="member_Active" value="Y" required> ยอมรับ <a href="#myModal" title="ข้อตกลง ของเว็บไซต์ cw.in.th" data-toggle="modal" data-target="#myModal">ข้อตกลง</a> ของเว็บไซต์ cw.in.th</label>
							</div>
							<br>
							<button type="submit" id="submit" disabled class="btn btn-danger" >สมัครเปิดใช้งาน</button>
						</center>
					</div>
				</div>
			</div>
			<div class="col-lg-1"></div>
		</div>
	</div>
	</form>
</section>




 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>
         
        </div>
        <div class="modal-body">
        	<div class="box-model">
			<?=$about->about_Des2_TH?>
          <!-- <h4>ข้อตกลงการใช้บริการ ร้านค้าออนไลน์ เว็บไซต์สำเร็จรูป เว็บพร้อมใช้ WEBisme
WEBisme Terms of Service</h4>


<ol>
<li>
	ความเกี่ยวข้องของคุณกับ WEBisme
	<ol>
		<li>
		WEBisme เป็นของบริษัท แชนเนล ไวด์ คอมพิวเตอร์ จำกัด (Channel Wide Computer Co., Ltd.) ในชื่อ 
		“www.webisme.com / www.cw.in.th” ซึ่งต่อไปจะเรียกว่า “ผู้ให้บริการ”
	</li>
	<li>
		สิ่งที่คุณใช้ ไม่ว่าจะเป็น ผลิตภัณฑ์ ซอฟต์แวร์ บริการ หรือเว็บไซต์ ของผู้ให้บริการ ซึ่งต่อไปจะเรียกว่า “บริการ”
</li>
<li>
		คุณซึ่งเป็นผู้ใช้บริการไม่ว่าจะส่วนใดส่วนหนึ่งหรือทั้งหมดของผู้ให้บริการ ซึ่งต่อไปจะเรียกว่า “ผู้ใช้บริการ”
		โดยจะแยกได้ดังนี้
<ol>
	<li>
			เจ้าของสินค้าหรือผู้ที่นำสินค้ามาจัดจำหน่ายบนเว็บไซต์ผ่านบริการของผู้ให้บริการ ซึ่งต่อไป จะเรียกว่า “ผู้ขาย”
	</li>
	<li>
			ผู้สั่งซื้อสินค้า และ/หรือ ใช้บริการเว็บไซต์ของผู้ขาย ซึ่งต่อไปจะเรียกว่า “ผู้ซื้อ”
	</li>
	</ol>
	</li>
	</ol>
</li>
<li>
		ผู้ใช้บริการตกลงจะปฏิบัติตามข้อตกลงและเงื่อนไขต่างๆ
	<ol>
	<li>
		การใช้บริการของผู้ให้บริการนั้นผู้ใช้บริการจำเป็นต้องเข้าใจและยอมรับข้อตกลงและเงื่อนไขต่างๆของผู้ให้บริการ
		ทั้งหมด
	</li>
	<li>
		จะถือว่าผู้ใช้บริการเข้าใจและยอมรับข้อตกลงและเงื่อนไขต่างๆ หากดำเนินการดังต่อไปนี้
	<ol>
	<li>
			ผู้ใช้บริการคลิกปุ่มตกลงและยอมรับเงื่อนไข ซึ่งทางผู้ให้บริการจะมีทางเลือกที่จะยอมรับหรือไม่ก่อน หรือ
			แสดงแจ้งเตือนการยอมรับของผู้ใช้บริการก่อนการคลิกปุ่มตกลง</li>
			<li>
			ผู้ใช้บริการเข้าใช้บริการของผู้ให้บริการซึ่งในกรณีนี้ผู้ใช้บริการต้องยอมรับว่าทางผู้ให้บริการจะถือว่าผู้ใช้
			บริการเข้าใจและยอมรับข้อตกลงและเงื่อนไขต่างๆ ตั้งแต่เริ่มใช้บริการเป็นต้นไป
</li>
</ol>

		</li>
		<li>
		ผู้ใช้บริการควรพิมพ์ข้อตกลงและเงื่อนไขต่างๆของผู้ให้บริการเพื่อเป็นบันทึกช่วยจำของผู้ใช้บริการ
</li>
</ol>
</li>
</ol> -->


</div>
        </div>
       
      </div>
    </div>
  </div>


<?php include("footer.php");?>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script defer src="js/all.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/lazyload.js"></script>
<script src="js/bg-lazyload.js"></script>

<script src="js/coreNavigation-1.1.3.js"></script>

<script>
function checkvalitate(){
	var count = $('#member_Mobile').val().length;
		console.log(count);
		if(count!=10){
		alert('กรุณาระบุเบอร์มือถือให้ครบ 10 หลัก');
		return false;
		}
}

function chspace()
{
if(event.keyCode == 32)
return false;

return true;
}

function Numbers(e) 
{ 
var keynum; 
var keychar; 
var numcheck; 
if(window.event) // IE    
{ 
  
keynum = e.keyCode;   
} 
else if(e.which) // Netscape/Firefox/Opera    
{ 
 
keynum = e.which; 
  
} 
keychar = String.fromCharCode(keynum); 
numcheck = /\d/; 
return numcheck.test(keychar); 
} 

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
 <script src="js/modal.js"></script>

<!--  <script type="text/javascript">
  $(window).on('load',function(){
    $('#myModal').modal('show');
  });
</script>
 -->







</body>

</html>