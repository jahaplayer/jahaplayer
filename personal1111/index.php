<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css   ">
    <title>Jahangir Sharifov</title>
</head>
<body>
    <progress value="0" max="100" style="width: 100%;background:#fff;height: 17.5px;" id="scc"></progress>
    <header>
        <div id="head-right">
            <span><a href="#home" onclick="home()">Home</a></span><span><a href="#about" onclick="about()">About</a></span><span><a href="#portfolio" onclick="portfolio()">Portfolio</a></span><span><a href="#blog" onclick="blog()">Blog</a></span><span><a href="#contact" onclick="contact()">Contact</a></span><span><a href="#subscribe" onclick="subscribe()">Subscribe</a></span>
            <div class="fa fa-bars" id="bars"></div>
        </div>
        <div id="head-left">
            Logo
        </div>
    </header>

    <section id="home">
        <div id="sect" class="row">
            <div class="text-center col-md-12">
                <div id="wel">Welcome</div>
                <div id="cxq">I'm Web Developer</div>
                <div class="desc">I'm a Web Developer with extensive exprience for over 3 years.My experrtise is</div>
                <div class="desc">to create Websites back-end, front-end, design and many more...</div>
                <div id="icons">
                    <a href="https:///www.facebook.com"><span class="fab fa-facebook-f"></span></a>
                    <a href="https://www.twitter.com"><span class="fab fa-twitter"></span></a>
                    <a href="https://www.linkedin.com"><span class="fab fa-linkedin"></span></a>
                    <a href="https://www.instagram.com/jahangirsharifov"><span class="fab fa-instagram"></span></a>
                    <a href="https://t.me/jahangirsharifov"><span class="fab fa-telegram"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--<div style="bottom:0;text-align: center;">
        <button id="swdown" class="fa fa-chevron-down"></button><br><span style="color:#e0e0e0;font-family: Arial, Helvetica, sans-serif;font-size: 16px;font-weight: lighter;">Swipe Down</span>
    </div>-->
    <section id="about">
        <div id="sect1" class="row">
            <div class="col-md-12">
                <div id="wel1">about me</div>
                <div id="cxq1">I'm Web Developer</div>
                <div class="desc1">I'm a Web Developer with extensive exprience for over 3 years.My experrtise is</div>
                <div class="desc1">to create Websites back-end, front-end, design and many more...</div>
                <div id="icons1">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, magnam, ipsa dignissimos quasi quidem enim porro asperiores at quaerat harum, odio fugiat illum consequuntur perspiciatis reiciendis voluptatibus corrupti pariatur voluptatem.
                </div>
                <div id="icons1">
                    <a href="https:///www.facebook.com"><span class="fab fa-facebook-f"></span></a>
                    <a href="https://www.twitter.com"><span class="fab fa-twitter"></span></a>
                    <a href="https://www.linkedin.com"><span class="fab fa-linkedin"></span></a>
                    <a href="https://www.instagram.com/jahangirsharifov"><span class="fab fa-instagram"></span></a>
                    <a href="https://t.me/jahangirsharifov"><span class="fab fa-telegram"></span></a>
                </div>
                <div class="container">
                    <div class="carousel">
                      <div class="carousel__face"><span>This is something</span></div>
                      <div class="carousel__face"><span>Very special</span></div>
                      <div class="carousel__face"><span>Special is the key</span></div>
                      <div class="carousel__face"><span>For you</span></div>
                      <div class="carousel__face"><span>Just give it</span></div>
                      <div class="carousel__face"><span>A try</span></div>
                      <div class="carousel__face"><span>And see</span></div>
                      <div class="carousel__face"><span>How IT Works</span></div>
                      <div class="carousel__face"><span>Woow</span></div>
                    </div>
                  </div>
            </div>
        </div>
        <style>
            body::-webkit-scrollbar {
            width: 6px;
            }
            body::-webkit-scrollbar-track {
            background: var(--scrollbarBG);
            }
            body::-webkit-scrollbar-thumb {
            background-color: orange ;
            border-radius: 0px;
            }
            .container {
            position: relative;
            width: 320px;
            margin: 100px auto 0 auto;
            perspective: 1000px;
            }

            .carousel {
            position: absolute;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d; 
            animation: rotate360 60s infinite forwards linear;
            }
            .carousel__face { 
            position: absolute;
            width: 300px;
            height: 187px;
            top: 20px;
            left: 10px;
            right: 10px;
            background-size: cover;
            box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);
            display: flex;
            }

            .carousel__face span {
            margin: auto;
            font-size: 2rem;
            }


            .carousel__face:nth-child(1) {
            background-image: url("img/sanf.jpeg");
            transform: rotateY(  0deg) translateZ(430px); }
            .carousel__face:nth-child(2) { 
            background-image: url("img/where.jpeg");
                transform: rotateY( 40deg) translateZ(430px); }
            .carousel__face:nth-child(3) {
            background-image: url("img/wall.jpeg");
            transform: rotateY( 80deg) translateZ(430px); }
            .carousel__face:nth-child(4) {
            background-image: url("img/cafe.jpeg");
            transform: rotateY(120deg) translateZ(430px); }
            .carousel__face:nth-child(5) { 
            background-image: url("img/home.jpg");
            transform: rotateY(160deg) translateZ(430px); }
            .carousel__face:nth-child(6) { 
            background-image: url("img/montain.jpg");
            transform: rotateY(200deg) translateZ(430px); }
            .carousel__face:nth-child(7) { 
            background-image: url("img/g.jpeg");
            transform: rotateY(240deg) translateZ(430px); }
            .carousel__face:nth-child(8) {
            background-image: url("img/IT.jpg");
            transform: rotateY(280deg) translateZ(430px); }
            .carousel__face:nth-child(9) {
            background-image: url("img/mon.jpeg");
            transform: rotateY(320deg) translateZ(430px); }



            @keyframes rotate360 {
            from {
                transform: rotateY(0deg);
            }
            to {
                transform: rotateY(-360deg);
            }
            }

        </style>
    </section>
    <section id="portfolio">
        <div id="sect" class="row">
            <div class="text-center col-md-12">
                <div id="wel">NONE</div>
                <div id="icons">
                    <a href="https:///www.facebook.com"><span class="fab fa-facebook-f"></span></a>
                    <a href="https://www.twitter.com"><span class="fab fa-twitter"></span></a>
                    <a href="https://www.linkedin.com"><span class="fab fa-linkedin"></span></a>
                    <a href="https://www.instagram.com/jahangirsharifov"><span class="fab fa-instagram"></span></a>
                    <a href="https://t.me/jahangirsharifov"><span class="fab fa-telegram"></span></a>
                </div>
            </div>
        </div>
    </section>
    <section id="blog">
        <div id="sect" class="row">
            <div class="text-center col-md-12">
                <div id="wel">NONE</div>
                <div id="icons">
                    <a href="https:///www.facebook.com"><span class="fab fa-facebook-f"></span></a>
                    <a href="https://www.twitter.com"><span class="fab fa-twitter"></span></a>
                    <a href="https://www.linkedin.com"><span class="fab fa-linkedin"></span></a>
                    <a href="https://www.instagram.com/jahangirsharifov"><span class="fab fa-instagram"></span></a>
                    <a href="https://t.me/jahangirsharifov"><span class="fab fa-telegram"></span></a>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div id="sect" class="row">
            <div class="text-center col-md-12">
                <div id="wel">NONE</div>
                <div id="icons">
                    <a href="https:///www.facebook.com"><span class="fab fa-facebook-f"></span></a>
                    <a href="https://www.twitter.com"><span class="fab fa-twitter"></span></a>
                    <a href="https://www.linkedin.com"><span class="fab fa-linkedin"></span></a>
                    <a href="https://www.instagram.com/jahangirsharifov"><span class="fab fa-instagram"></span></a>
                    <a href="https://t.me/jahangirsharifov"><span class="fab fa-telegram"></span></a>
                </div>
            </div>
        </div>
    </section>
    <section id="subscribe">
        <div id="sect" class="row">
            <div class="text-center col-md-12">
                <div id="wel">
                    <form method="post" action="index.php" autocomplete="off" onsubmit="return email.value!=''">
                        <div>
                            <div><input type="email" id="subs" name="email" placeholder="Email"></div>
                            <?php if(isset($_GET["error"])==1){echo "<span style='font-size:16px;color:#ccc'>Account is already subscribed</span>";} ?>
                            <div><button type="submit" id="btn-subs" name="send">Subscribe</button></div>
                        </div>
                    </form>
                    <?php
                        if(isset($_POST["send"])){
                            $conn = new mysqli("localhost","admin","4221349n","asd");
                            $email = $_POST["email"];
                            $sql = "INSERT INTO `subscribers` VALUES ('NULL', '$email')";
                            $sq1 = "SELECT * FROM `subscribers`";
                            $result = $conn->query($sq1);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                  if($email == $row["email"]){
                                    die(
                                        print("<script>location.href = 'index.php?error=1'</script>")
                                    );
                                  }
                                }
                              } else {
                                echo "0 results";
                              }

                            if ($conn->query($sql) === TRUE) {
                                
                              } else {
                                
                              }
                        }
                    ?>
                    <div>
                        <div class="arrow">
                            <div class="arrow__body" style="font-size:16px"></div>
                            <?php 
                                    $conn = new mysqli("localhost","admin","4221349n","asd");
                                    $sq1 = "SELECT * FROM `subscribers`";
                                    $result = $conn->query($sq1);
                                    echo "<div style='padding-right:80%;'>".$result->num_rows."<span style='font-size:10px'>subscribers</span></div>";
                                ?>
                          </div>
                    </div>
                </div>
                <div id="icons">
                    <a href="https:///www.facebook.com"><span class="fab fa-facebook-f"></span></a>
                    <a href="https://www.twitter.com"><span class="fab fa-twitter"></span></a>
                    <a href="https://www.linkedin.com"><span class="fab fa-linkedin"></span></a>
                    <a href="https://www.instagram.com/jahangirsharifov"><span class="fab fa-instagram"></span></a>
                    <a href="https://t.me/jahangirsharifov"><span class="fab fa-telegram"></span></a>
                </div>
            </div>
        </div>
    </section>
    <script>
        function contact(){
            document.getElementById("scc").value = 80
            document.getElementById("about").style = 'display:none'
            document.getElementById("home").style = 'display:none;'
            document.getElementById("portfolio").style = 'display:none;'
            document.getElementById("blog").style = 'display:none;'
            document.getElementById("contact").style = 'display:block;'
            document.getElementById("subscribe").style = 'display:none;'
        }
        function blog(){
            document.getElementById("scc").value = 60
            document.getElementById("about").style = 'display:none'
            document.getElementById("home").style = 'display:none;'
            document.getElementById("portfolio").style = 'display:none;'
            document.getElementById("blog").style = 'display:block;'
            document.getElementById("contact").style = 'display:none;'
            document.getElementById("subscribe").style = 'display:none;'
        }
        function portfolio(){
            document.getElementById("scc").value = 40
            document.getElementById("about").style = 'display:none'
            document.getElementById("home").style = 'display:none;'
            document.getElementById("portfolio").style = 'display:block;'
            document.getElementById("blog").style = 'display:none;'
            document.getElementById("subscribe").style = 'display:none;'
            document.getElementById("contact").style = 'display:none;'
        }
        function home(){
            document.getElementById("scc").value = 0
            document.getElementById("about").style = 'display:none'
            document.getElementById("home").style = 'display:block;'
            document.getElementById("portfolio").style = 'display:none;'
            document.getElementById("blog").style = 'display:none;'
            document.getElementById("subscribe").style = 'display:none;'
            document.getElementById("contact").style = 'display:none;'
        }
        function about(){
            document.getElementById("scc").value = 20
            document.getElementById("about").style = 'display:block;'
            document.getElementById("home").style = 'display:none;'
            document.getElementById("portfolio").style = 'display:none;'
            document.getElementById("blog").style = 'display:none;'
            document.getElementById("subscribe").style = 'display:none;'
            document.getElementById("contact").style = 'display:none;'
        }
        function subscribe(){
            document.getElementById("scc").value = 100
            document.getElementById("about").style = 'display:none;'
            document.getElementById("home").style = 'display:none;'
            document.getElementById("portfolio").style = 'display:none;'
            document.getElementById("blog").style = 'display:none;'
            document.getElementById("contact").style = 'display:none;'
            document.getElementById("subscribe").style = 'display:block;'
        }
    </script>
    <style>
        .arrow {
        position: fixed;
        right: 0;
        width: calc(20% - 200px);
        height: 10%;
        /* uncomment to see the arrow's rectangle bg*/
        /*   background: white;  */
        }

        .arrow__body {
        width: 100%;
        height: 95%;
        margin-left: 11px;
        border-width: 5px 0 0 5px;
        border-style: dashed;
        border-color: var(--highlight-color);
        border-top-left-radius: 100%;
        }

        .arrow__body::after {
        content: '';
        font-size:10px;
        position: absolute;
        bottom: 0;
        left: 0;
        border-width: 20px 15px 0;
        border-style: solid;
        border-color: var(--highlight-color) transparent transparent;
        }
        :root {
        --highlight-color: #ccc;
}
        html{
            scroll-behavior: smooth;
            -webkit-font-smoothing: antialiased;
        }
        body{
            background:rgb(31,34,53);
            font-family:Arial, Helvetica, sans-serif;
        }
        progress[value]::-webkit-progress-value {
        transition: width 0.5s;
        background: orange;
}
        section{
            padding:10%;
        }
        #about{
            padding:10%;
        }
        #head-right{
            float: right;
            font-size: 20px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: bold;
            color: #fff;
            margin-right: 8%;
            text-transform: uppercase;
        }
        #img-a img{
            width: 600px;
        }
        #img-a{
            margin-top:-10%;
        }
        #head-right span{
            padding: 0 20px;
        }
        #cxq1{
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: lighter;
        }
        .desc1{
            font-size:18px;
            font-weight: lighter;
            font-family: Arial, Helvetica, sans-serif;
        }
        #icons{
            font-size:30px;
            margin-top:50px;
            max-width: auto;
            overflow: hidden;
        }
        #icons1{
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: lighter;
            margin-top:20px;
        }
        #icons1 a{
            margin:0 10px;
        }
        #swdown{
            outline:0;
            border: 1px solid orange;
            background: #fff;
            border-radius: 50%;
            font-size: 30px;
            padding: 8px;
            color:orange;
            transition:0.5s;
        }
        #swdown:hover{
            transition: 0.5s;
            border-radius: 0px;
        }
        #icons span{
            border-radius: 0.8rem;
            border:1px solid #e0e0e0;
            padding:10px;
            text-align: center;
            width:80px;
            margin:5px 10px;
        }
        #icons span:hover{
            border:1px solid orange;
            transition: 0.5s;
        }
        #head-left{
            position: absolute;
            color: orange;
            font-size: 30px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: bold;
            text-transform: uppercase;
            width: auto;
            text-align: center;
            margin-top:-10px;
            margin-left: 8%;
        }
        header{
            padding: 30px 40px;
            border-bottom: 1px solid orange;
            padding-bottom: 50px;
        }
        #bars{
            display: none;
        }
        div::selection,span::selection,br::selection,img::selection,i::selection,a::selection{
            background: none;
        }
        #sect{
            color: #fff;
            font-size: 60px;
            font-weight: bold;
        }
        #sect1{
            color: #fff;
            font-size: 50px;
            font-weight: bold;
        }
        #sect div{
            margin-bottom: 10px;
        }
        #wel{
            font-size: 50px;
            text-transform: uppercase;
        }
        .desc{
            font-size:20px;
            font-weight: lighter;
            color:#fff;
            font-family:Arial, Helvetica, sans-serif;
        }
        @media (max-width:900px) {
            #head-right span{
                display: none;
            }
            #wel{
                font-size:25px;
                transition: 0.5s;
            }
            #desc{
                font-size:16px;
                transition: 0.5s;
            }
            #head-left{
                font-size:20px;
                margin-top:1px;
                transition: 0.5s;
            }
            #bars{
                display: block;
                transition: 0.5s;
            }
            #bars:hover{
                color: orange;
                cursor: pointer;
            }
            #cxq{
                font-size: 25px;
                transition: 0.5s;
            }
            #cxq1{
                font-size: 25px;
                transition: 0.5s;
            }
        }
        a{
            text-decoration: none;
            color:#fff;
        }
        a:hover{
            text-decoration: none;
            color:orange;
        }
        #about{
            display: none;
            padding: 0 10%;
            margin-top:40px;
        }
        #portfolio{
            display: none;
        }
        #blog{
            display: none;
        }
        #contact{
            display: none;
        }
        #subscribe{
            display: none;
        }
        #subs{
            padding-left:15px;
            padding-right:15px;
            outline: 0;
            width: 40%;
            font-size: 20px;
            height:50px;
            border:none;
            border-bottom:1px solid #e0e0e0;
            background: transparent;
            color:#ccc;
            transition: 0.5s;
            font-family: Arial, Helvetica, sans-serif;
        }
        #subs:focus{
            border-bottom: 1px solid orange;
            transition: 0.5s;
        }
        #btn-subs{
            border:1px solid #ccc;
            border-radius:0px;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            width: 40%;
            outline: 0;
            background:#ccc;
            transition: 0.5s;
            height: 50px;
        }
        #btn-subs:hover{
            background: orange;
            color: #f7f7f7;
            border: none;
            transition: 0.5s;
        }
        @media (max-width:1400px){
            #subs{
                width:50%;
            }
            #btn-subs{
                width:50%;
            }
        }
        @media (max-width:1200px) {
            #subs{
                width:60%;
            }
            #btn-subs{
                width:60%;
            }
        }
        @media (max-width:1000px) {
            #subs{
                width:70%;
            }
            #btn-subs{
                width:70%;
            }
        }
        @media (max-width:800px) {
            #subs{
                width:80%;
            }
            #btn-subs{
                width:80%;
            }
        }
    </style>
</body>
</html>