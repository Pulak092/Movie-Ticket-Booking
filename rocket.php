<?php
error_reporting(0);

$mysqli = new mysqli ('localhost', 'root', '', 'theater_db');

if(isset($_POST['Enter']))
{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Payment Successfully")';  
    echo '</script>';
    header("Refresh:0; url=receipt.php");
}
?>

<!DOCTYPE html>

<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Rocket Payment</title>
   </head>
   <style>
    body{
        background-color: #5246a0;
    }
     .box{
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 400px;
        height: 380px;
        box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5)

     }

   </style>

<body>
    <div class="box">
        <div style="margin-left: 10%;">
        <h1>Rocket Payment:</h1><br>
            <form action="" method="POST">
                <h4>Mobile Number:</h4>
                <input type="number" required style="width: 86%; height: 30px;">
                <h4>Password:</h4>
                <input type="password" required style="width: 86%; height: 30px; ">
                <br><br><br>
                <input type="submit" name="Enter" value="Enter" style="width: 86%; height: 30px;background-color: #5246a0; " >
            </form>
        </div>
        

    </div>
</body>

</html>