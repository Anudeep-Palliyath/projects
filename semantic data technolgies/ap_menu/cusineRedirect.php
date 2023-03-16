<!doctype html>
      <?php
      include( "functions.php" );
      
      $obj =  new Functions();
      $cusine = $_GET["cusine"];
      if($cusine=="Arabic"){

        header("Location: arabianCusine.php"); 
      }
      if($cusine=="South Indian"){

        header("Location: southIndianCusine.php"); 
      }
      if($cusine=="North Indian"){

        header("Location: northIndianCusine.php"); 
      }

      ?>