      <!doctype html>
      <?php
      include( "functions.php" );
      
      $obj =  new Functions();
      $soup = $obj->get_soup(); 
      $salad=$obj->get_salad();
      $cStarter=$obj->get_chikenStater();
      $vStarter=$obj->getVegStarter();
      ?>
      <html lang="en">
        <head>
        <style>
     
      
      </style>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">
          <link rel="icon" href="/ap_menu/images/favicon.ico">

          <title>AP Resturant</title>
          
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">          <!-- Bootstrap core CSS -->
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

            <section style=" background-image: url('images/gold.jpg')">
              <div class="container" style=" background-image: url('images/gold.jpg')">
                <h1 class="jumbotron-heading text-center" ><span class="badge  badge-dark">STARTERS</span></h1>
      <p>&nbsp;</p>
      <form action="listAllStaters.php">
              
              <div class="col text-center">
      <button type="submit" class="btn btn-link text-center font-weight-bold "   >List All Staters</button></div>
    </form>
      </section>
              </div>
            </section>
            <h2 style="text-align: center"><span class="badge badge-secondary">SOUPS</span></h2>
                <br>
            <div class="album py-5 bg-light" >
              <div class="container">

                <div class="row">
                
                      <?php
          while( $row = sparql_fetch_array( $soup ) )
          { $src_image= "wallpaper.jpg"
          ?>            
          <div class="col-md-4">
                    <div class="card mb-4 box-shadow" >
                    <?php
                    echo  '<img class="rounded-circle" alt="Cinque Terre" src="/ap_menu/images/' . str_replace(' ', '', $row["soupName"]) . '.jpg" style="width:  345px;
                    height: 200px;">'
                    ?>
                        <div class="card-body" style=" background-image: url('images/gold.jpg')">
                        <form method="get" action="displayDish.php">
                        <button  name="dishName" type="submit" class="btn btn-link" value="<?php echo $row["soupName"]; ?>"><?php echo $row["soupName"]; ?>
          </form><br>
          <p class="card-text">$ <?php echo $row["price"]; ?></p>
                        
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  <br>

          </div>
          </div>
          <h2 style="text-align: center"><span class="badge badge-secondary">SALADS</span></h2>
                  <br>
                  <div class="album py-5 bg-light" >
              <div class="container">

                <div class="row">
                  
                  <?php
          while( $row = sparql_fetch_array( $salad ) )
          { $src_image= "wallpaper.jpg"
          ?>            <div class="col-md-4" >
                    <div class="card mb-4 box-shadow" >
                    <?php
                    echo  '<img class="rounded-circle" alt="Cinque Terre" src="/ap_menu/images/' . str_replace(' ', '', $row["saladName"]) . '.jpg" style="width:  345px;
                    height: 200px;" alt="Card image cap">'
                    ?>
                        <div class="card-body" style=" background-image: url('images/gold.jpg')">
                        <form method="get" action="displayDish.php">
                        <button  name="dishName" type="submit" class="btn btn-link" value="<?php echo $row["saladName"]; ?>">
                        <?php echo $row["saladName"]; ?></p>
          </form>
          <p class="card-text">$ <?php echo $row["price"]; ?></p>
                        
                      </div>
                    </div>
                  </div>
                  <?php } ?>

                </div>
              </div>
              <h2 style="text-align: center"><span class="badge badge-secondary">CHICKEN STARTERS</span></h2>
                <br>
            <div class="album py-5 bg-light">
              <div class="container" >

                <div class="row" >
                
                      <?php
          while( $row = sparql_fetch_array( $cStarter ) )
          { $src_image= "wallpaper.jpg"
          ?>            
          <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <?php
                    echo  '<img class="rounded-circle" alt="Cinque Terre" src="/ap_menu/images/' . str_replace(' ', '', $row["csName"]) . '.jpg" style="width:  345px;
                    height: 200px;" alt="Card image cap">'
                    ?>
                        <div class="card-body" style=" background-image: url('images/gold.jpg')">
                        <form method="get" action="displayDish.php">
                        <button  name="dishName" type="submit" class="btn btn-link" value="<?php echo $row["csName"]; ?>"><?php echo $row["csName"]; ?>
          </form><br>
          <p class="card-text">$ <?php echo $row["price"]; ?></p>
                        
                      </div>
                    </div>
                  </div>



                  
                  <?php } ?>


                  </div>
              </div>



                  <h2 style="text-align: center"><span class="badge badge-secondary">VEGETARIAN STARTERS</span></h2>
                <br>
            <div class="album py-5 bg-light">
              <div class="container" >

                <div class="row" >
                
                      <?php
          while( $row = sparql_fetch_array( $vStarter ) )
          { $src_image= "wallpaper.jpg"
          ?>            
          <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <?php
                    echo  '<img class="rounded-circle" alt="Cinque Terre" src="/ap_menu/images/' . str_replace(' ', '', $row["vsName"]) . '.jpg" style="width:  345px;
                    height: 200px;" alt="Card image cap">'
                    ?>
                        <div class="card-body" style=" background-image: url('images/gold.jpg')">
                        <form method="get" action="displayDish.php">
                        <button  name="dishName" type="submit" class="btn btn-link" value="<?php echo $row["vsName"]; ?>"><?php echo $row["vsName"]; ?>
          </form><br>
          <p class="card-text">$ <?php echo $row["price"]; ?></p>
                        
                      </div>
                    </div>
                  </div>



                  
                  <?php } ?>
                  <br>

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
