      <!doctype html>
      <?php
      include( "functions.php" );
      
      $obj =  new Functions();
      $soup = $obj->get_soup(); 
      $salad=$obj->get_salad();
      ?>
      <html lang="en">
        <head>
        <style>
      body  {
        background-image: url("/ap_menu/images/wallpaper.jpg");
        background-color: #cccccc;
      }
      </style>
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
            <div class="navbar navbar-dark bg-primary text-white">
              <div class="container p-2 my-2 bg-primary text-white">
                <a href="/ap_menu" class="navbar-brand d-flex align-items-center">
                  <strong>AP Resturant Menu</strong>
                </a>
              </div>
            </div>
          </header>

        <main role="main">

            <section class="jumbotron text-center">
              <div class="container">
                <h1 class="jumbotron-heading"><span class="badge badge-pill badge-warning"><?php echo "STARTER"; ?></span></h1>
      <p>&nbsp;</p>
              </div>
            </section>
            <h2 style="text-align: center"><span class="badge badge-secondary">SOUPS</span></h2>
                <br>
            <div class="album py-5 bg-light">
              <div class="container">

                <div class="row">
                
                      <?php
          while( $row = sparql_fetch_array( $soup ) )
          { $src_image= "wallpaper.jpg"
          ?>            
          <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <?php
                    echo  '<img class="card-img-top" src="/ap_menu/images/' . str_replace(' ', '', $row["soupName"]) . '.jpg" style="width:  345px;
                    height: 200px;" alt="Card image cap">'
                    ?>
                        <div class="card-body">
                        <form method="get" action="displayDish.php">
                        <button  name="dishName" type="submit" class="btn btn-link" value="<?php echo $row["soupName"]; ?>"><?php echo $row["soupName"]; ?>
          </form>
                        
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  <br>

          </div>
          </div>
          <h2 style="text-align: center"><span class="badge badge-secondary">SALADS</span></h2>
                  <br>
                  <div class="album py-5 bg-light">
              <div class="container">

                <div class="row">
                  
                  <?php
          while( $row = sparql_fetch_array( $salad ) )
          { $src_image= "wallpaper.jpg"
          ?>            <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <?php
                    echo  '<img class="card-img-top" src="/ap_menu/images/' . str_replace(' ', '', $row["saladName"]) . '.jpg" style="width:  345px;
                    height: 200px;" alt="Card image cap">'
                    ?>
                        <div class="card-body">
                        <form method="get" action="displayDish.php">
                        <button  name="dishName" type="submit" class="btn btn-link" value="<?php echo $row["saladName"]; ?>">
                        <?php echo $row["saladName"]; ?></p>
                        
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
