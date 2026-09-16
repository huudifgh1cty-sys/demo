<?php
	if(isset($_POST['register'])){
		$c_name=$_POST['c_name'];
		$c_email=$_POST['c_email'];
		$c_pass=$_POST['c_pass'];
		$c_contact=$_POST['c_contact'];
		$c_address=$_POST['c_address'];
		$insert_c="insert into customers(customer_name,customer_email,customer_pass,customer_contact,customer_address) values('$c_name','$c_email','$c_pass','$c_contact','$c_address')";
		$run_c=mysqli_query($conn,$insert_c);
		if($run_c){
			echo '<script>alert("insert thanh cong")</script>';
			
		}
	}
?>
<style>
.form {
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 3;
    height:600px;
    width: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 0px 14px 0px grey;
    background-color: white;
}
h2 {
    margin-top: 50px;
    margin-bottom: 30px;
}
i.fab.fa-app-store-ios {
    display: block;
    margin-bottom: 50px;
    font-size: 28px;
}
 
label {
    margin-left: -126px;
    display: block;
    font-weight: lighter;
 
}
input{
    display: block;
    border-bottom: 2px solid black;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
	border-radius: 15px;
}
textarea{
	width:50%;
	display: block;
    border-bottom: 2px solid black;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
	border-radius: 15px;
}
input[type="text"] {
    padding: 5px;
    width: 50%;
}
input[type="password"] {
    padding: 5px;
    width: 50%;
}
input#submit {
    padding: 7px;
    width: 20%;
    border-radius: 10px;
    border-color: black;
    position: absolute;
    bottom: 10px;
    cursor: pointer;
    background: white;
}
input#submit:hover{
 
    background: linear-gradient(to right, #fc00ff, #00dbde);
}
@media screen and (max-width: 700px) {
  .form{   
    flex-direction: column;
    width: 300px;
  }
}
@media screen and (max-width: 700px) {
  input#submit {   
    width:80px;
    height: 35px;
  }
}
</style>
<br/>
<div align="center">
<form action="index.php?xem=dangky" method="post" enctype="multipart/form-data">
<div class="form">
                <h2>Đăng kí tài khoản</h2>
				<label style="margin-left: 0px;"><strong>Tên đăng nhập</strong></label>
                <input type="text" name="c_name">
				<label style="margin-left: 0px;"><strong>Mật khẩu</strong></label>
                <input type="password" name="c_pass">
				<label style="margin-left: 0px;"><strong>Email</strong></label>
                <input type="text" name="c_email">
				<label style="margin-left: 0px;"><strong>Số điện thoại</strong></label>
                <input type="text" name="c_contact">
				<label style="margin-left: 0px;"><strong>Địa chỉ</strong></label>
				<textarea style="text" name="c_address" rows="10" cols="20"></textarea>
                <input id="submit" type="submit" name="register" value="Đăng ký">
</div>
<h2><a href="index.php?xem=thanhtoan">Quay lại đăng nhập</a></h2>
<br/>