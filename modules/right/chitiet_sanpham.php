<style>
.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}
.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}
</style>
<?php
	$sql="select * from products where product_id=$_GET[id]";
	$chitiet=mysqli_query($conn,$sql);
	$row_chitiet=mysqli_fetch_array($chitiet); 
	
?>

	
   <?php
   		echo 
		'<form action="cart_update.php" method="post" enctype="multipart/form-data">';
		echo '<div align=center style="width:100%; padding-top:10px;">';
   		$current_url=base64_encode($url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		$id=$_GET['id'];
					echo '<img src="admincp/modules/sanpham/uploads/'.$row_chitiet['product_image'].'" width="200" height="200"/>';
		echo '<input type="hidden" name="product_id" value="'.$id.'"/>';
		echo '<input type="hidden" name="type" value="add"/>';
		echo '<input type="hidden" name="return_url" value="'.$current_url.'"/>';			
  		 echo '<p style="margin-bottom:10px;font-size:20px"><br/>'.$row_chitiet['product_title'].'</p>';
    echo '<br/><p>Giá:'.$row_chitiet['product_price'].'</p>';
    echo'<br/><p style="font-weight:bold">Mô tả: '.$row_chitiet['product_desc'].'</p>';
   echo' <br/><p>Số lượng <input type="text" name="qty" value="1" size="3" /></p>';
	echo '<input type="submit" name="add" value="Đặt Hàng" style="margin-top:20px;float:none" />';
   	
echo '</div>';	
echo '</form>';
echo '<br/><div align=center><button style="border-radius:15px;padding: 10px 28px;font-size: 16px;cursor: pointer"><a href="http://localhost/demo/index.php" style="color:green">Quay lại</a></button></div><br/>';
?>
 <?php
	if(isset($_SESSION['product'])){
		$count=count($_SESSION['product']);
		echo $count;
	}
	?>