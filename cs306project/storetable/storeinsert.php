<!DOCTYPE html>
<html>
<head>
    <title>STORE INSERTION PAGE</title>

    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .button2 {
            background-color: #4ca3af;
            border: 1px solid #fff;
            border-radius: 999px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        } /* Blue */

        .button2:hover{
            background-color: #006f84;
            border: 1px solid #fff;
            transition: 0.5s;
        }

        div {
            border-radius: 5px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../imgs/landingpage.jpg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 20px;
        }
        body {
            color: #f2f2f2;
            font-size: 18px;
        }
    </style>


</head>
<body>


<div align="center">
    <b>Welcome to our Store Insertion Page</b>
    <br>
    <br>
    Here is the our messages in our database:
    <br>
    <br>

    <?php
    include "storemessage.php";
    ?>

    <form action="sendstoremsg.php" method="POST" >
        <input type="text" id="sname" name="sname" placeholder="Type Store Name"><br>
        <input type="text" id="category" name="category" placeholder="Type Store Category"><br>
        <button class="button2">INSERT</button>
    </form>
</div>
</body>
</html>