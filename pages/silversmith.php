<!DOCTYPE html>
<html>
     <!-- Metadata -->
     <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
        
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="Holens portfolio page" />
        <meta name="author" content="Lars Holen" />
        <title>Holen, a jack of many trades</title>

        <!--Link til head icon-->
        <link rel="icon" href="images/myicon.png" type="image/x-icon">
        <!--Link til css-->
        <link rel="stylesheet" href="../css/style.css" type="text/css">
    </head>


    <body>
      <!-- NAV BANNER-->
      <?php require_once('../pages/navbanner.php'); ?>
        <hr>

    <!-- Silversmithing-->
    <p class="pageHeader">Silversmithing</p>
  
    <div class="programming">
        <!--TODOOOOO change src-->
        <iframe style="height:100%;width:100%;" src="https://larsholen.com/public/loadSilversmithing.php" frameborder="yes" scrolling="yes" name="myIframe" id="myIframe"> </iframe>       
    </div>

    <div class="list place-items-center">
        <button class="nav_button">
            <a class="aref boxShadow" href="subPages\AddIndex.php">&nbsp;&nbsp;Flip Backwards&nbsp;&nbsp;</a>
        </button> 
        <button class="nav_button boxShadow">
            <a class="aref" href="subPages\SubIndex.php">&nbsp;&nbsp;Flip Forward&nbsp;&nbsp;</a>
        </button> 
    </div>

            <!-- Footer-->
        <?php require_once('../pages/footer.php'); ?>
            <hr>

    </body>



</html>