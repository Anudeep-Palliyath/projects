<!doctype html>
<html lang="en">
        <head>
        
      
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">
          <link rel="icon" href="/ap_menu/images/favicon.ico">

          <title>AP Resturant</title>
          
          <header>
            <div class="navbar navbar-dark bg-dark box-shadow">
              <div class="container d-flex justify-content-between">
                <a href="/ap_menu" class="navbar-brand d-flex align-items-center">
                  <strong>AP Resturant Menu</strong>
                </a>
              </div>
            </div>
          </header>
          <br>
          <!-- Bootstrap core CSS -->
          <link href="/ap_menu/css/bootstrap.min.css" rel="stylesheet">

          <!-- Custom styles for this template -->
          <link href="/ap_menu/css/album.css" rel="stylesheet">
        </head>
<?php
    include( "functions.php" );
      
    $obj =  new Functions();
    $dishName = $_GET["dishName"];
    $dishData=$obj->getdishData($dishName);
    ?>


<?php
                    echo  '<img class="rounded mx-auto d-block"  src="/ap_menu/images/' . str_replace(' ', '', $dishName) . '.jpg" style="width:  345px;
                    height: 200px;">'
                    ?><br>
                    <h2 class="text-center"><?php echo $dishName?></h2>
 
 <div class="container">
  <div class="row">
    <div class="col-sm"><br>
<table class="table table-bordered">
    
  <thead>
    <tr>
      
      <th scope="col">Dish Name</th>
      <th scope="col">Ingredients</th>
      <th scope="col">Spicy Level</th>
      <th scope="col">Rating(Scale of 10)</th>
    </tr>
  </thead>
</div>
</div>
<div class="row">
    <div class="col-sm"><br>
  <tbody>
  <?php
          while( $row = sparql_fetch_array( $dishData) )
          { $src_image= "wallpaper.jpg"
          ?>            
            
    <tr>
    
      <td><?php echo $row["dishName"]; ?></td>
      <td><?php echo $row["ingredients"]; ?></td>
      <td><?php echo $row["spicyLevel"]; ?></td>
      <td><?php echo $row["rating"]; ?></td>
    </tr>
                  <?php } ?>
          </tbody>
          </div>
          </div>
          </div>
</html>