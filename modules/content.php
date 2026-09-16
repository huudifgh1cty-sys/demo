<style>

.thanhdieuhuong1 {
	position: relative;
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
  	padding: 15px 20px;
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
<br/>
<div class="thanhdieuhuong1" id="sanpham">
        	<?php
			$sgl2="select * from hieu";
			$run_hieu=mysqli_query($conn,$sgl2);
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
			}else if($tam=='trangchu'){
				include('modules/right/product.php');
			}else if($tam=='gioithieu'){
				include('modules/right/gioithieu.php');
			}elseif($tam=='thanhtoan'){
				include('modules/right/thanhtoan.php');
			}elseif($tam=='contact'){
				include('modules/right/contact.php');
			}elseif($tam=='dangky'){
				include('modules/right/dangky.php');
			}elseif($tam=='camon'){
				include('modules/right/cam_on.php');
			
			}else
				include('modules/right/product.php');
				
			?>
    <div class="clear"></div>