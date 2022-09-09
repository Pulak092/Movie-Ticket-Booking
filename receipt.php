<?php
error_reporting(0);

$mysqli = new mysqli ('localhost', 'root', '', 'theater_db');

$info=$mysqli->query("select * from books order by id desc limit 1;");
$data=$info->fetch_assoc();
?>

<!DOCTYPE html>

<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Payment Receipt</title>
   </head>
   <style>
    
    .ox{
        margin-left: 20%;
    }
   </style>

<body style="background:  url(); height: 100%; width:100%;background-size: cover;
    position: fixed;">

    
<div class="ox">
<h1 style="margin-left: 23%;margin-top: 5%;">Receipt</h1>

<style>
    
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
    padding: 7px;
    text-align: left;
    }
</style>
    


<br><br>
<br><br>
<tr>
<th>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <b style="margin-left: 7%;">Name:</b> </th>
<td><?php echo $data["firstname"]." ".$data["lastname"]; ?></td>
</tr>
<br><br>
<tr>
<th> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <b style="margin-left: 7%;">Contact NO:</b> </th>
<td><?php echo $data["contact_no"]; ?></td>
</tr>
<br><br>

<tr>
    <?php
        $id=$data["movie_id"];
        $Mo=$mysqli->query("select * from movies where `movies`.`id` =$id  limit 1;");
        $f=$Mo->fetch_assoc();
    ?>
<th>&nbsp; &nbsp; &nbsp; &nbsp; <b style="margin-left: 7%;">Movie Name:</b> </th>
<td><?php echo $f["title"]; ?></td>
</tr>
<br><br><br><br>

<table style="width:40%; margin-left: 10%">
<tr>
<th>Total seat:</th>
<td><?php echo $data["qty"]; ?></td>
</tr>
<tr>
<th>Paid:</th>
<td><?php echo $data["qty"]*170; echo "tk"; ?></td>
</tr>
<tr>
<th>Date:</th>
<td><?php echo $data["date"]; ?></td>
</tr>
<tr>
<th>Time:</th>
<td><?php echo $data["time"]; ?></td>
</tr>

</table>

</div>

<style>
    @media print{
        body * {
            visibility: hidden;
        }
        .ox , .ox * {
            visibility: visible;
        }
    }
</style>

<style>
    .button{
        position: absolute;
        left: 660px;
        top: 600px;
        background-size: cover;
        position: fixed;
    }
    .side{
        position: absolute;
        left: 800px;
        top: 650px;
        background-size: cover;
        position: fixed;
        
    }
</style>
<div class="button">
    <button onclick="window.print();">
        Print
    </button>
    <br> <br>
    <div class="side">
    <button>
        <a href="index.php"> Go to Home Page-></a>
    </button>
    </div>

    
</div>
    
</body>
</html>

