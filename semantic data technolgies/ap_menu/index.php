<!doctype html>
<?php
include( "functions.php" );
 
$obj =  new Functions();
$cusine = $obj->getCusine(); 
$menuList = $obj->getMenuList();
?>
<html lang="en">
  <head>
   
  
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/ap_menu/images/wallpaper.jpg">

    <title>AP RESTURANT</title>

    <!-- Bootstrap core CSS -->
    <link href="/ap_menu/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">  
    <!-- Custom styles for this template -->
    <link href="/ap_menu/css/album.css" rel="stylesheet">
  </head>
  
  <div >
  <style>
      main  {
        background-image: url("images/gold.jpg");
        background-color: #cccccc;
      }
      div {
        background-image: url("images/gold.jpg");
      }
      </style>
  <body>
  
    <header>
    <nav class="navbar navbar-dark bg-light">
  <!-- Navbar content -->
  <a class="navbar-brand text-dark font-weight-bold">"Your satisfaction is our success"</a>
  <form class="form-inline" method="get" action="dishSearch.php" >
    <input name ="search" class="form-control mr-sm-2" type="text" placeholder="Search Dishes & Beverages" aria-label="Search">
    <button class="btn btn-sm btn-outline-secondary" type="submit">SEARCH</button>
  </form>
</nav>
          </a>
        </div>
      </div>
    </header>
    <img src="/ap_menu/images/logo.webp" class="mx-auto d-block"  style="width:  345px;
                    height: 200px;"> 
                    <h1 class="text-center">AP RESTURANT</h1>
      

    <main role="main" style ="background-image: url('images/wallpaper.jpg');">
    
      <section class="jumbotron img-center" >
        <div class="container">
          <h2 class="jumbotron-heading text-dark text-center">SEARCH MENU</h1>
          <form  method="get" action="menuRedirect.php">
            <p class="lead text-muted text-center" >
             <select  class="dropdown" name="menuList" style="width:250px">
                <?php while( $rowl = sparql_fetch_array( $menuList ) )
		{?>
                <option value="<?php echo($rowl["name"]); ?>"><?php echo($rowl["name"]); ?></option>
                <?php } ?>

              </select>
            </p>

            <p>
            <div class="col text-center">
              <button class="btn btn-info button-center" type="submit" style="width:150px">Search</button>
              </div>
            </p>
            </form>
    </div>
    <div class="container">
        <h2 class="jumbotron-heading text-dark text-center">SEARCH DISHES BY CUISINES</h1>
          <form method="get" action="cusineRedirect.php">
            <p class="lead text-muted text-center" >
             <select name="cusine" style="width:250px">
                <?php while( $rowl = sparql_fetch_array( $cusine ) )
		{?>
                <option value="<?php echo($rowl["cName"]); ?>"><?php echo($rowl["cName"]); ?></option>
                <?php } ?>

              </select>
            </p>

            <p>
            <div class="col text-center">
              <button class="btn btn-info button-center" type="submit" style="width:150px">Search</button>
              </div>
            </p>
            </form>
            <form action="listAllDishes.php">
              <br>
              <div class="col text-center">
              <button class="btn btn-link-info button-center" type="submit" style="width:150px">LIST ALL DISHES</button>
              </div>
    </form>
      </section>

      
        
      
        <!-- <div class="album py-5 bg-light">
          <div class="container">

            <div class="row">
              <?php
      while( $row = sparql_fetch_array( $result ) )
      {
      ?>
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img src='<?php echo($row["link"]); ?>' data-src="holder.js/100x225" alt='Thumbnail' class="card-img-top"/>
                    <div class="card-body">
                    <p class="card-text"><?php echo($row["name"]); ?></p>
                  </div>
                </div>
              </div>
              <?php } ?>

            </div>
          </div>
        </div> -->

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
        <!--  <a href="#">Back to top</a> -->
        </p>
        <p></p>
      </div>
    </footer>

  
  </body>  </div></section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="/ap_menujs/holder.min.js"></script>
</html>
