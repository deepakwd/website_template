<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"type="text/css"href="style.css"/>
        <title>contact</title>
        <style>
            *{
                box-sizing: border-box;
                font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            body{
                margin:0;
                padding:0;
            }
            .Contact_banner{
                margin:0;
                padding:0;
                width:100%;
                height:150px;
                background-color:rgba(255, 99, 71, 0.699);
            }
            .contact_banner_content h1{
                padding-top:45px;
                margin:0 auto;
               
                text-align:center;
                font-size:50px;
                color:black;
            }
            .contact_container{
                width:100%;
                position:relative;
                display:table;
               
            }
            .card{
                width:50%;
                padding:10px;
                float:left;
            }
        /* company information contact design container*/
            .info{
                width:100%;
                box-shadow:0 8px 12px 0 rgba(00, 0, 0, 0.8);
                padding:20px;
            }
            .info h1{
                padding:0;
                margin:0;
                text-align:center;
            }
            .info p{
                font-size:20px;
            }
        /* Contact form design container */
           
        /* Location plact container*/
            .location{
                width:100%;
                height:200px;
                position:relative;
                background-color: blue;
            }
            @media screen and (max-width:600px){
                .contact_banner_content h1{
                    font-size:40px;
                }
                .card{
                    width:100%;
                }
            }
        </style>
    </head>
    <body>
        <?php include "header.php";?>
        <?php include "menu.php"; ?>
        <div class="Contact_banner">
            <div class="contact_banner_content">
                <h1>Contact Us</h1>
            </div>
        </div>
        <div class="contact_container" >
            <div class="card">
                <div class="info">
                    <h1>Company Info</h1>
                    <p>this is online plaform Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi, natus.</p>
                    <p>Company Name:webdayri</p>
                    <p>Founder and CEO: Deepak Sharma</p>
                    <p>Contact No:+91 7808707697</p>
                    <p>Email id: webdayri0@gmail.com</p>
                    <p>Location:darbhanga, Bihar(847304),India</p>
                    <p>website: https://www.webdayri.com</p>
                </div>
            </div>
            <div class="card">
                <?php include "contactform.php"; ?>
            </div>
        </div>
        <div class="location">
            <div>
                <h1 style="text-align: center;">Location:</h1>
            </div>
        </div>  
        <?php include "footer1.php"; ?>
       <!-- Js File-->
       <script src="script.js"></script> 
    </body>
</html>