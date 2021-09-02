<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <div class="container">
        <ul id="menu">
                <a class="menu-button icon-plus" href="#menu" title="Show navigation"></a>
                <a class="menu-button icon-minus" href="#0" title="Hide navigation"></a>
                <li class="menu-item">
                    <a href="https://www.facebook.com/jahangir.sharifov.5">
                        <span class="fab fa-facebook-f"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://www.instagram.com/jahangirsharifov">
                        <span class="fab fa-instagram"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://t.me/jahangirsharifov">
                        <span class="fab fa-telegram"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://twitter.com/jahansharifov">
                        <span class="fab fa-twitter"></span>
                    </a>
                </li>
            </ul>
    </div>
    <div class="content">
        Jahangir Sharifov
    </div>
    <style>
        body{
        font-family: "Dosis",sans-serif;
        text-align: center;
        }

        #menu {
            width: 150px;
            height: 150px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -75px 0 0 -75px;
            list-style: none;
            font-size: 200%;
        }

        .menu-button {
            opacity: 0;
            z-index: -1;
        }

        .menu-button {
            width: 150px;
            height: 150px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -75px 0 0 -75px;
            border-radius: 50%;
            background:url('https://www.flowcode.com/_next/image?url=https%3A%2F%2Fcdn.flow.page%2Fimages%2F382f93a3-a0a7-415b-9442-a85a6dd6ae0e-profile-picture%3Fm%3D1601959029&w=256&q=75');
            background-size: 100%;
            overflow: hidden;
            text-decoration: none;
        }

        #menu:not(:target)>a:first-of-type,
        #menu:target>a:last-of-type {
            opacity: 1;
            z-index: 1;
        }

        #menu:not(:target)>.icon-plus:before,
        #menu:target>.icon-minus:before {
            opacity: 1;
        }

        .menu-item {
            width: 70px;
            height: 70px;
            position: absolute;
            left: 55%;
            line-height: 5px;
            top: 50%;
            margin: -50px 0 0 -50px;
            border-radius: 50%;
            background-color: #424242;
            transform: translate(0px, 0px);
            transition: transform 500ms;
            z-index: -2;
            transition: .5s;
        }

        .menu-item:hover{
        opacity: 0.5;
        box-shadow: 0 5px 10px black; 
        }


        .menu-item a {
            color: #fff;
            position: relative;
            top: 30%;
            left: 0;
            text-decoration: none;
        }

        #menu:target>.menu-item:nth-child(6) {
            transform: rotate(60deg) translateY(-150px) rotate(300deg);
            transition-delay: 0s;
        }

        #menu:target>.menu-item:nth-child(5) {
            transform: rotate(20deg) translateY(-155px) rotate(-20deg);
            transition-delay: 0.1s;
        }

        #menu:target>.menu-item:nth-child(3) {
            transform: rotate(-20deg) translateY(-155px) rotate(20deg);
            transition-delay: 0.2s;
        }

        #menu:target>.menu-item:nth-child(4) {
            transform: rotate(-60deg) translateY(-150px) rotate(60deg);
            transition-delay: 0.3s;
        }

        .content{
        position: absolute;
        margin: -10px 0 0 -30px;
        top:65%;
        left:49%;
        font-size: 20px;
        }
    </style>
</body>
</html>