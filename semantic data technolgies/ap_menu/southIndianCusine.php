<!doctype html>
      <?php
      include( "functions.php" );
      
      $obj =  new Functions();
      $southIndianBiriyani = $obj->getSouthIndianBiriyani();
      $southIndianCurrry = $obj->getSouthIndianCurry();
      $southIndianBreads= $obj->getSouthIndianBreads();
      $southIndianDosa= $obj->getSouthIndianDosa();

?>
      <html lang="en">
        <head>
        
      
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">
          <link rel="icon" href="/ap_menu/images/favicon.ico">

          <title>AP Resturant</title>
          

          <!-- Bootstrap core CSS -->
          <link href="/ap_menu/css/bootstrap.min.css" rel="stylesheet">

          <!-- Custom styles for this template -->
          <link href="/ap_menu/css/album.css" rel="stylesheet">
        </head>
       
        <body>
              <header>
            <div class="navbar navbar-dark bg-dark box-shadow">
              <div class="container d-flex justify-content-between">
                <a href="/ap_menu" class="navbar-brand d-flex align-items-center">
                  <strong>AP Resturant Menu</strong>
                </a>
              </div>
            </div>
          </header>

        <main role="main">

            <section class=" text-center"  style=" background-image: url('images/gold.jpg')">
              <div class="container"  style=" background-image: url('images/gold.jpg')">
                <h1 class="jumbotron-heading"><span class="badge  badge-dark">SOUTH INDIAN</span></h1>
      <p>&nbsp;</p>
              </div>
            </section>
            <h2 style="text-align: center"><span class="badge badge-secondary">SOUTH INDIAN BIRIYANI</span></h2>
                <br>
            <div class="album py-5 bg-light">
              <div class="container">

                <div class="row">
            <?php
          while( $row = sparql_fetch_array( $southIndianBiriyani) )
          { $src_image= "wallpaper.jpg"
          ?>            
            
                
                     
          <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <?php
                    echo  '<img class="rounded-circle" alt="Cinque Terre" src="/ap_menu/images/' . str_replace(' ', '', $row["dishName"]) . '.jpg" style="width:  345px;
                    height: 200px;" alt="Card image cap">'
                    ?>
                        <div class="card-body" style=" background-image: url('images/gold.jpg')">
                        <form method="get" action="displayDish.php">
                        <button  name="dishName" type="submit" class="btn btn-link" value="<?php echo $row["dishName"]; ?>"><?php echo $row["dishName"]; ?>
          </form><br>
          <p class="card-text">$ <?php echo $row["price"]; ?></p>
                        
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  <br>

          </div>
          </div>
          <h2 style="text-align: center"><span class="badge badge-secondary">SOUTH INDIAN CURRY</span></h2>
                  <br>
                  <div class="album py-5 bg-light">
              <div class="container">

                <div class="row">
                  
                  <?php
          while( $row = sparql_fetch_array( $southIndianCurrry ) )
          { $src_image= "wallpaper.jpg"
          ?>            <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <?php
                    echo  '<img class="rounded-circle" alt="Cinque Terre" src="/ap_menu/images/' . str_replace(' ', '', $row["dishName"]) . '.jpg" style="width:  345px;
                    height: 200px;" alt="Card image cap">'
                    ?>
                        <div class="card-body" style=" background-image: url('images/gold.jpg')">
                        <form method="get" action="displayDish.php">
                        <button  name="dishName" type="submit" class="btn btn-link" value="<?php echo $row["dishName"]; ?>"><?php echo $row["dishName"]; ?>
          </form><br>
          <p class="card-text">$ <?php echo $row["price"]; ?></p>
                        
                      </div>
                    </div>
                  </div>
                  <?php } ?>

                </div>
              </div>
              <h2 style="text-align: center"><span class="badge badge-secondary">SOUTH INDIAN BREADS</span></h2>
                  <br>
                  <div class="album py-5 bg-light">
              <div class="container">

                <div class="row">
                  
                  <?php
          while( $row = sparql_fetch_array( $southIndianBreads ) )
          { $src_image= "wallpaper.jpg"
          ?>            <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <?php
                    echo  '<img class="rounded-circle" alt="Cinque Terre" src="/ap_menu/images/' . str_replace(' ', '', $row["dishName"]) . '.jpg" style="width:  345px;
                    height: 200px;" alt="Card image cap">'
                    ?>
                        <div class="card-body" style=" background-image: url('images/gold.jpg')">
                        <form method="get" action="displayDish.php">
                        <button  name="dishName" type="submit" class="btn btn-link" value="<?php echo $row["dishName"]; ?>"><?php echo $row["dishName"]; ?>
          </form><br>
                        <p class="card-text">$ <?php echo $row["price"]; ?></p>

                        </div>
                    </div>
                  </div>
                        <?php } ?>
                      </div>
                    </div>
                    
                    
                    <h2 style="text-align: center"><span class="badge badge-secondary">SOUTH INDIAN DOSA</span></h2>
                  <br>
                  <div class="album py-5 bg-light">
              <div class="container">

                <div class="row">
                  
                  <?php
          while( $row = sparql_fetch_array( $southIndianDosa ) )
          { $src_image= "wallpaper.jpg"
          ?>            <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <?php
                    echo  '<img class="rounded-circle" alt="Cinque Terre" src="/ap_menu/images/' . str_replace(' ', '', $row["dishName"]) . '.jpg" style="width:  345px;
                    height: 200px;" alt="Card image cap">'
                    ?>
                        <div class="card-body" style=" background-image: url('images/gold.jpg')">
                        <form method="get" action="displayDish.php">
                        <button  name="dishName" type="submit" class="btn btn-link" value="<?php echo $row["dishName"]; ?>"><?php echo $row["dishName"]; ?>
          </form><br>
                        <p class="card-text">$ <?php echo $row["price"]; ?></p>
                        
                      </div>
                    </div>
                  </div>
                  <?php } ?>

                </div>
              </div>
            </div>

          </main>
          
          <footer class="text-muted">
            <div class="container">
              <p class="float-right">
              <!--  <a href="#">Back to top</a> -->
              </p>
              <p></p>
            </div>
          </footer>

        <script src="/ap_menu/js/holder.min.js"></script>
        </body>
      </html>
