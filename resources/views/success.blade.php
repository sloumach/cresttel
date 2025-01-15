<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cresttel</title>
    <link rel="icon" href="img/icon/Cresttel-icon.png" type="image/x-icon">
    <!-- or for PNG files -->
    <link rel="icon" href="img/icon/Cresttel-icon.png" type="image/png">
</head>
<body>
    <div class="message-box">
        <h1 style="text-align: center;font-size: 300%;color: white;">Thank You!😉</h1>
        <p style="text-align: center;font-size: xx-large;color: antiquewhite;">Your message has been sent successfully✅. We will get back to you shortly.🚀</p>
    </div>
    <div class="list">
        <div class="item">
            <a href="index.html">
                <img src="img/homepge.png" alt="">
            </a>
            <div class="content">
                <div style="font-weight: bold; color: black;font-size: 200%;">Homepage</div>
            </div>
        </div>
    
        <div class="item">
            <a href="service.html">
                <img src="img/service-png.png" alt="">
            </a>
            <div class="content">
                <div style="font-weight: bold; color: black;font-size: 200%;">Services</div>
            </div>
        </div>
    
        <div class="item">
            <a href="project.blade.php">
                <img src="img/project-development-3d-icon-png.png" alt="">
            </a>
            <div class="content">
                <div style="font-weight: bold; color: black;font-size: 200%;">Projects</div>
            </div>
        </div>
    
        <div class="item">
            <a href="{{ route('blogs') }}">
                <img src="img/blog-3d.png" alt="">
            </a>
            <div class="content">
                <div style="font-weight: bold; color: black;font-size: 200%;">Blogs</div>
            </div>
        </div>
    
        <div class="item">
            <a href="about.html">
                <img src="img/about.png" alt="">
            </a>
            <div class="content">
                <div style="font-weight: bold; color: black;font-size: 200%;">About</div>
            </div>
        </div>
    </div>
    <div class="message-box">
        <h1 style="text-align: center;font-size: 300%;color: white;">Enjoy Your Day 🤗 </h1>
        <p></p>
    </div>
    <style>
    body{
        background-color: #395fc7;
        margin: 0;
    }
    .list{
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }
    .item{
        width: 250px;
        height:250px;
        background-color: bisque;
        border-radius: 20px;
        margin:20px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    .item img{
        width:80%;
        transition: 0.5s;
    }
    .item .content{
        position: absolute;
        bottom:20px;
        display: flex;
        justify-content: center;
        left:0;
        width:100%;
    }
    .item .content div{
       flex-grow: 1;
       display: flex;
       justify-content: center;
       color:#fff;
    }
    .item:hover img{
        transform: translate(0,-40px) rotate(20deg) scale(1.4);
    }</style>
</body>
</html>