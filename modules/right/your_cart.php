<?php session_start();?>
<div class="content_right" style="width:100%;">
    <br/><p align="center" style="color:#063;font-size:18px;text-decoration:none;" >Xin chào: <?php
	
			if(isset($_SESSION['dangnhap'])){
			echo $_SESSION['dangnhap'];
		}
		
	?></p><br/>
	<style>
.thanhdieuhuongsanpham {
	margin:auto;
	font-size:14px; 
	font-weight:bold;
	background:green;
	color:#fff;
	width:40%;
	height:30px;
	line-height:30px;
	text-align:center;
}
</style>
	<div class="thanhdieuhuongsanpham" >Giỏ hàng của bạn</div><br/>
    <?php
	if(isset($_SESSION['dangnhap'])){
   	echo '<form action="logout.php" method="post">';
    	echo '<p align="center"><input type="submit" name="logout" value="Đăng xuất" /></p>';
    echo '</form>';
	
	}
 ?>
    <?php
		
	
		$current_url=base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		if(isset($_SESSION['product'])){
			$total=0;
			foreach($_SESSION['product'] as $cart_itm){
				
				echo '<img src="admincp/modules/sanpham/uploads/'.$cart_itm['image'].'" width="100" height="100" />';
				echo '<p style="font-weight:bold">Product_name:'.$cart_itm['name'].'</p>';
				echo '<br/><p style="float:right;margin-right:10px;"><a href="cart_update.php?removep='.$cart_itm['id'].'&return_url='.$current_url.'"><img src="image/button_cancel_256.png" width="20" height="20"></a></p>';
			    echo '<p style="color:blue">Số lượng đặt mua   '.$cart_itm['qty'].'</p>';
				echo '<br/><p style="color:green">Giá sản phẩm   '.$cart_itm['price'].'</p>';
				$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        		$total = ($total + $subtotal);
				
			}
			echo '<br/><strong style="margin:auto">Giá tổng: '.$total.'  VNĐ'.'</strong>';
			echo'<br/><br/><div align=right><button style="border-radius:15px;padding: 10px 28px;font-size: 16px;cursor: pointer"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Xóa tất cả</a></div><br/><br/>';
		
		if(!isset($_SESSION['dangnhap'])){
		echo '<p><a href="?xem=thanhtoan">Thanh toán</a></p>';}else{
		echo '<form action="thanhtoan.php" method="post">';
		echo '<div align=center><button style="border-radius:15px;padding: 10px 28px;font-size: 16px;cursor: pointer">Mua hàng</button></div>';
		echo '</form>';
		}
		
		}
	else{
				echo 'Giỏ hàng của bạn trống';
	}
	?>
   
    <?php
	
	echo '<div class="giohang">';

	if(isset($_SESSION['product'])){
		echo' ';
		$count=count($_SESSION['product']);
		echo '';
	}
	echo '</div>';
	?>
 <p align="center" style="font-size:20px;margin-top:50px;margin-bottom:50px;"><a href="index.php">Tiếp tục mua hàng</a></p>
</div>