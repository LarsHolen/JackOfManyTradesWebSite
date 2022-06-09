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
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>


    <body>
      <!-- NAV BANNER-->
      <?php require_once('../subPages/navBanner.php'); ?>
        <hr>


    <!-- Contact-->
    <p class="pageHeader">Contact</p>
  
        <!--TODOOOOO Contact form/email sender-->
        <hr>
        <fieldset>
            <legend >Message Me</legend>
            <form action="https://larsholen.com/public/sendEmail.php" method="POST">
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" name="name" required size="50">
                <br>
                <label for="message">Message:</label>
                <br>
                <textarea id="message" name="message" required rows="6" cols="50" maxlength="300"></textarea>
                <br>
                <div class="text-center">
                    <div class="g-recaptcha" data-sitekey="6LfBHAYgAAAAAOszzDb9f2zxD2-V5xztJg-kkEYP"
                    data-callback="callback"></div>
                </div>
                <button class="contactCenter" id="submit-button" type="submit" disabled>Send</button>
                <script type="text/javascript">
                    function callback(){
                        const submitButton = document.getElementById("submit-button");
                        submitButton.removeAttribute("disabled");
                    }
                </script>

            </form>
        </fieldset>
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
 

            <!-- Footer -->
        <?php require_once('../subPages/footer.php'); ?>
            <hr>

    </body>



</html>