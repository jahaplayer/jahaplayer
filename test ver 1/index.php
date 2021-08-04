<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>test.uz</title>
</head>
<body onload="load()">
    <header>
        <div id="head">
            <div style='float: left;'><img src="https://images.squarespace-cdn.com/content/v1/5f7d5e1f89c97873a05ea88c/1604340958991-CU6GJXEBKSX5C2PIAQH2/Test.ai_logo_RGB.png"></div>
            <span class="fa fa-envelope" style="color:rgb(44,27,202);" id="ic"></span>&nbsp;<a href="mailto:info@asdix.com">info@asdix.com</a> <span>|</span>
            <span class="fa fa-phone-alt" style="color:rgb(44,27,202);" id="ic"></span><a href="tel:998913688054">&nbsp;+998(91) 368-80-54</a>
        </div>
    </header>
    <section>
        <div class="row">
            <div class="col-md-2" id="fan">
                <div style="font-family: Arial, Helvetica, sans-serif;font-weight: bold;color: #444;">Menu</div>
                <span onclick="document.getElementById('testitle').textContent = this.textContent;document.getElementById('li').textContent = 'Question : Whats is your name?'">Computer science</span><br>
                <span onclick="document.getElementById('testitle').textContent = this.textContent">Mathematics</span><br>
                <span onclick="document.getElementById('testitle').textContent = this.textContent;document.getElementById('li').textContent = 'Question : How Are you?'">Physics</span>
            </div>
            <div class="col-md-7" id="test">
                <div id="testitle" class="text-center">Mathematics</div>
                <div id="ques">
                    <?php
                        @$conn = new mysqli("localhost","admin","4221349n","asd");
                        $sql = "SELECT * FROM `ques` ORDER BY rand() DESC LIMIT 10";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            echo "<div><ol>";
                            while($row = $result->fetch_assoc()) {
                                    echo "<li><div>" . $row["ques"]. "<div style='padding-left:20px;margin-bottom:20px;'>" . "<br><input type='radio' name='test1' style='margin-right:10px;'>" .$row["a"]. "<br><input type='radio' name='test2' style='margin-right:10px;'>" .$row["b"]. "<br><input type='radio' name='test3' style='margin-right:10px;'>" .$row["c"]. "</div></div></li>";
                            }
                            echo "</ol></div>";
                        } else {
                            echo "0 results";
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-2" id="ads">
                <img src="https://i.pinimg.com/564x/a3/b7/d7/a3b7d7247f2bbdbcd10f3589d5015903.jpg" alt="Pepsi Ads">
                <img src="https://i.pinimg.com/originals/8f/72/78/8f7278cc6d6c629dca76b8458b24f1fc.jpg" alt="Pepsi Ads">
                <img src="https://m1.behance.net/rendition/modules/25645611/disp/460bd4dd17df9905ecf7198ddfad2299.jpg" alt="Pepsi Ads">
                <img src="https://www.pepsi.ca/sites/pepsi.ca/files/PBC19222_MasterBrand_Mobile_750x1141_ENG_FA.jpg" alt="Pepsi Ads">
            </div>
        </div>
    </section>
    <style>
        div::selection, a::selection,span::selection,br::selection,ol::selection,li::selection{
            background: none;
        }
        #testitle{
            margin-top:30px;
            font-family:Arial, Helvetica, sans-serif;
            font-weight: lighter;
            color: #444;
        }
        header #head{
            padding:15px 15%;
            background: #fff;
            box-shadow: 0 0 7px #e0e0e0;
            font-size: 18px;
            font-weight: 400;
            color: #444;;
            max-height: 70px;
            text-align:right;
            font-family:Comic Sans MS, Comic Sans, cursive;
        }
        #ads img{
            width: 300px;
            border-radius:0.8rem;
            position: sticky;
            top:0;
            margin-bottom:10px;
        }
        #ads{
            margin-top:20px;
            margin-left:5px;
        }
        body{
            font-size: 16px;
            overflow-x: hidden;
            background: #f3f2ef;
            transition:0.5s all;
        }
        #head img{
            width: 150px;
        }
        img::selection{
            background:none;
        }
        #ques{
            padding: 20px;
        }
        ol,li{
            font-size: 18px;
            margin-top:20px;
        }
        ol{
            font-family:Arial, Helvetica, sans-serif;
            font-size:18px;
            font-weight:normal;
            color: #444;
        }
        a{
            text-decoration: none;
            color: #444;
            outline: none;
        }
        #ic{
            font-size: 16px;
        }
        #fan{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
            padding:20px;
            text-align: center;
            margin-top: 17%;
            box-shadow: 0 0 7px #c5c5c5;
            border-radius:0.8rem;
            background: #fff;
            margin-right: 10px;
            max-height: 200px;
            position: sticky;
            top: 0;

        }
        #fan span{
            cursor:pointer;
        }
        #fan span:hover{
            text-decoration: underline;
        }   
        #test{
            font-size:24px;
            margin-top:20px;
            border-radius: 0.8rem;
            box-shadow: 0 0 7px #c5c5c5;
            background: #fff;
        }
        @media (max-width:1400px) {
            #fan{
                font-size: 18px;
                max-height: 140px;
            }
            #ads img{
                width: 210px;
            }
            footer div{
                font-size: 18px;
            }
        }
        @media (max-width:1200px) {
            #head a{
                font-size:16px;
            }
            #head span{
                font-size:14px;
            }
            #head{
                font-size: 16px;
            }
            #fan{
                font-size: 16px;
                max-height: 130px;
            }
            #ads img{
                width: 230px;
            }
            footer div{
                font-size: 16px;
            }
        }
        @media (max-width:1000px) {
            #head a{
                font-size:15px;
            }
            #head span{
                font-size:13px;
            }
            #head{
                font-size: 15px;
            }
            #fan{
                font-size: 13px;
                max-height: 120px;
            }
            #ads img{
                width:200px;
                transition: 0.5s;
            }
            footer div{font-size:14px;}
        }
        @media (max-width:900px) {
            #head a{
                font-size:14px;
            }
            #head span{
                font-size:12px;
            }
            #head{
                font-size: 14px;
            }
            #fan{
                font-size:10px;
                max-height: 100px;
                transition: 0.5s;
            }
            #ads{
                display: none;
            }
            footer div{
                display: none;
            }
        }
        @media (max-width:800px) {
            #head a{
                font-size:13px;
            }
            #head span{
                font-size:11px;
            }
            #head{
                font-size: 13px;
            }
        }
        @media (max-width:700px) {
            #head a{
                font-size:10px;
            }
            #head span{
                font-size:9px;
            }
            #head{
                font-size: 10px;
            }
            #head img{
                width:50px;
            }
            #test{
                margin-left:0%;
            }
            #fan{
                font-size:12px;
                padding:0;
                margin-top: 5px;
            }
        }
    </style>
<script>
    function load(){
        console.clear()
    }
</script>
<script>
    //window.onbeforeunload = function(){
     //   return 'Are you sure you want to leave?';
    //};
</script>
</body>
</html>