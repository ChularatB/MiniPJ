<html>

<head>
<script src="https://kit.fontawesome.com/62a50d0c8f.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #F9f2e7;
        }

        fieldset {
            margin-top: 20px;
            padding: 1em;
            text-align: center;
            font-size: 50px;
            color: #7867bf;
        }

        button {
            border: none;
            font-size: 40px;
            color: white;
            padding: 30px 142px;
            text-align: center;
            cursor: pointer;
            background-color: #f7b1c3;
        }

        .b1 b2 {
            background-color: #f7b1c3;
            color: black;
            border: 2px solid #7867bf;
        }

        .b1:hover {
            background-color: #7867bf;
            color: white;
        }

        .b2:hover {
            background-color: red;
            color: white;
        }
        .logo{
            background-color: #f7b1c3;
            padding: 0.8em;
            
        }

        .logo img {
            width: 10%;
            margin-top: 1em;
            display: inline-block;

        }

        .logo h1 {
            display: inline-block;
            margin-left: 2%;
            font-size: 4em;
            color: #7867bf;
        }
    </style>
    <div class="logo"><img src="logo.png">
        <h1>Funtasy Dental Clinic</h1>
    </div>
    <script>

    </script>

</head>

<body>
    <div class="component">
        <form>
            <fieldset>
                <legend>Do you want to cancle?</legend>
                <button class="b1" onclick="delete1.php?`รหัสใบนัด`=<?=$row["รหัสใบนัด"]?>">YES</button>
                <button class="b2" onclick="cancle.php">NO</button>
            </fieldset>
        </form>
    </div>
</body>

</html>