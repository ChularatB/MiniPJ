<?php
$pdo = new PDO("mysql:host=localhost;dbname=funtasy;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
<html>

<head>
    <meta charset="UTF-8">
    <style>
    .head{
        text-align: center;
    }
    .head > h1{
        color: blue;
        font-size: 400%;
    }
    .head > h4{
        color: pink;
        font-size: 250%;
    }
    img{
        width: 10%;
    }
    .regis {
        margin:20px 100px;
        background-color: pink;
        border-radius: 20px;
        padding: 30px;
    }
    i{
        color: grey;
    }
    fieldset{
        border-radius: 20px;
        padding: 15px;
    }
   
    </style>
</head>
<body>
    <form action="insert.php" method="POST">
        <div class="head">
            <img src="logo.png">
            <h1>Funtasy</h1>
            <h4>Dental Clinic</h4>
        </div>
        <div class="regis">
            <fieldset>
                <legend>
                    <h1>Register</h1>
                </legend>
                <p>ชื่อ-สกุล</p>
                <input type="text" name="ชื่อ-สกุลคนไข้" pattern="^[ก-๙\s]+$" required autofocus>*<br>
                <p>รหัสบัตรประชาชน</p>
                <input type="text" name="รหัสบัตรประชาชนคนไข้" pattern="[0-9]{13}" maxlength="13" placeholder="xxxxxxxxxxxxx" required>*<br>
                <p>วันเดือนปีเกิด</p>
                <input type="date" name="วันเดือนปีเกิด" required>*
                <p>เบอร์โทรศัพท์</p>
                <input type="text" name="เบอร์โทรคนไข้" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" placeholder="xxx-xxx-xxxx" required>*
                <p>Email</p>
                <input type="text" name="Email" placeholder="@xxx.com" required>*
                <p>Username</p>
                <input type="text" name="Username" pattern="[A-Za-z0-9_]{8,10}" placeholder="xxxxxxxxxx" maxlength="10" required>*<br>
                <i>ตัวอักษรมีได้ตั้งแต่ 8-10 ตัว</i>
                <p>Password</p>
                <input type="password" name="Password" pattern="[A-Z]{1}[a-z0-9]{7}" maxlength="8" placeholder="Xxxxxxxx" required>*<br>
                <i>มีได้เพียง 8 ตัวเท่านั้นโดยตัวแรกสุดเป็นอักษรตัวพิมพ์ใหญ่</i><br><br>
                <input type="submit" value="สมัครสมาชิก">
            </fieldset>
        </div>

    </form>
</body>

</html>