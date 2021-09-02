<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document.com</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav>
            <a href="#first"><i class="far fa-user" style="color:#fff;outline:0;"></i></a>
            <a href="#second"><i class="fas fa-briefcase" style="color:#fff;outline:0;"></i></a>
            <a href="#third"><i class="far fa-file" style="color:#fff;outline:0;"></i></a>
            <a href="#fourth"><i class="far fa-address-card" style="color:#fff;outline:0;"></i></a>
        </nav>
    
        <div class= 'container'> 
            <section id= 'first'>
                <!--FIRST-->
            </section>
        
            <section id= 'second'>
            <?php
            if(isset($_POST["submit"])){
                session_start();
                $_SESSION["raqam"] = $_POST["raqam"];
                $_SESSION["rusum"] = $_POST["rusum"];
                $_SESSION["rangi"] = $_POST["rangi"];
                $_SESSION["manzil"] = $_POST["manzil"];
                $_SESSION["ynarxi"] = $_POST["ynarxi"];
                $_SESSION["yoqilgi"] = $_POST["yoqilgi"];
                $_SESSION["sipidametr"] = $_POST["sipidametr"];
                $_SESSION["ishsana"] = $_POST["ishsana"];
                $_SESSION["turi"] = $_POST["turi"];
                $_SESSION["kuzov"] = $_POST["kuzov"];
                $_SESSION["shassi"] = $_POST["shassi"];
                $_SESSION["tvazni"] = $_POST["tvazni"];
                $_SESSION["yvazni"] = $_POST["yvazni"];
                $_SESSION["divigatel"] = $_POST["divigatel"];
                $_SESSION["dquvvati"] = $_POST["dquvvati"];
                $_SESSION["buyurtmachi"] = $_POST["buyurtmachi"];
                $_SESSION["bpas"] = $_POST["bpas"];
                $_SESSION["iib"] = $_POST["iib"];
                $_SESSION["qpasber"] = $_POST["qpasber"];
                $_SESSION["bmanzili"] = $_POST["bmanzili"];
                $_SESSION["ariza"] = $_POST["ariza"];
                $_SESSION["reg"] = $_POST["reg"];
                $_SESSION["xisobot"] = $_POST["xisobot"];
                $_SESSION["maqsad"] = $_POST["maqsad"];
                $_SESSION["qiymat"] = $_POST["qiymat"];
                $_SESSION["osana"] = $_POST["osana"];
                $_SESSION["baxsana"] = $_POST["baxsana"];
                header("location:xarajat.php");
            }
    ?>
        <!--<div style="width:100%;display:flex;padding:20px;padding-left:10%;">
            <div><img src="img/uzflag.png" alt="Uzbekistan" id="uz"></div>
            <div style="color:rgb(33, 77, 115);font-size:20px;font-family:cursive;font-weight:bold;padding:20px;letter-spacing:2px;">
                O'zbekiston<br>
                Узбекистон<br>
                Uzbekistan
            </div>
            <div style="color:rgb(33, 77, 115);font-size:25px;font-weight:bold;text-align:right;padding:15px;'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                avtomototransport vositasi<br>
                ro'yxatdan o'kazilganligi<br>
                to'g'risida guvohnoma
            </div>
            <div style="color:rgb(147,154,166);font-size:18px;font-weight:bold;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding:25px">
                Свидетельство о регистрации<br>
                автомототранспортного о средства<br>
                Vehicle licence
            </div>
        </div>
        <hr>-->
        <div style="font-size:30px;font-family:cursive;color:#4f84f4" class="text-center">техпаспорт<sub style="font-size:12px;font-weight:bold">5 минута</sub></div>
        <form method="post" action="index.php" style="padding:20px;" autocomplete="off">
            <div class="menyuuser">
                    <div class="vosita transport">
                    <!--1-->
                    <div class="row">
                        <div style="width:49%;padding:20px;margin-bottom:10px;border-radius:32px;color:#444;box-shadow: 0 0 7px #e0e0e0;">
                            <div style="margin-bottom:10px;">   
                                <span style="font-size:13px;font-weight:bold;padding-right:40px;">DAVLAT RAQAM BELGISI<br>
                                <span style="font-weight:normal">Гос. Номерной знак / State Number Plate</span></span>
                                <input type="text" name="raqam">
                            </div>

                            <div style="margin-bottom:10px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:147px;">RUSUMI / MODELI<br>
                                <span style="font-weight:normal">Маркамодель / Makemodel</span></span>
                                <input type="text" name="rusum">
                            </div>

                            <!--<div><input type="text" name="model" placeholder="MODEL"></div>-->

                            <div style="margin-bottom:20px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:180px;">RANGI<br>
                                <span style="font-weight:normal">Цвет / Vehicle colour</span></span>
                                <input type="text" name="rangi">
                            </div>

                            <div style="margin-bottom:30px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:222px;">MANZILI<br>
                                <span style="font-weight:normal">Адрес / address</span></span>
                                <input type="text" name="manzil">
                            </div>
                            
                            <div style="margin-bottom:10px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:305px;">Yangi Narxi<br>
                                <span style="font-weight:normal">... / ...</span></span>
                                <input type="text" name="ynarxi">
                            </div>

                            <div style="margin-bottom:10px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:305px;">YOQILG'I TURI<br>
                                <span style="font-weight:normal">... / ...</span></span>
                                <input type="text" name="yoqilgi">
                            </div>

                            <div style="margin-bottom:10px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:305px;">SPIDAMETR KO'RSATGICHI<br>
                                <span style="font-weight:normal">... / ...</span></span>
                                <input type="text" name="sipidametr">
                            </div>
                        </div>
                        <!--/1-->

                        <div style="width:49%;padding:20px;margin-bottom:10px;border-radius:32px;margin-left:10px;box-shadow:0 0 7px #e0e0e0;color:#444;">
                            <div style="margin-bottom:10px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:150px;">ISHLAB CHIQARILGAN YIL<br>
                                <span style="font-weight:normal">ДАТА / DATE</span></span>
                                <input type="text" name="ishsana">
                            </div>

                            <div style="margin-bottom:10px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:155px;">TURI<br>
                                <span style="font-weight:normal">ТИП / TYPE</span></span>
                                <input type="text" name="turi">
                            </div>

                            <div style="margin-bottom:10px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:163px;">KUZOV<br>
                                <span style="font-weight:normal">КУЗОВ / ...</span></span>
                                <input type="text" name="kuzov">
                            </div>

                            <div style="margin-bottom:10px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:195px;">SHASSI<br>
                                <span style="font-weight:normal">... / ...</span></span>
                                <input type="text" name="shassi">
                            </div>

                            <div style="margin-bottom:10px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:195px;">TO'LA VAZNI<br>
                                <span style="font-weight:normal">... / ...</span></span>
                                <input type="text" name="tvazni">
                            </div>

                            <div style="margin-bottom:10px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:195px;">YUKSIZ VAZNI<br>
                                <span style="font-weight:normal">... / ...</span></span>
                                <input type="text" name="yvazni">
                            </div>

                            <div style="margin-bottom:10px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:195px;">DIVIGATEL RAQAMI<br>
                                <span style="font-weight:normal">... / ...</span></span>
                                <input type="text" name="divigatel">
                            </div>

                            <div style="margin-bottom:10px;">
                                <span style="font-size:13px;font-weight:bold;padding-right:195px;">DIVIGATEL QUVVATI<br>
                                <span style="font-weight:normal">... / ...</span></span>
                                <input type="text" name="dquvvati">
                            </div>
                        </div> 
                    </div>                                                                    
                    <center><button id="set-btn" type="button">Qoshimcha ma'lumotlar</button></center>
                    
                        <div id="myModal" class="modal">

                            <div class="modal-content" style="padding:20px;">
                                <div style="text-align:right"><span class="close" title="Save and Close">&times;</span></div>
                                <div style="font-size:30px;font-family:cursive;color:#4f84f4;" class="text-center">BUYURTMACHI</div>
                                <div class="row" style="padding:20px;">
                                <div style="width:50%;padding:20px;margin-bottom:10px;border-radius:32px;color:#444;box-shadow: 0 0 7px #e0e0e0;">
                                    <div style="margin-bottom:20px;">
                                        <span style="font-size:13px;font-weight:bold;padding-right:300px;">BUYURTMACHI<br>
                                        <span style="font-weight:normal">... / ...</span></span>
                                        <input type="text" name="buyurtmachi">
                                    </div>
                    
                                    <div style="margin-bottom:20px;">
                                        <span style="font-size:13px;font-weight:bold;padding-right:300px;">BUYURTMACHI pasport seriya<br>
                                        <span style="font-weight:normal">... / ...</span></span>
                                        <input type="text" name="bpas">
                                    </div>

                                    <div style="margin-bottom:20px;">
                                        <span style="font-size:13px;font-weight:bold;padding-right:300px;">BUYURTMACHI pas kimtomonidan berilgan<br>
                                        <span style="font-weight:normal">... / ...</span></span>
                                        <input type="text" name="iib">
                                    </div>
                            
                                    <div style="margin-bottom:20px;">
                                        <span style="font-size:13px;font-weight:bold;padding-right:300px;">BUYURTMACHI pas qachonberilgan<br>
                                        <span style="font-weight:normal">... / ...</span></span>
                                        <input type="text" name="qpasber">
                                    </div>
                            
                                    <div style="margin-bottom:20px;">
                                        <span style="font-size:13px;font-weight:bold;padding-right:300px;">BUYURTMACHI Manzili<br>
                                        <span style="font-weight:normal">... / ...</span></span>
                                        <input type="text" name="bmanzili">
                                    </div>
                            
                                    <div style="margin-bottom:20px;">
                                        <span style="font-size:13px;font-weight:bold;padding-right:300px;">ARIZA YOKI XAT SANSI<br>
                                        <span style="font-weight:normal">... / ...</span></span>
                                        <input type="text" name="ariza">
                                    </div>
                                </div>
                                <div style="width:49.5%;padding:20px;margin-bottom:10px;border-radius:32px;color:#444;box-shadow: 0 0 7px #e0e0e0;margin-left:5px;">
                                    <div style="margin-bottom:20px;">
                                        <span style="font-size:13px;font-weight:bold;padding-right:300px;">REGISTRATSIYA<br>
                                        <span style="font-weight:normal">... / ...</span></span>
                                        <input type="text" name="reg">
                                    </div>
                                    
                                    <div style="margin-bottom:20px;">
                                        <span style="font-size:13px;font-weight:bold;padding-right:300px;">XISOBOT RAQAM<br>
                                        <span style="font-weight:normal">... / ...</span></span>
                                        <input type="text" name="xisobot">
                                    </div>
                            
                                    <div style="margin-bottom:20px;">
                                        <span style="font-size:13px;font-weight:bold;padding-right:300px;">BAXOLASH MAQSADI<br>
                                        <span style="font-weight:normal">... / ...</span></span>
                                        <input type="text" name="maqsad">
                                    </div>
                            
                                    <div style="margin-bottom:20px;">
                                        <span style="font-size:13px;font-weight:bold;padding-right:300px;">QIMAT TURI<br>
                                        <span style="font-weight:normal">... / ...</span></span>
                                        <input type="text" name="qiymat">
                                    </div>

                                    <div style="margin-bottom:20px;">
                                        <span style="font-size:13px;font-weight:bold;padding-right:300px;">OBEKT O'RGANILGAN SANA<br>
                                        <span style="font-weight:normal">... / ...</span></span>
                                        <input type="text" name="osana">
                                    </div>

                                    <div style="margin-bottom:20px;">
                                        <span style="font-size:13px;font-weight:bold;padding-right:300px;">BAXOLASH SANASA<br>
                                        <span style="font-weight:normal">... / ...</span></span>
                                        <input type="date" name="baxsana" id="baxsana">
                                    </div>
                                </div>
                                </div>
                                <!--<div><input type="text" name="xsana" placeholder="XISOBOT YOZILGAN SANASA"></div>-->
                            </div>

                        </div>
                    </div>

                        
                        <div><input type="submit" name="submit" value="Yuborish"></div>
                    </div>
                    <div class="vosita bino-inshoot"></div>
                </div>
            </form>
    <script>
        var modal = document.getElementById("myModal");

        var btn = document.getElementById("set-btn");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
        modal.style.display = "block";
        }
        span.onclick = function() {
        modal.style.display = "none";
        }
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
    </script>
    <style>
        *{
            text-transform:uppercase;
            font-family:Arial,Helvetica,sans-serif;
            
        }
        body{
            padding:20px;
            background:#fff ;
        }
        #uz{
            width:300px;
        }
        input{
            outline:0;
            border:1px solid #e0e0e0;
            border-radius:0px;
            padding:2px 15px;
            height:30px;
            border-radius:32px;
            background:#fff;
            text-transform:none;
        }
        #set-btn{
            border:1px solid #e0e0e0;
            background:#fff;
            color:#4f84f4;
            cursor:pointer;
            border-radius:32px;
            height:40px;
            outline:0;
            padding:0 15px;
        }
        ::selection{
            background:none;
            color:#4f84f4;
        }
        input:focus{
            border:1px solid #4f84f4;
            transition:0.5s;
        }
        br {
            content: "";
            margin: -6px;
            display: block;
        }
        .modal {
        display: none;
        position: fixed;
        z-index: 1; 
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto; 
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
        background-color: #fff;
        margin: auto;
        border:none;
        padding: 20px;
        box-shadow:0 0 5px #e0e0e0;
        border-radius:32px;
        width: 80%;
        }
        div .close {
        color: #aaaaaa;
        text-align:right;
        font-size: 28px;
        font-weight: bold;
        outline:0;
        }

        div .close:hover,
        div .close:focus {
        color: #4f84f4;
        text-decoration: none;
        cursor: pointer;
        }
        @media (max-width:800px){
            input{
                width:100%;
            }
        }
    </style>
            </section>
            
            <section id= 'third'>
                <!--THIRD-->
            </section>
            
            <section id= 'fourth'>
                <!--FOURTH-->
            </section>
        </div>
    </header>
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        .container {
        min-height: 100vh;
        font-family: Montserrat, sans-serif;
        }

        nav a {
            font-size: 30px;
            color: #fff;
            text-decoration: none;
            padding: 20px;
            text-align: center;
        }

        nav {
            position: fixed;
            left: 0;
            z-index: 50;
            display: flex;
            justify-content: space-around;
            flex-direction: column;
            border-radius:0 0.8rem 0.8rem 0;
            background: #4f84f4;
        }

        section {
            position: absolute;
            top: 0;
            height: 100vh;
            opacity: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        } 

        section h1 {
            color: #fff;
            font-size: 50px;
            text-transform: uppercase;
            opacity: 0;
        }

        /* Styles applied on trigger */
        section:target {
            opacity: 1;
            position: absolute;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10;
        }

        section:target h1 {
            opacity: 0;
            animation: 0.5s fadeIn forwards .5s;
        }

        #first {
        background:#fff;
        }
        #second {
            background: #fff;
        }

        #third {
            background: #fff;
        }

        #fourth {
            background: #fff;
        }

        @keyframes fadeIn {
            100% { opacity:1 }
        }
        @media (max-width:1000px){
            nav{
                top:0;
            }
        }
    </style>
</body>
</html>