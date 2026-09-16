<style>
.thanhdieuhuongsanpham {
	float:none;
	font-size:14px; 
	font-weight:bold;
	background:green;
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
@media only screen and (max-width: 700px) {
  .sanpham li {
    width: 49.99999%;
	height:auto;
    margin: 6px 0;
  }
}
.clear{
	clear:both;
}
</style>
<?php
	$sql="select * from products ";
	$sanpham=mysqli_query($conn,$sql);
?>
<div class="thanhdieuhuongsanpham" >Tất cả sản phẩm</div>
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
                    <p>Giá: <?php echo $row['product_price'] ?> VNĐ</p>
                    <p style="color:#900;margin-top:5px;"><a href="index.php?xem=chitiet&id=<?php echo $row['product_id'] ?>" style="text-decoration:none;color:red">Chi tiết</p></a>
                 
                </a></li>
               
            <?php
}
			?>
            <div class="clear"></div>
           
            </ul>
			</div>
<br/>
          