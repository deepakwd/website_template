<!DOCTYPE html>
<html>
    <head>
        <title>our service</title>
        <style>
            *{
                box-sizing: border-box;
            }
            .service_container{
                display:table;
                width:100%;
            }
            .service_container .web_cart{
                width:50%;
                height:auto;
                float:left;
                padding:10px;
            }
            .web_cart .web_box{
                width:100%;
                position:relative;
                box-shadow:0 4px 8px rgba(0,0,0,0.6);

            }
            .web_box img{
                width:100%;
                height:auto;

            }
            .web_box .web_content{
                padding:15px;
                text-align:center;
                position:absolute;
                top:0;
                left:0;
                color:white;
            }
            /* digital cart box container design start*/
            .service_container .digital_cart{
                width:50%;
                height:auto;
                float:left;
                padding:10px;
            }
            .digital_cart .digital_box{
                width:100%;
                position:relative;
                box-shadow:0 4px 8px rgba(0,0,0,0.6);

            }
            .digital_box img{
                width:100%;
                height:auto;
            }
            /* double class web conent and digital content both styling*/
            .web_box .web_content, .digital_box .digital_content{
                padding:15px;
                text-align:center;
                position:absolute;
                left:0;
                top:0;
                color:white;
                margin:60px 50px;
                background-color:rgba(0, 0, 0, 0.562);
            }
            .web_content h3, .digital_content h3{
                font-size:25px;
                margin:10px;
                padding:5px;
            }
            .web_content p, .digital_content p{
                border:2px solid tomato;
                font-size:20px;
                color:white;
                padding:15px;
                margin:10px 30px;
               
            }
            .web_content button,.digital_content button{
                padding:8px 20px;
                font-size:22px;
                background-color:tomato;
                outline:none;
                border:none;
                border-radius:10px;
            }
            .web_content button a,.digital_content button a{
                text-decoration:none;
                color:black;
            }
            @media screen and (max-width:600px){
                .service_container .web_cart,.service_container .digital_cart{
                    width:100%;
                }
                .web_box .web_content, .digital_box .digital_content{
                    margin:5px;
                    padding:5px;
                }
            }
        </style>
    </head>
    <body>
        <h1 style="text-align: center;">Our Services</h1>
        <div class="service_container">
            <div class="web_cart">
                <div class="web_box">
                   <img src="image/web develop.png" >
                   <div class="web_content">
                        <h3>Website Service</h3>
                        <p>
                            Here creating your website we use html, css, javaScript, JQuery, Mysql, PHP and fully responsive your website like:- Laptop, Tab and Mobile.
                        </p>
                        <button><a href="service.php">Full Details</a></button>
                   </div>
                   <h2 style="text-align:center;padding:10px;margin:0;">Responsive Website</h2>
                </div>
            </div>
            <div class="digital_cart">
                <div class="digital_box">
                    <img src="image/digitalm.png" >
                    <div class="digital_content">
                        <h3>Digital Marketing Services</h3>
                        <p>here is your website popular using digital platform like:- Facebook, Twitter, Google AdSence, Google AdWords, etc. </p>
                        <button><a href="service.php">Full Details </a></button>
                   </div>
                   <h2 style="text-align:center;padding:10px;margin:0;">Digital Marketing</h2>
                </div>    
            </div>
        </div>
    </body>
</html>