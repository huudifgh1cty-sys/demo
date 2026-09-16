<style>
.thanhdieuhuongsanpham {
	margin:auto;
	font-size:14px; 
	font-weight:bold;
	background:green;
	color:#fff;
	width:30%;
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
@media only screen and (max-width: 700px) {
  .sanpham li {
    width: 49.99999%;
	height:auto;
	font-size: 13px;
    margin: 6px 0;
  }
}
.clear{
	clear:both;
}
</style>
<?php
	$sql="select * from products where product_brand='$_GET[id]' ";
	$hieu=mysqli_query($conn,$sql);
	$sql_tenhieu="select tenhieu from hieu where hieu_id='$_GET[id]'   ";
	$tenhieu=mysqli_query($conn,$sql_tenhieu);
	$dong_tenhieu=mysqli_fetch_array($tenhieu);
?>

<p class="thanhdieuhuongsanpham"><?php echo $dong_tenhieu['tenhieu'] ?></p>
<br/>
<div class="sanpham" id="sanpham">
<ul>
	<?php
	while($dong_hieu=mysqli_fetch_array($hieu)){
	?>
              <li><a href="index.php?xem=chitiet&id=<?php echo $dong_hieu['product_id'] ?>">
                	<?php
					echo '<img src="admincp/modules/sanpham/uploads/'.$dong_hieu['product_image'].'" width="220" height="220"/>';
					?>
                    <p><?php echo $dong_hieu['product_title'] ?></p>
                    <p>Giá: <?php echo $dong_hieu['product_price'] ?>  VNĐ</p>
                    <p style="color:#900;margin-top:5px;"><a href="index.php?xem=chitiet&id=<?php echo $dong_hieu['product_id'] ?>"  style="color:#09C;">Chi tiết</p></a>
                    
                </a></li>
              <?php
	}
			  ?>
  </ul>
		</div>
<br/>
