<!doctype html>
      <?php
      include( "functions.php" );
      
      $obj =  new Functions();
      $menuList = $_GET["menuList"];
      if($menuList=="Starter"){

        header("Location: starter.php"); 
      }
      if($menuList=="Beverages"){

        header("Location: beverage.php"); 
      }
      

      ?>