<?php
$pdo = new PDO("mysql:host=localhost;dbname=funtasy;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>


<html>

<head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/62a50d0c8f.js" crossorigin="anonymous">
        
    </script>
    
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #F9f2e7;
            font-family: 'Mitr', sans-serif;
        }

        .nav ul {
            list-style: none;
            background-color: #7867bf;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .nav li {
            font-size: 1.2em;
            line-height: 40px;
            text-align: left;
        }

        .nav a {
            text-decoration: none;
            color: #f9f2e7;
            display: block;
            padding-left: 15px;
            border-bottom: 1px solid #888;
            transition: .3s;
        }

        .nav a:hover {
            background-color: #47467b;
        }

        .nav li li {
            font-size: .8em;
        }

        /*หน้าจอที่ใหญ่กว่า*/
        @media screen and (min-width: 650px) {
            .nav li {
                width: 130px;
                border-bottom: none;
                height: auto;
                line-height: 50px;
                font-size: 1.4em;
                display: inline-block;
                margin-right: -4px;

            }

            .nav a {
                border-bottom: none;
            }

            .nav>ul>li {
                text-align: center;
            }

            .nav>ul>li>a {
                padding-left: 0;
            }

            .nav li ul {
                position: absolute;
                display: none;
                width: inherit;
            }

            .nav li:hover ul {
                display: block;
            }

            .nav li ul li {
                display: block;
            }

            /* .nav li{
                    text-align: center;
                } */

        }

        .mySlides {
            display: none;
        }

        img {
            display: block;
            margin-right: auto;
            margin-left: auto;
        }
        .content{
            margin: 20px;
        }
        .logo{
            background-color: #fad26d;
            padding: 0.8em;
            
        }
        .logo img{
            width: 10%;
            display: inline-block;
            
        }
        .logo h1{
            display: inline-block;
            margin-left: 2%;
            font-size: 4em;
            color: #7867bf;
        }
        

    </style>
</head>

<body>
    <header>
        <div class="logo"><img src="logo.png" >
            <h1>Funtasy Dental Clinic</h1>
        </div>

        <div class="nav">
        
            <ul>
            
                <li class="home"><a href="#">HOME</a></li>
                <li class="booking"><a href="#">BOOKING</a></li>
                <li class="postpone"><a href="#">POSTPONE</a></li>
                <li class="cancle"><a href="#">CANCLE</a></li>
                <li class="user"><a href="#"><i class="fa-regular fa-user"></i></a>
                    <ul>
                        <li><a href="#">ข้อมูลส่วนตัว</a></li>
                        <li><a href="#">ประวัติการเข้ารับการรักษา</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </header>

    <table align="center">
        <td>
            <div class="content" style="max-width:1000px">
                <img class="mySlides" src="1.jpg" style="width:100%">
                <img class="mySlides" src="2.jpg" style="width:100%">
                <img class="mySlides" src="3.jpg" style="width:100%">

            </div>
        </td>
    </table>

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 5 seconds
        }
    </script>

</body>

</html>