<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>webdayri_index_page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        <?php include "style.css"; ?>
        .contact_form_container{
            width:80%;
            margin:10px auto;
        }
        </style>
    </head>
    <body>
        <?php include "header.php"; ?>
        <!--insert menu file-->
       <?php include "menu.php"; ?>
       <!--insert slider-->
       <?php include "slide.php"; ?>
      
       <?php include "courescard.php"; ?>
       <?php include "webdigi_card.php"; ?>
       <div class="contact_form_container">
        <?php include "contactform.php"; ?>
       </div>
       
       <?php include "footer1.php"; ?>
       <!-- Js File-->
       <script >
           <?php include "script.js"; ?>
       </script>
    </body>
</html>