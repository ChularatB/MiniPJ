<?php
    $pdo = new PDO("mysql:host=localhost;dbname=funtasy;chaset=utf8","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php 
       $stmt = $pdo->prepare("INSERT INTO คนไข้ VALUES (?,?,?,?,?,?,?)");
	   $stmt->bindParam(1, $_POST["Username"]);
	   $stmt->bindParam(2, $_POST["Password"]);
	   $stmt->bindParam(3, $_POST["รหัสบัตรประชาชนคนไข้"]);
	   $stmt->bindParam(4, $_POST["ชื่อ-สกุลคนไข้"]);
	   $stmt->bindParam(5, $_POST["วันเดือนปีเกิด"]);
	   $stmt->bindParam(6, $_POST["เบอร์โทรคนไข้"]);
	   $stmt->bindParam(7, $_POST["Email"]);
       $stmt->execute();
    ?>
        <h1>สมัครสมาชิกสำเร็จ!!</h1>
		<form>
        	<button type="submit"  formaction="index.php">go to Login</button>
    	</form>
    </body>
</html>