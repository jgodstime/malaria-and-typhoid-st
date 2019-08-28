
<?php
// A session is required
if (!session_id()) @session_start();
$msg = new \Mini\Libs\FlashMessages();
use Mini\Model\Register;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>
   
Malaria and Typhoid
  </title>
  

  <noscript>
    <META http-equiv="refresh" content="0;URL=enableJavascript.php">
  </noscript>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  
  
  <script type="text/javascript" src="<?php echo URL; ?>repertory/bt_files/js/jquery-3.2.1.min.js"></script>
  
  <script src="<?php echo URL; ?>repertory/bt_files/js/bootstrap.js"></script>
  <link rel="stylesheet" href="<?php echo URL; ?>repertory/bt_files/css/dataTables.bootstrap.min.css">
  <link href="<?php echo URL; ?>repertory/bt_files/css/bootstrap.css" rel="stylesheet" type="text/css">
    
  <link href="<?php echo URL; ?>repertory/bt_files/css/mystylesheet.css" rel="stylesheet" type="text/css">


</head>

<body>

<?php $msg->display()?>
<div class="jumbotron my-jumbotron">
   
    <span>Malaria and Typhoid</span>

    <p>

    <?php

      if(!isset( $_SESSION["userId"])){
        ?>
        <a class="btn btn-lg btn-default" href="<?php URL ?>register" style="border-radius:20px; padding-left:30px;padding-right:30px;">Register</a>
        <a class="btn btn-lg btn-primary" href="<?php URL ?>home/login" style="border-radius:20px; padding-left:30px;padding-right:30px;">Login</a>
        <?php
        }else{
          ?>
        <a class="btn btn-lg btn-primary" href="<?php URL ?>home/malaria" style="border-radius:20px; padding-left:30px;padding-right:30px;">Malaria </a>
          <a class="btn btn-lg btn-default" href="<?php URL ?>home/typhoid" style="border-radius:20px; padding-left:30px;padding-right:30px;">Typhoid</a>
          <?php
        }
      ?>
    <!-- <span>Booking made easy...</span><br><br> -->
    
    </p>


</div>


<style>
    /* used to make the background image to be full*/

    body {
        margin: 0;
        padding: 0;
    }

    .my-jumbotron {
        background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('<?php echo URL; ?>img/patient.jpg');
      /* height:vh100; */
        background-repeat: no-repeat;
        height: 650px;
        background-size: 100% 100%;
        width: 100%;
        opacity: 2;
        font-size: 80px;
        color: white;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        display: block;
        padding-top: 2em;
        

    }
</style>


</body>
  </html>
