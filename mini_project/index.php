<?php
$pdo = new PDO("mysql:host=localhost;dbname=funtasy;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<?php
  $stmt = $pdo->prepare("SELECT * FROM คนไข้ ");
  $row = $stmt->fetch();
  ?>

<html>

<head>
    <meta charset='utf-8'>
    <style>
        body{
            text-align: center;
        }
        img{
            width: 15%;
        }
        .head > h1{
            color: #7867bf;
        }
        .head > h4{
            color: pink;
        }
        .comp{
            color: #7867bf;
        }
        .comp > input{
            border: 3px solid;
            color: #7867bf;
        }
        .button > input{
            background-color: pink;
            color: #7867bf;
            border: 0px;    
            padding: 10px 75px 10px; 
        } 
        button{
            background-color: pink;
            color: #7867bf;
            border: 0px; 
            padding: 10px 69px 10px; 
        }

    </style>
</head>

<body>
    <form action="check.php" method="POST">
        <div class="head">
            <img src="logo.png">
            <h1>Funtasy</h1>
            <h4>Dental Clinic</h4>
        </div>
        <div class="comp">
            <p>Username </p>
            <input type="text" name="Username" pattern="[A-Za-z0-9_]{8,10}" maxlength="10" required autofocus><br>
            <p>Password </p>
            <input type="password" name="Password" pattern="[A-Z]{1}[a-z0-9]{7}" maxlength="8" required><br><br>
            <div class="button">
                <input type="submit" value="Login"> 
                <p>Or</p>
            </div>
        </div>
    </form>
    <form>
        <button type="submit"  formaction="register.php">Register</button>
    </form>
</body>
</html>