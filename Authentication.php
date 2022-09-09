<?php
error_reporting(0);
session_start();
$p=$_SESSION['message'];
$mysqli = new mysqli ('localhost', 'root', '', 'theater_db');

if(isset($_POST['Done']))
{
    $code = $_POST['code'];
    $otp = $mysqli->query("select * from `customer` where `customer`.`Email` = '$p' limit 1");
    $ll = $otp->fetch_assoc();

    if($ll["vk"]==$code)
    {
        header("Location: index.php");
    }
    else
    {
        {
            die ("Verification Code Didn't matched.");
        }

    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBAL PIE</title>
    <link rel="stylesheet" href="ppstyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <nav class="navbar">
        <div class="content">
      
            
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>


        <div class="outer">

            <div class="container">


                <div class="card">
                    <div class="inner-box" id="card">
                        <div class="card-front">
                            <div class="custom">
                                <form method="POST" action="">
                                    <p>Enter the Verification Code that was sent to your email.</p>
                                    <br>
                                    <br>
                                    <input type="number" name="code" class="input-box" placeholder="Verification Code" required>
                                    <br>
                                    <br>
                                    <input type="submit" value="submit" name="Done" style="background-color:lime" class="input-box">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="banner"></div>
            
    </nav>



    <script>
        const body = document.querySelector("body");
        const navbar = document.querySelector(".navbar");
        const menuBtn = document.querySelector(".menu-btn");
        const cancelBtn = document.querySelector(".cancel-btn");
        menuBtn.onclick = () => {
            navbar.classList.add("show");
            menuBtn.classList.add("hide");
            body.classList.add("disabled");
        }
        cancelBtn.onclick = () => {
            body.classList.remove("disabled");
            navbar.classList.remove("show");
            menuBtn.classList.remove("hide");
        }
        window.onscroll = () => {
            this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
        }
    </script>

</body>

</html>