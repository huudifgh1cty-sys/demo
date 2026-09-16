<?php
session_start();
	if(isset($_POST['login'])){
		$c_email=$_POST['email'];
		$c_pass=$_POST['password'];
		$sel_c="select * from customers where customer_pass='$c_pass' and customer_email='$c_email'";
		$run_login=mysqli_query($conn,$sel_c);
		$check_login=mysqli_num_rows($run_login);
		if($check_login==0){
			echo '<script>alert("password or email incorrect")</script>';
		}else{
			$_SESSION['dangnhap']=$c_email;
			 header('location: http://localhost/demo/index.php?xem=cart');
		}
		
	}	
?>
<style>
.form {
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 3;
    height: 350px;
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
 
    background: linear-gradient(to right, darkGoldenrod, yellow); 
}
</style>
<div align="center">
<form action="" method="post">
<div class="form">
                <h2>Đăng nhập</h2>
				<br/>
                <label style="margin-left: 0px;"><strong>Email</strong></label>
                <input type="text" name="email" id="email">    
                <label style="margin-left: 0px;"><strong>Mật khẩu</strong></label>
                <input type="password" name="password" id="password">
                <input id="submit" type="submit" name="login" value="Đăng nhập">
</div>
<h2 align="center"><a href="index.php?xem=dangky">Đăng ký một tài khoản mới</a></h2>
<br/>
</div>
</div>
