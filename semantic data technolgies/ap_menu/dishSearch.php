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
    $search = $_GET["search"]; 
    $obj =  new Functions();
    $searchResult=$obj->getDishes($search);
    ?>
    <body>
    
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm">
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">Dish/Beverage</th>

      <th scope="col">Dish/Beverage Name</th>
      <th scope="col">Price</th>
      
    </tr>
  </thead>
</div>
</div>
<div class="row">
<div class="col-sm">
  <tbody>
  <?php
          while( $row = sparql_fetch_array( $searchResult) )
          { $src_image= "wallpaper.jpg"
          ?>            
            
    <tr>
            <td> <?php
                    echo  '<img class="rounded-circle" alt="Cinque Terre" src="/ap_menu/images/' . str_replace(' ', '', $row["name"]) . '.jpg" style="width:  225px;
                    height: 170px;">'
                    ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td>$ <?php echo $row["price"]; ?></td>
     
    </tr>
                  <?php } ?>
             </tbody>
             </div>
             </div>
             </div>


             
             
             
             <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="/ap_menujs/holder.min.js"></script>
</html>