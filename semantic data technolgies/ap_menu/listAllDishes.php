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
    $allDishes=$obj->getAllDishes();
    ?>

<div class="dropdown show  text-center">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    SORT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="sortAllDishes.php?sort=high">RATING (High to Low)</a>
    <a class="dropdown-item" href="sortAllDishes.php?sort=low">RATING (Low to High)</a>
    
  </div>
</div><br>
            <div class="container">
  <div class="row">
    <div class="col-sm">
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

  <tbody>
  <div class="row">
    <div class="col-sm">
  <?php
          while( $row = sparql_fetch_array( $allDishes) )
          { $src_image= "wallpaper.jpg"
          ?>            
            
    <tr>
    
      <td><?php echo $row["dishName"]; ?></td>
      <td><?php echo $row["ingredients"]; ?></td>
      <td><?php echo $row["spicyLevel"]; ?></td>
      <td><?php echo $row["rating"]; ?></td>
    </tr>
                  <?php } ?>
             
             </div>
             </div>
             </div>
             </tbody>

             

             <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="/ap_menujs/holder.min.js"></script>
</html>