<?php
    include("db.php");
    $sql = "SELECT * FROM `db`";
    $result = $conn->query($sql); $l = 0;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc())
            if($row["email"] == $_COOKIE["email"] && $row["password"] == $_COOKIE["pass"]) $l = 1;
        if ($l == 0) {
            header("Location: log.php");
        }
      } else {
        
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title><?php if(isset($_COOKIE["email"])){echo $_COOKIE["email"]. " (6) Feed";}else{echo "Feed";}?></title>
    <link rel="icon" href="https://static-exp1.licdn.com/sc/h/1bt1uwq5akv756knzdj4l6cdc">
</head>
<body id="body" class="text-center">
    <header style="width:100%;">
        <div>
            <form method="get" onsubmit="return s.value!=''">
                <div class="row" id="cxP">
                    <div class="col-md-3" id="row1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" class="global-nav__logo">
                        <g>
                            <path style="color:#444" d="M34,2.5v29A2.5,2.5,0,0,1,31.5,34H2.5A2.5,2.5,0,0,1,0,31.5V2.5A2.5,2.5,0,0,1,2.5,0h29A2.5,2.5,0,0,1,34,2.5ZM10,13H5V29h5Zm.45-5.5A2.88,2.88,0,0,0,7.59,4.6H7.5a2.9,2.9,0,0,0,0,5.8h0a2.88,2.88,0,0,0,2.95-2.81ZM29,19.28c0-4.81-3.06-6.68-6.1-6.68a5.7,5.7,0,0,0-5.06,2.58H17.7V13H13V29h5V20.49a3.32,3.32,0,0,1,3-3.58h.19c1.59,0,2.77,1,2.77,3.52V29h5Z" fill="currentColor"></path>
                        </g>
                    </svg><input type="text" name="s" id="search" placeholder="Search">
                    </div>
                    <div class="col-md-9" id="menu-right">
                            <a href="#" class="fa fa-home"><br><span style="font-family:Arial, Helvetica, sans-serif;color:#444;font-weight:bold;">Home</span></a><a href="#" class="fa fa-project-diagram"><br><span style="font-family:Arial, Helvetica, sans-serif;color:#444;font-weight:bold;">Networks</span></a><a href="#" class="fa fa-envelope-open"><br><span style="font-family:Arial, Helvetica, sans-serif;color:#444;font-weight:bold;">Messaging</span></a><a href="#" class="fa fa-bell"><br><span style="font-family:Arial, Helvetica, sans-serif;color:#444;font-weight:bold;">Notifications</span></a>
                    </div>
                </div>
            </form>
        </div>
    </header>
    <section style="padding-left:21%;">
        <div class="row">
            <div class="col-md-2" id="ccq">
                <div id="user">
                    <div style="background-image: url('https://i.pinimg.com/originals/94/f6/41/94f641161d1d124c6bfa2463c7feb8d4.jpg');height:60px;border-radius:0.8rem 0.8rem 0 0;">
                    <?php
                        include("db.php");
                        $sql = "SELECT * FROM `db`";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                if($row["email"] == $_COOKIE["email"] && $row["password"] == $_COOKIE["pass"]){
                                    echo "<img src='".$row["file"]."' style='width:72px;height:70px;border-radius:50%;border:2px solid #fff;' />";
                                }
                            }
                          } else {
                            echo "0 results";
                          }
                    ?>
                    </div>
                    <div style="font-weight:bold;font-size:16px;margin-top:30px;text-transform:uppercase;font-family:Arial, Helvetica, Sans-serif;">
                    <?php
                        include("db.php");
                        $sql = "SELECT * FROM `db`";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                if($row["email"] == $_COOKIE["email"] && $row["password"] == $_COOKIE["pass"]){
                                    echo $row["fname"]. " " .$row["lname"];
                                    if($row["ver"] == "1"){
                                        echo "<a data-title='Verified account' id='qcver'><img style='width:18px;margin-top:-5px;' src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsLXJ1bGU9Im5vbnplcm8iPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik02Ljg5MSAxOS4wNGEyLjk5NyAyLjk5NyAwIDAxLTMuMTYyLTEuODI1bC0uMjc1LS42NjUtLjY2NS0uMjc1YTMgMyAwIDAxLTEuODI1LTMuMTYybC4wOTQtLjcxMy0uNDM4LS41NzFhMi45OTcgMi45OTcgMCAwMTAtMy42NTFsLjQzOC0uNTcxLS4wOTQtLjcxM2EyLjk5NyAyLjk5NyAwIDAxMS44MjUtMy4xNjJsLjY2NS0uMjc1LjI3NS0uNjY1QTMgMyAwIDAxNi44OTEuOTY3bC43MTMuMDk0LjU3MS0uNDM4YTIuOTk3IDIuOTk3IDAgMDEzLjY1MSAwbC41NzEuNDM4LjcxMy0uMDk0YTIuOTk3IDIuOTk3IDAgMDEzLjE2MiAxLjgyNWwuMjc1LjY2NS42NjUuMjc1YTMgMyAwIDAxMS44MjUgMy4xNjJsLS4wOTQuNzEzLjQzOC41NzFhMi45OTcgMi45OTcgMCAwMTAgMy42NTFsLS40MzguNTcxLjA5NC43MTNhMi45OTcgMi45OTcgMCAwMS0xLjgyNSAzLjE2MmwtLjY2NS4yNzUtLjI3NS42NjVhMyAzIDAgMDEtMy4xNjIgMS44MjVsLS43MTMtLjA5NC0uNTcxLjQzOGEyLjk5NyAyLjk5NyAwIDAxLTMuNjUxIDBsLS41NzEtLjQzOC0uNzEzLjA5NCIvPjxwYXRoIGZpbGw9IiMxZjZhZWQiIGQ9Ik03Ljc1NCAxNi45MDVhLjk5OS45OTkgMCAwMS43MzkuMTk4bC44OTkuNjlhMSAxIDAgMDAxLjIxNyAwbC44OTktLjY5YS45OTkuOTk5IDAgMDEuNzM5LS4xOThsMS4xMjQuMTQ4YTEgMSAwIDAwMS4wNTQtLjYwOGwuNDMzLTEuMDQ3YS45OTYuOTk2IDAgMDEuNTQxLS41NDFsMS4wNDctLjQzM2EuOTk5Ljk5OSAwIDAwLjYwOC0xLjA1NGwtLjE0OC0xLjEyNGEuOTk5Ljk5OSAwIDAxLjE5OC0uNzM5bC42OS0uODk5YTEgMSAwIDAwMC0xLjIxN2wtLjY5LS44OTlhLjk5OS45OTkgMCAwMS0uMTk4LS43MzlsLjE0OC0xLjEyNGExIDEgMCAwMC0uNjA4LTEuMDU0bC0xLjA0Ny0uNDMzYS45OTYuOTk2IDAgMDEtLjU0MS0uNTQxbC0uNDMzLTEuMDQ3YS45OTkuOTk5IDAgMDAtMS4wNTQtLjYwOGwtMS4xMjQuMTQ4YS45OTkuOTk5IDAgMDEtLjczOS0uMTk4bC0uODk5LS42OWExIDEgMCAwMC0xLjIxNyAwbC0uODk5LjY5YS45OTkuOTk5IDAgMDEtLjczOS4xOThMNi42MyAyLjk0NmExIDEgMCAwMC0xLjA1NC42MDhsLS40MzMgMS4wNDdhLjk5Ni45OTYgMCAwMS0uNTQxLjU0MWwtMS4wNDcuNDMzYS45OTkuOTk5IDAgMDAtLjYwOCAxLjA1NGwuMTQ4IDEuMTI0YS45OTkuOTk5IDAgMDEtLjE5OC43MzlsLS42OS44OTlhMSAxIDAgMDAwIDEuMjE3bC42OS44OTljLjE2MS4yMS4yMzMuNDc2LjE5OC43MzlsLS4xNDggMS4xMjRhMSAxIDAgMDAuNjA4IDEuMDU0bDEuMDQ3LjQzM2MuMjQ1LjEwMS40NC4yOTYuNTQxLjU0MWwuNDMzIDEuMDQ3YS45OTkuOTk5IDAgMDAxLjA1NC42MDhsMS4xMjQtLjE0OCIvPjwvZz48cGF0aCBzdHJva2U9IiNmZmYiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNNyAxMC4xbDIuMjk2IDIuNEwxMyA4Ii8+PC9nPjwvc3ZnPg=='></a>";
                                    }
                                }
                            }
                          } else {
                            echo "0 results";
                          }
                    ?></div>
                    <div style="color:rgb(0,0,0,0.6);font-size:14px;margin-top:5px;">
                        <?php
                            include("db.php");
                            $sql = "SELECT * FROM `db`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if($row["email"] == $_COOKIE["email"] && $row["password"] == $_COOKIE["pass"]){
                                        if($row["ver"] == "1"){
                                            echo "13.4mln Followers";
                                        }else{
                                            echo "4 Followers";
                                        }
                                    }
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>
                    </div>
                    <div style="border-bottom:0.5px solid #e0e0e0;margin-top:10px;"></div>
                    <div style="margin-top:20px;">
                        <div style="font-size:11.5px;color:rgb(0,0,0,0.6);text-align:left;margin-left:10px;">Connections</div>
                        <div style="font-size:12px;color:#444;text-align:left;margin-left:10px;">Grow Your Network</div>
                        <div style="font-size:12px;color:rgb(0,0,0,0.6);text-align:left;margin-left:10px;margin-top:10px;">Who viewed your profile</div>
                    <div style="border-bottom:0.5px solid #e0e0e0;margin-top:15px;margin-bottom:10px;"></div>
                        <div style="font-size:12px;color:#444;text-align:left;margin-left:10px;">Access exclusive tools & insights</div>
                        <div style="font-size: 13px;font-weight:bold;color:#444;text-align:left;margin-left:10px;"><span style="color:#ffcf86" class="fa fa-star"></span>&nbsp;&nbsp;Try premium for free</div>
                    <div style="border-bottom:0.5px solid #e0e0e0;margin-top:15px;margin-bottom:10px;"></div>
                    <div style="font-size: 12px;font-weight:bold;color:#444;text-align:left;margin-left:11px;"><span class="fa fa-bookmark"></span>&nbsp;&nbsp;My items</div>
                    </div>
                </div>
                <div id="chan">
                    <div><a href="#">Groups</a></div>
                    <div><a href="#">Events</a><span style="float:right;padding-right:10px;font-size:20px;">+</span></div>
                    <div><a href="#">Followed Hashtags</a></div>
                    <div style="border-bottom:0.5px solid #e0e0e0;margin-top:2px;margin-bottom:10px;"></div>
                    <div style="font-size:16px;color:rgb(0,0,0,0.4);font-weight:bold;text-align:center">Discover More</div>
                </div>
                <div style="margin-top:10px;" id="btnLog">
                    <button style="border-radius:32px;border:1px solid #4f84f4;background:#4f84f4;color:#fff;width:100px;height:30px;font-weight:400;font-family:Arial, Helvetica, sans-serif;outline:0;" onclick="window.location.href = 'check.php'">Выйти</button>
                </div>
            </div>
            <div class="col-md-4">
                <div id="post">
                    <div style="text-align:left;padding-left:15px;" id="imgres">
                        <?php
                            include("db.php");
                            $sql = "SELECT * FROM `db`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if($row["email"] == $_COOKIE["email"] && $row["password"] == $_COOKIE["pass"]){
                                        echo '<img id="ffww" src="'.$row["file"].'" style="border-radius:50%;position:inherit;border:2px solid #fff;z-index:1;" />';
                                    }
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>
                            <input type="text" style="font-family:Arila,Helvetica,sans-serif;color:#444;font-size:16px;border:1px solid #e0e0e0;border-radius:32px;outline:0;padding:0 15px;margin-top:10px;" placeholder="Start a post">
                            <div id="faq" style="font-size:15px;padding:10px;font-weight:bold;color:rgb(0,0,0,0.6);"><span class="fa fa-image" style="color:#70b5f9;border:0;background:transparent;cursor:pointer;" id="pfile" onclick="document.getElementById('file1').click()"></span><input type="file" id="file1" name="file1" style="display:none" />Photo<span class="fa fa-video-plus" style="color:#7fc15e"></span>Video<span class="fa fa-calendar-alt" style="color:#e7a33e"></span>Event<span class="fa fa-newspaper" style="color:#fc9295"></span>Write article</div>
                    </div>
                </div>
                <script>
                    document.querySelector('#file1').addEventListener('change', handleFileSelect, false);
                    function handleFileSelect(e) {
                        var files = e.target.files;
                        var filesArr = Array.prototype.slice.call(files);
                        filesArr.forEach(function(f) {
                        if (!f.type.match("image.*")) return;
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            console.log(e);
                            var base64 = e.target.result;
                            //document.getElementById("imgBase64").value = base64;
                            //document.getElementById("rasm").src = base64;
                            document.getElementById("postnew").value = base64;
                            ;
                        };
                        reader.readAsDataURL(f);
                        });
                        setTimeout(function(){ document.getElementById('ssl').click(); }, 0);
                    }
                    </script>
                <hr>
                <div id="respost">
                    <div style="text-align:left;padding-left:15px;" id="ssd">
                        <div class="row">
                            <div class="col-md-1" style="margin-right:10px;">
                                <img src="https://media-exp1.licdn.com/dms/image/C4D0BAQHiNSL4Or29cg/company-logo_100_100/0/1519856215226?e=1635379200&v=beta&t=lSS8vt65iF7dPztjHDtHYdeYJ-xJbb8sYwu2P98DXug" alt="Google" style="width:48px;height:48px;">
                            </div>
                            <div class="col-md-5">
                                <span>Google</span><a data-title="Verified account" id="qcver"><img style='width:12px;margin-top:-1px;' src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAyMCI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyBmaWxsLXJ1bGU9Im5vbnplcm8iPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik02Ljg5MSAxOS4wNGEyLjk5NyAyLjk5NyAwIDAxLTMuMTYyLTEuODI1bC0uMjc1LS42NjUtLjY2NS0uMjc1YTMgMyAwIDAxLTEuODI1LTMuMTYybC4wOTQtLjcxMy0uNDM4LS41NzFhMi45OTcgMi45OTcgMCAwMTAtMy42NTFsLjQzOC0uNTcxLS4wOTQtLjcxM2EyLjk5NyAyLjk5NyAwIDAxMS44MjUtMy4xNjJsLjY2NS0uMjc1LjI3NS0uNjY1QTMgMyAwIDAxNi44OTEuOTY3bC43MTMuMDk0LjU3MS0uNDM4YTIuOTk3IDIuOTk3IDAgMDEzLjY1MSAwbC41NzEuNDM4LjcxMy0uMDk0YTIuOTk3IDIuOTk3IDAgMDEzLjE2MiAxLjgyNWwuMjc1LjY2NS42NjUuMjc1YTMgMyAwIDAxMS44MjUgMy4xNjJsLS4wOTQuNzEzLjQzOC41NzFhMi45OTcgMi45OTcgMCAwMTAgMy42NTFsLS40MzguNTcxLjA5NC43MTNhMi45OTcgMi45OTcgMCAwMS0xLjgyNSAzLjE2MmwtLjY2NS4yNzUtLjI3NS42NjVhMyAzIDAgMDEtMy4xNjIgMS44MjVsLS43MTMtLjA5NC0uNTcxLjQzOGEyLjk5NyAyLjk5NyAwIDAxLTMuNjUxIDBsLS41NzEtLjQzOC0uNzEzLjA5NCIvPjxwYXRoIGZpbGw9IiMxZjZhZWQiIGQ9Ik03Ljc1NCAxNi45MDVhLjk5OS45OTkgMCAwMS43MzkuMTk4bC44OTkuNjlhMSAxIDAgMDAxLjIxNyAwbC44OTktLjY5YS45OTkuOTk5IDAgMDEuNzM5LS4xOThsMS4xMjQuMTQ4YTEgMSAwIDAwMS4wNTQtLjYwOGwuNDMzLTEuMDQ3YS45OTYuOTk2IDAgMDEuNTQxLS41NDFsMS4wNDctLjQzM2EuOTk5Ljk5OSAwIDAwLjYwOC0xLjA1NGwtLjE0OC0xLjEyNGEuOTk5Ljk5OSAwIDAxLjE5OC0uNzM5bC42OS0uODk5YTEgMSAwIDAwMC0xLjIxN2wtLjY5LS44OTlhLjk5OS45OTkgMCAwMS0uMTk4LS43MzlsLjE0OC0xLjEyNGExIDEgMCAwMC0uNjA4LTEuMDU0bC0xLjA0Ny0uNDMzYS45OTYuOTk2IDAgMDEtLjU0MS0uNTQxbC0uNDMzLTEuMDQ3YS45OTkuOTk5IDAgMDAtMS4wNTQtLjYwOGwtMS4xMjQuMTQ4YS45OTkuOTk5IDAgMDEtLjczOS0uMTk4bC0uODk5LS42OWExIDEgMCAwMC0xLjIxNyAwbC0uODk5LjY5YS45OTkuOTk5IDAgMDEtLjczOS4xOThMNi42MyAyLjk0NmExIDEgMCAwMC0xLjA1NC42MDhsLS40MzMgMS4wNDdhLjk5Ni45OTYgMCAwMS0uNTQxLjU0MWwtMS4wNDcuNDMzYS45OTkuOTk5IDAgMDAtLjYwOCAxLjA1NGwuMTQ4IDEuMTI0YS45OTkuOTk5IDAgMDEtLjE5OC43MzlsLS42OS44OTlhMSAxIDAgMDAwIDEuMjE3bC42OS44OTljLjE2MS4yMS4yMzMuNDc2LjE5OC43MzlsLS4xNDggMS4xMjRhMSAxIDAgMDAuNjA4IDEuMDU0bDEuMDQ3LjQzM2MuMjQ1LjEwMS40NC4yOTYuNTQxLjU0MWwuNDMzIDEuMDQ3YS45OTkuOTk5IDAgMDAxLjA1NC42MDhsMS4xMjQtLjE0OCIvPjwvZz48cGF0aCBzdHJva2U9IiNmZmYiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNNyAxMC4xbDIuMjk2IDIuNEwxMyA4Ii8+PC9nPjwvc3ZnPg=='></a><br>
                                <span style="font-size:12px;color:rgb(0,0,0,0.6);margin-top:-5px;position:absolute">21,914,438 followers</span><br>
                                <span style="font-size:12px;color:rgb(0,0,0,0.6);margin-top:-15px;position:absolute">10h • <span class="fa fa-globe-asia"></span></span>
                            </div>
                        </div>
                        <div style="font-size:14px;color:#444;font-family:Arial,Helvetica,sans-serif;margin-top:10px;" id="pox">
                            Today, Google CEO Sundar Pichai shared an update about our plans to return to the office ⬇️ https://goo.gle/2VkV52Q
                        </div>
                        <div style="margin-left:-15px;margin-top:10px;">
                            <img style="width:100%;" src="https://media-exp1.licdn.com/dms/image/C5609AQE4nCR3iVTTHA/company-photo_900_600/0/1519600077517?e=1632960000&v=beta&t=Syi5RHWpmDSjmusuLBSFo3ZFNCLa2V2TAXN_X2DNbfg" alt="Google">
                            <div style="background:#e0e0e0e0;color:#444;padding:5px 10px;padding-bottom:10px;">
                                <span style="font-size:12px;font-weight:bold">Vaccines and our return-to-office plans</span><br>
                                <span style="font-size:11px;color:rgb(0,0,0,0.5);position:absolute;margin-top:-8px;">blog.google • 3 min read</span>
                            </div>
                        </div>
                        <div style="border-bottom:0.5px solid #e0e0e0;margin-bottom:10px;margin-left:-15px;margin-top:20px;"></div>
                        <div style="margin-top:20px;" id="shares">
                            <a href="#" class="fa fa-heart" onclick="this.style = 'color:#444'"><br><span style="font-size:16px;color:#444;font-family:Arial,Helvetica,sans-serif;font-weight:400">Like</span></a>
                            <a href="#" class="fa fa-comment"><br><span style="font-size:16px;color:#444;font-family:Arial,Helvetica,sans-serif;font-weight:400">Comment</span></a>
                            <a href="#" class="fa fa-share-alt"><br><span style="font-size:16px;color:#444;font-family:Arial,Helvetica,sans-serif;font-weight:400">Share</span></a>
                            <a href="#" class="fa fa-paper-plane"><br><span style="font-size:16px;color:#444;font-family:Arial,Helvetica,sans-serif;font-weight:400">Send</span></a>
                        </div>
                    </div>
                    <div style="padding:10px 0;background:#f3f2ef;border:0;"></div>
                    <div style="text-align:left;padding-left:15px;" id="ssd">
                        <div class="row">
                            <div class="col-md-1" style="margin-right:15px;" id="imgres">
                            
                                <img src="https://media-exp1.licdn.com/dms/image/C4D03AQFTfFsp1EZtdg/profile-displayphoto-shrink_100_100/0/1572263637458?e=1632960000&v=beta&t=O1VaiGSKpcO_Yy-XaXrmIXGNLT1LIEodZ_zm4Rq_fuA" alt="Nodir Badriddinov" style="width:48px;height:48px;">
                            </div>
                            <div class="col-md-5">
                                <span>Nodir Badriddinov</span><br>
                                <span style="font-size:12px;color:rgb(0,0,0,0.6);margin-top:-5px;position:absolute">2K followers</span><br>
                                <span style="font-size:12px;color:rgb(0,0,0,0.6);margin-top:-15px;position:absolute">1w • <span class="fa fa-globe-asia"></span></span>
                            </div>
                        </div>
                        <div style="font-size:14px;color:#444;font-family:Arial,Helvetica,sans-serif;margin-top:10px;" id="pox">
                        Is your partner this Loyal to you?<br>And be beside you on until the end, even if you did not have any Millions?
                        </div>
                        <div style="margin-left:-15px;margin-top:10px;">
                        <?php
                            include("db.php");
                            $sql = "SELECT * FROM `post`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if($row["video"] == $_COOKIE["email"]){
                                        echo '<img style="width:100%;" src="'.$row["photo"].'" alt="Google">';
                                    }
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>    
                        </div>
                        <div style="border-bottom:0.5px solid #e0e0e0;margin-bottom:10px;margin-left:-15px;margin-top:20px;"></div>
                        <div style="margin-top:20px;" id="shares">
                            <a href="#" class="fa fa-heart" onclick="this.style = 'color:#444'"><br><span style="font-size:16px;color:#444;font-family:Arial,Helvetica,sans-serif;font-weight:400">Like</span></a>
                            <a href="#" class="fa fa-comment"><br><span style="font-size:16px;color:#444;font-family:Arial,Helvetica,sans-serif;font-weight:400">Comment</span></a>
                            <a href="#" class="fa fa-share-alt"><br><span style="font-size:16px;color:#444;font-family:Arial,Helvetica,sans-serif;font-weight:400">Share</span></a>
                            <a href="#" class="fa fa-paper-plane"><br><span style="font-size:16px;color:#444;font-family:Arial,Helvetica,sans-serif;font-weight:400">Send</span></a>
                        </div>
                        <div style="margin-top:20px;">
                        <?php
                            include("db.php");
                            $sql = "SELECT * FROM `db`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    if($row["email"] == $_COOKIE["email"] && $row["password"] == $_COOKIE["pass"]){
                                        echo '<img src="'.$row["file"].'" style="width:48px;height:48px;border-radius:50%;position:inherit;border:2px solid #fff;z-index:1;" />';
                                    }
                                }
                            } else {
                                echo "0 results";
                            }
                        ?>
                            <input placeholder="Add a comment..." type="text" style='border-radius:32px;width:85%;font-size:14px;color:#444;height:50px;outline:0;border:1px solid #e0e0e0;padding:0 15px;'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="fr">
                    <div>Today’s top courses</div>
                    <div style="font-size:14px;font-weight:bold;color:#444;">1. Preparing for a Career Transition over 50</div>
                    <span style="font-size:12px;color:rgb(0,0,0,0.6);padding-left:12px;position:absolute;font-weight:400">John Tarnoff</span>
                    <div style="border-bottom:0.5px solid #e0e0e0;margin-bottom:10px;margin-top:20px;"></div>
                    <div style="font-size:14px;font-weight:bold;color:#444;max-height:20px;overflow:hidden">2. 2. 15 Secrets Successful People Know.. about Time Management (getAbstract Summary)</div>
                    <span style="font-size:12px;color:rgb(0,0,0,0.6);padding-left:12px;position:absolute;font-weight:400">getAbstract</span>
                    <div style="border-bottom:0.5px solid #e0e0e0;margin-bottom:10px;margin-top:20px;"></div>
                    <div style="font-size:14px;font-weight:bold;color:#444;">3. Preparing for a Career Transition over 50</div>
                    <span style="font-size:12px;color:rgb(0,0,0,0.6);padding-left:12px;position:absolute;font-weight:400">John Tarnoff</span>
                    <div style="margin-top:50px;font-size:14px;font-weight:bold;font-family:Arial;margin-top:20px;">
                        <a href="#" style="text-decoration:none;color:rgb(0,0,0,0.4);">Show more on LinkedIn Learning <span class="fa fa-arrow-right"></span></a>
                    </div>
                </div>
                <div id="fr2">
                    <a href="#">
                        <img src="https://i.pinimg.com/564x/a3/b7/d7/a3b7d7247f2bbdbcd10f3589d5015903.jpg" style="width:300px" alt="Ads">
                    </a>
                </div>
                <div id="fr3">
                    About
                    Accessibility
                    Help Center

                    Privacy & Terms 
                    Ad Choices
                    Advertising

                    Business Services 
                    Get the LinkedIn app
                    More
                </div>
                <div style="font-size:12px;color:rgb(0,0,0,0.6);font-weight:bold;font-family:Arial, Helvetica, sans-sarif;">
                    &copy; LinkedIn Corporation © 2021
                </div>
            </div>
        </div>
    </section>
    <script>
        window.onscroll = function() {myFunction()};

        // Get the header
        var header = document.getElementsByTagName("header")[0];

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        }
    </script>
    <style>
        .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        }
        .sticky + section {
            padding-top: 90px;
        }
        #imgres img{
            border-radius:50%;
        }
        #shares a{
            padding:0 10px;
            text-align:center;
            text-decoration:0;
            color:#c5c5c5;
            font-size:20px;
        }
        #ssd img{
            box-sizing: border-box;
            background-clip: content-box;
        }
        #ssd img::selection{
            background:none;
        }
        #ffww{
            width:48px;
            height:48px;
        }
        #ssd span{
            font-size:15px;
            font-weight:bold;
            color:#444;
        }
        #ssd span::selection{
            background:none;
        }
        #ssd div::selection{
            background:none;
        }
        #post input::selection{
            background:none;
        }
        #body{
            background:#f3f2ef;
            font-size:18px;
            font-family:Arial,Helvetica,sans-serif;
            overflow-x:hidden;
        }
        #user div::selection,img::selection{
            background:none;
        }
        header{
            background:#fff;
            padding:6px;
            box-shadow: 0 2px 1px -1px #e0e0e0;
            max-height:60px;
            margin-bottom:40px;
            padding-left:20%;
            max-height:60px;
            overflow:hidden;
            width:100%;
        }
        #faq span{
            padding: 0 15px;
            font-size:20px;
        }
        #search{
            background:#eef3f8;
            color:#444;
            border-radius:2px;
            font-size:14px;
            font-weight:400;
            line-height:1.75;
            max-width:280px;
            width:100%;
            border:0;
            outline:0;
            padding:0 15px;
            height:35px;
            margin-left:10px;
        }
        #menu-right a{
            padding:0 15px;
            text-decoration:none;
            color:#444;
            opacity:0.5s;
            font-size:16px;
            font-weight:400;
        }
        #menu-right a span{
            font-size:14px;
        }
        #menu-right{
            max-width:100%;
            overflow:hidden;
        }
        #menu-right a::selection{
            background:none;
        }
        br::selection{
            background:none;
        }
        #user{
            border:1px solid #e0e0e0;
            background:#fff;
            border-radius:0.8rem;
            padding-bottom:10px;
        }
        #post{
            border:1px solid #e0e0e0;
            background:#fff;
            border-radius:0.8rem;
        }
        #post input{
            width:80%;
            height:50px;
        }
        #respost{
            border:1px solid #e0e0e0;
            padding-bottom:10px;
            background:#fff;
            border-radius:0.8rem;
        }
        #fr{
            border:1px solid #e0e0e0;
            margin-right:30px;
            margin-bottom:20px;
            background:#fff;
            border-radius:0.8rem;
            text-align:left;
            padding:10px;
            color:#444;
            font-weight:normal;
            font-size:16px;
            font-family:Arial,Helvetica,sans-serif;
        }
        #fr2{
            border:1px solid #e0e0e0;
            margin-right:30px;
            background:#fff;
            border-radius:0.8rem;
        }
        #fr3{
            font-size:12px;
            color:rgb(0,0,0,0.6);
            font-family:Arial, Helvetica, sans-serif;
            font-weight:bold;
            padding:20px;
            padding-left:40px;
            padding-right:40px;
        }
        #chan{
            border:1px solid #e0e0e0;
            margin-top:20px;
            background:#fff;
            border-radius:0.8rem;
            text-align:left;
            padding-bottom:10px;
        }
        #chan a{
            font-size:12px;
            text-decoration:none;
            padding-left:15px;
            font-family:Arial;
        }
        #chan span::selection,a::selection,div::selection{
            background:none;
        }
        #qcver[data-title]:hover:after {
            content: attr(data-title);
            padding: 5px;
            margin-top: 10px;
            color: #f7f7f7;
            background: rgb(31, 106, 237);
            font-size:16px;
            position: absolute;
            left: 0;
            top: 100%;
            font-size:12px;
            white-space: nowrap;
            z-index: 20px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 0px;
            border:1px solid rgb(31, 106, 237);
            font-weight: normal;
            font-family: Arial, Helvetica, sans-serif;
        }
        #qcver:hover{
            color: red;
            position: relative;
        }
        @media (max-width:1600px) {
            #row1{
                text-align:left;
                transition:0.5s;
            }
            #row1 svg{
                position: absolute;
                margin-left:-30px;
                transition:0.5s;
                text-align:center;
            }
        }
        @media (max-width:1400px) {
            #row1{
                text-align:left;
                transition:0.5s;
            }
            #row1 svg{
                position: absolute;
                transition:0.5s;
                text-align:center;
            }
            #user{
                width:165px;
            }
            #chan{
                width:165px;
            }
            #btnLog{
                width:165px;
            }
            #post img{
                width:42px;
                height:42px;
            }
            #post{
                margin-top:10px;
            }
            #post input{
                margin-bottom:10px;
                height:25px;
                margin-right:5px;

            }
            #faq{
                display: none;
            }
        }
        @media (max-width:1200px) {
            #row1{
                text-align:left;
                transition:0.5s;
            }
            #row1 svg{
                position: absolute;
                transition:0.5s;
                text-align:center;
            }
            #user{
                width:155px;
            }
            #chan{
                width:155px;
            }
            #btnLog{
                width:155px;
            }
        }
        @media (max-width:1200px) {
            #row1{
                text-align:left;
                transition:0.5s;
            }
            #row1 svg{
                position: absolute;
                transition:0.5s;
                text-align:center;
            }
            #user{
                width:145px;
            }
            #chan{
                width:145px;
            }
            #btnLog{
                width:145px;
            }
        }
        @media (max-width:1000px) {
            #row1{
                text-align:left;
                transition:0.5s;
            }
            #row1 svg{
                position: absolute;
                transition:0.5s;
                text-align:center;
            }
            #user{
                width:120px;
            }
            #chan{
                width:120px;
            }
            #btnLog{
                width:120px;
            }
        }
        @media (max-width:800px) {
            #row1{
                text-align:left;
                transition:0.5s;
            }
            #row1 svg{
                position: absolute;
                transition:0.5s;
                text-align:center;
            }
            #user{
                width:102px;
            }
            #chan{
                width:102px;
            }
            #btnLog{
                width:102px;
            }
        }
        @media (max-width:700px) {
            #menu-right{
                display:none;
            }
            #row1{
                text-align:left;
                transition:0.5s;
            }
            #row1 svg{
                position: absolute;
                transition:0.5s;
                text-align:center;
            }
            #user{
                width:100%;
                margin-left:-15%;
            }
            #chan{
                width:100%;
                margin-left:-15%;
            }
            #btnLog{
                width:100%;
                margin-left:-15%;
            }
            #post{
                margin-left:-15%;
                width:100%;
            }
        }
        @media (max-width:600px) {

            #row1{
                text-align:left;
                transition:0.5s;
            }
            #row1 svg{
                position: absolute;
                transition:0.5s;
                text-align:center;
            }
            #user{
                margin-left:-15%;
                margin-top:-20px;
            }
            #chan{
                margin-left:-15%;
            }
            #btnLog{
                margin-left:-15%;
            }
            
        }
        @media (max-width:400px) {
            #menu-right{
                margin-top:2px;
                transition:0.5s;
                display:none;
            }
            #user{
                margin-left:-15%;
            }

        }
    </style>
    <div>
        <form method="post" id="newpost">
            <input type="hidden" id="postnew" name="postnew">
            <button type="submit" id="ssl" name="ssl" style="display:none"></button>
            <?php
            include("db.php");
                if(isset($_POST["ssl"])){
                    $photo = $_POST["postnew"];
                    $sq2 = "INSERT INTO `post` (photo,video) VALUES ('$photo','$_COOKIE[email]')";
                    if ($conn->query($sq2) === TRUE) {
                        
                    }else {
                        echo "Error: " . $sq2 . "<br>" . $conn->error;
                  }
                }
            ?>
        </form>
    </div>

</body>
</html>