<?php
    $pdo = new PDO("mysql:host=localhost;dbname=funtasy;chaset=utf8","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    session_start();
    $stmt = $pdo->prepare("SELECT * FROM คนไข้ WHERE Username = ? AND Password = ?");
    $stmt->bindParam(1,$_POST["Username"]);
    $stmt->bindParam(2,$_POST["Password"]);
    $stmt->execute();
    $row = $stmt->fetch();

    if(!empty($row)){
        session_regenerate_id();
        $_SESSION["Username"] = $row["Username"];
        header("location: loginsuccess.php?Username=".$_POST["Username"]);
    }
    else{
        echo "ไม่มีสมาชิกนี้!!";
        echo "<a href='index.php'>เข้าสู่ระบบอีกครั้ง</a>";
    }
?>
       