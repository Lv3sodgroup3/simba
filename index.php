<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: black;
            background-size: 100%;
            background-image: url(images/wallpaperflare.com_wallpaper.jpg);
        }

        .all {
            align-items: center;
        }

        .links {
            width: 100%;
            height: 10%;
            background-color: black;
            position: absolute;
            box-shadow: 4px 8px 12px red;
        }

        a {
            text-decoration: none;
            color: red;
            position: relative;
            display: inline-flex;
            padding-left: 5%;
            padding-top: 2px;
        }

        a:hover {
            color: white;
            transition: 1s;
        }

        button:hover {
            box-shadow: 3px 8px 10px green;
        }

        span {
            color: white;
        }

        input {
            width: 100%;
            position: relative;
            border-radius: 12px;
            outline: none;
            border: 1px solid red;
        }

        ::placeholder {
            color: red;
        }

        button {
            width: 15vh;
            background-color: green;
            color: white;
            border: solid 1px green;
            outline: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .reg {
            width: 15vh;
            background-color: red;
            color: white;
            border: solid 1px red;
            outline: none;
            border-radius: 5px;
        }

        .reg:hover {
            box-shadow: 3px 8px 10px red;
        }

        .trend1, .trend2 {
            display: table;
            width: 39vh;
            height: 50vh;
            box-shadow: 5px 8px 13px red;
            position: absolute;
            border-radius: 12px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: gradientShadow 5s infinite;
        }

        .trend1 {
            top: 20%;
            left: 70%;
            background-image: url(images/jackal.jpg);
        }

        .trend2 {
            top: 18%;
            left: 50%;
            background-image: url(images/jackal.jpg);
        }

        .trend1:hover, .trend2:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 10px 20px rgba(235, 5, 5, 0.993);
        }

        .con {
            background-image: url(images/wallpaperflare.com_wallpaper.jpg);
        }

        @keyframes gradientShadow {
            0% {
                box-shadow: 0 0 10px #ff0000;
            }
            25% {
                box-shadow: 0 0 10px #00ff00;
            }
            50% {
                box-shadow: 0 0 10px #0000ff;
            }
            75% {
                box-shadow: 0 0 10px #ffff00;
            }
            100% {
                box-shadow: 0 0 10px #ff0000;
            }
        }

        .container {
            display: table;
            width: 100%;
            height: 75vh;
            box-shadow: 5px 8px 13px red;
            position: absolute;
            top: 15%;
            background-image: url(images/jackal-hero.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            backdrop-filter: blur(20px);
            opacity: 0.6;
        }

        .box, .box2, .box3, .box4, .old1, .old2, .old3, .old4 {
            display: table;
            width: 39vh;
            height: 55vh;
            box-shadow: 5px 8px 13px red;
            position: absolute;
            border-radius: 12px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .box:hover, .box2:hover, .box3:hover, .box4:hover, .old1:hover, .old2:hover, .old3:hover, .old4:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 10px 20px rgba(233, 5, 5, 0.863);
        }

        .box {
            top: 100%;
            left: 2%;
            background-image: url(images/jackal.jpg);
            animation: gradientShadow 5s infinite;
        }

        .box2 {
            top: 100%;
            left: 24%;
            background-image: url(images/dominique.jpg);
        }

        .box3 {
            top: 100%;
            left: 47%;
            background-image: url(images/paris.jpg);
        }

        .box4 {
            top: 100%;
            left: 70%;
            background-image: url(images/fake.jpg);
        }

        .old1 {
            top: 171%;
            left: 2%;
            background-image: url(images/dont.jpg);
        }

        .old2 {
            top: 171%;
            left: 24%;
            background-image: url(images/crow.jpg);
        }

        .old3 {
            top: 171%;
            left: 47%;
            background-image: url(images/time.jpg);
        }

        .old4 {
            top: 171%;
            left: 70%;
            background-image: url(images/killer.jpg);
        }

        p {
            color: white;
            position: absolute;
            height: 100px;
            width: 900px;
            top: 80%;
            left: 5%;
            min-width: 100px;
        }

        .fa-solid, .play1, .play2, .play3, .play4, .play5, .play6, .play7, .play8, .play9 {
            font-size: 10vh;
            position: absolute;
            top: 35%;
            left: 45%;
            cursor: pointer;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 1200px) {
            .trend1, .trend2, .box, .box2, .box3, .box4, .old1, .old2, .old3, .old4 {
                width: 30vh;
                height: 40vh;
            }
        }

        @media (max-width: 992px) {
            .trend1, .trend2, .box, .box2, .box3, .box4, .old1, .old2, .old3, .old4 {
                width: 25vh;
                height: 35vh;
            }

            .links a {
                padding-left: 2%;
            }

            .fa-solid, .play1, .play2, .play3, .play4, .play5, .play6, .play7, .play8, .play9 {
                font-size: 8vh;
            }
        }

        @media (max-width: 768px) {
            .trend1, .trend2, .box, .box2, .box3, .box4, .old1, .old2, .old3, .old4 {
                width: 20vh;
                height: 30vh;
            }

            .links {
                height: 15%;
            }

            .links a {
                padding-left: 1%;
            }

            .fa-solid, .play1, .play2, .play3, .play4, .play5, .play6, .play7, .play8, .play9 {
                font-size: 6vh;
            }
        }

        @media (max-width: 576px) {
            .trend1, .trend2, .box, .box2, .box3, .box4, .old1, .old2, .old3, .old4 {
                width: 15vh;
                height: 25vh;
            }

            .links {
                height: 20%;
            }

            .links a {
                padding-left: 0.5%;
            }

            .fa-solid, .play1, .play2, .play3, .play4, .play5, .play6, .play7, .play8, .play9 {
                font-size: 4vh;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="all">
        <div class="links">
            <a href="#"><span>SA</span>NTA <span>M</span>ovies</a>
            <a href="#">Home</a>
            <a href="action.php">Action</a>
            <a href="romantic.php">Romantic</a>
            <a href="#">Series</a>
            <a href="horror.php">Horror</a>
            <a href="#"><input type="text" placeholder="Search Movies"></a>
            <a href="login.php"><button>Login</button></a>
            <button><a href="logout.php">Logout</a></button>
            <a href="register.php"><button class="reg">Register</button></a>
        </div>
        <div class="container">
        </div>
        <div class="con">
            <div class="trend1">
                <i class="fa-solid fa-play" style="color: #ff3d3d;"></i>
            </div>
            <div class="trend2">
                <div class="play1">
                    <i class="fa-solid fa-play" style="color: #ff3d3d;"></i>
                </div>
            </div>
            <div class="product">
                <div class="box">
                    <div class="play2">
                        <a href="banks.php"><i class="fa-solid fa-play" style="color: #ff3d3d;"></i></a>
                    </div>
                </div>
                <div class="box2">
                    <div class="play3">
                        <i class="fa-solid fa-play" style="color: #ff3d3d;"></i>
                    </div>
                </div>
                <div class="box3">
                    <div class="play4">
                        <i class="fa-solid fa-play" style="color: #ff3d3d;"></i>
                    </div>
                </div>
                <div class="box4">
                    <div class="play5">
                        <i class="fa-solid fa-play" style="color: #ff3d3d;"></i>
                    </div>
                </div>
                <div class="old1">
                    <div class="play6">
                        <i class="fa-solid fa-play" style="color: #ff3d3d;"></i>
                    </div>
                </div>
                <div class="old2">
                    <div class="play7">
                        <i class="fa-solid fa-play" style="color: #ff3d3d;"></i>
                    </div>
                </div>
                <div class="old3">
                    <div class="play8">
                        <i class="fa-solid fa-play" style="color: #ff3d3d;"></i>
                    </div>
                </div>
                <div class="old4">
                    <div class="play9">
                        <i class="fa-solid fa-play" style="color: #ff3d3d;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:login.php");
}
?>