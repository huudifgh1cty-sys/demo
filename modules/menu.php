<style>
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
</style>
<div class="thanhdieuhuong1">	
    <a href="index.php?xem=trangchu" class="trangchu">Trang chủ</a>
    <a href="#sanpham">Sản phẩm</a>
	<a href="index.php?xem=gioithieu">Giới thiệu</a>
	<div class="benphaithanhdieuhuong1">
		<a href="index.php?xem=thanhtoan">Đăng nhập</a>
		<a href="index.php?xem=dangky">Đăng ký</a>
		<a href="index.php?xem=contact">Liên hệ</a>         
		<a href="index.php?xem=cart">Giỏ hàng <img src="image/14085970186309_icon-giao-hang.png" width="20" height="13" /></a>
	</div>
</div>
