<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css.css" />
<title>3D Phone Store</title>
<link rel="icon" href="hinhanh/phonestore.png">
</head>
<style>
* {
  box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
/*---------dau trang--------*/
.dautrang {
	top:0px;
	position: relative;
	padding: 18px;
	color: black;
}
.dautrang a {
	width:100%;
}
/*-----------thanh dieu huong 1-----------*/
.thanhdieuhuong1 {
	overflow: hidden;
 	background-color: Goldenrod;
  	position: sticky;
  	top: 0px;
  	z-index: 1005;
}
.thanhdieuhuong1 a {
	float: left;
 	display: block;
  	color: black;
  	text-align: center;
  	padding: 20px 20px;
  	text-decoration: none;
}

.thanhdieuhuong1 a:hover {
  	background-color: DarkGoldenrod;
  	color: black;
}
.thanhdieuhuong1 a.trangchu {
  	background-color: black;
  	color: DarkGoldenrod;
}
.benphaithanhdieuhuong1 {
	float: right;
	background-color: black;
	color:DarkGoldenrod;
}
.benphaithanhdieuhuong1 a{
	color:DarkGoldenrod;
}
@media screen and (max-width: 590px) {
.thanhdieuhuong1 a,div {
    float: none;
    width: 100%;
}
}
/* slide anh*/
.mySlides {display: none;}
img {vertical-align: middle;}
.slideshow {
	overflow: hidden;
  	max-width:1330px;
  	position: relative;
  	margin: auto;
  	background-position: center center;
}
.lui, .tien {
  	cursor: pointer;
  	position: absolute;
  	top: 50%;
 	width: auto;
  	padding: 20px;
  	margin-top: -22px;
  	color: black;
  	font-weight: bold;
  	font-size: 20px;
  	transition: 0.6s ease;
  	border-radius: 0 3px 3px 0;
  	user-select: none;
}
.tien {
  	right: 0;
  	border-radius: 3px 0 0 3px;
}
.lui {
  	left: 0;
  	border-radius: 3px 0 0 3px;
}
.lui:hover, .tien:hover {
  	background-color: rgba(0.8,0,0,0.5);
}
.text-block {
  position: absolute;
  bottom: 160px;
  left: 100px;
  border-radius: 15px;
  text-align: center; 
  background-color: black;
  color: white;
  padding: 12px 37px;
  
}
.text-block1 {
  position: absolute;
  bottom: 220px;
  left: 100px;
  border-radius: 15px;
  background-color: black;
  color: white;
  padding: 12px 40px;
  text-align: center;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.thanhdieuhuongsanpham {
	float:none;
	font-size:14px; 
	font-weight:bold;
	background:black;
	color:#fff;
	width:100%;
	height:30px;
	line-height:30px;
	text-align:center;
}
.sanpham {
	width:100%;
	height:auto;
	float:none;
	
}
.sanpham ul{
	width:100%;
	padding:20px;
	list-style:none;
}
.sanpham li{
	float:left;
	width:24.99%;
	height:auto;
	margin-bottom:30px;
	text-align:center;

}
.sanpham li a{
	text-decoration:none;
	color:black;
}
.clear{
	clear:both;
}
</style>
<body>
<?php
		include('admincp/modules/config.php');
		?>
	<!-tren dau trang->
	<div class="dautrang">
       <a href="http://localhost/demo/index.php?xem=trangchu"><img src="image/bnlogo.png" alt="Trulli" width="100%"></a>
  	</div>
 <!-thanh dieu huong 1->
	<div class="thanhdieuhuong1">
		<a href="index.php?xem=trangchu" class="trangchu"><b>Trang Chủ</b></a>
  		<a href="index.php?xem=contact"><b>Giới Thiệu</b></a>
  		<a href="#nhanhieu"><b>Sản Phẩm</b></a>
  		<div class="benphaithanhdieuhuong1">
  			<a href="index.php?xem=thanhtoan" >Đăng nhập</a>
  			<a href="index.php?xem=dangky">Đăng ký</a>
			<a href="index.php?xem=cart">Giỏ hàng <img src="image/14085970186309_icon-giao-hang.png" width="20" height="13" /></a>
		</div>
	</div>
	<br/>
	<!-slide san pham->
	<div class="slideshow">
	<div class="mySlides fade">
  			<img src="image/khaitruong.png" width="100%">
		</div>
		<div class="mySlides fade">
  			<img src="image/note10+.png">
  		  <div class="text-block">Xem Them</div>
        <div class="text-block1">Mua Ngay</div>
		</div>
		<div class="mySlides fade">
  			<img src="image/image.png">
  			<div class="text-block">Xem Them</div>
        <div class="text-block1">Mua Ngay</div>
		</div>
		
		<a class="lui" onclick="plusSlides(-1)">&#10094;</a>
		<a class="tien" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br/>
 <div class="thanhdieuhuong1" id="nhanhieu">
            <?php
          $sgl2="select * from hieu";
	$run_hieu=mysqli_query($conn,$sgl2);
           	?>
        	
            <?php
			while($dong=mysqli_fetch_array($run_hieu)){
			?>
            	<a href="index.php?xem=hieu&id=<?php echo $dong['hieu_id']?>"><?php echo $dong['tenhieu'] ?></a>
               
            <?php
			}
			?>
</div>
      <br/>  
        	<?php
			if(isset($_GET['xem'])){
				$tam=$_GET['xem'];
			}else{
				$tam='';
				}
				if($tam=='chitiet'){
				include('modules/right/chitiet_sanpham.php');
			}else if($tam=='loai'){
				include('modules/right/loai_sanpham.php');
			}else if($tam=='hieu'){
				include('modules/right/hieu_sanpham.php');
			}else if($tam=='cart'){
				include('modules/right/your_cart.php');
			}elseif($tam=='thanhtoan'){
				include('modules/right/thanhtoan.php');
			}elseif($tam=='contact'){
				include('modules/right/contact.php');
			}elseif($tam=='dangky'){
				include('modules/right/dangky.php');
			}elseif($tam=='camon'){
				include('modules/right/cam_on.php');
			}elseif($tam=='huongdan'){
				include('modules/right/huongdanmuahang.php');
			}
			?>
    <div class="clear"></div>
	
      <br/> 
	  <?php
	
	$sql="select * from products ";
	$sanpham=mysqli_query($conn,$sql);
?>
<div class="thanhdieuhuongsanpham" id="sanpham">Tất cả sản phẩm</div>
<br/>
<div class="sanpham">
<ul>

<?php
while($row=mysqli_fetch_array($sanpham)){
?>
             <li><a href="index.php?xem=chitiet&id=<?php echo $row['product_id'] ?>">
                <?php
					echo '<img src="admincp/modules/sanpham/uploads/'.$row['product_image'].'" width="200" height="200"/>';
					?>
                    <p><br/><?php echo $row['product_title'] ?></p>
					<br/>
                    <p>Giá:<?php echo $row['product_price'] ?></p>
                    <p style="color:#900;margin-top:5px;"><a href="index.php?xem=chitiet&id=<?php echo $row['product_id'] ?>" style="text-decoration:none;color:red">Chi tiết</p></a>
                 
                </a></li>
               
            <?php
}
			?>
            <div class="clear"></div>
           
            </ul>
			</div>
<br/>
    
  
  <!-funtion chay slide->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>  
</div>
</body>
</html>