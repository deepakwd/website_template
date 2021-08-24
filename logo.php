<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>header page</title>
        <style>
            *{
                box-sizing: border-box;
            }
            body{
                font-family:Arial, Helvetica, sans-serif;
                padding:0;
                margin:0;
            }
            a{
                text-decoration: none;
            }
            ul {
                
                list-style-type:none;
            }
            .topmarquee{
                margin:0;
                padding:5px;
                font-size:15px;
                background-color: black;
                color:white;
                width:100%;
                font-weight:bold;
            }
            .header{
                width:100%;
                margin:0;
                padding:0;
               
                display:inline-block;
            }
            .brand1{
                width:40%;
                float:left;
            }
            .brand{
                padding:0;
                margin:0;
                display:flex;
                flex-direction: row;
                align-items: center;
                
            }
            .brandname{
                font-size:60px;
                padding-top:15px;
                margin:0;
                font-weight:bold;
                font-family:'bhofila';
            }
            .brandtitle{
                padding:0;
                margin:0;
                text-align:right;
                font-weight:bold;
                font-size:20px;
            }
            .brand2{
                width:60%;
                float:left;
            }
            
            .contact{
                padding:0;
                margin:0;
                display:flex;
                flex-direction: row;
                justify-content:space-between;
            }
            
            .follow h3,.login h3{
                margin:0;
                padding-top:15px;
                font-size:25px;
                font-weight:bold;
                text-align:center;
            }
            .follow p{
                margin:0;
                padding-top:5px;
                font-size:20px;
            }
            
            .socialicon{
                height:25px;
                width:25px;
                padding-right:5px;
                color:royalblue;
                padding-top:2px;
                padding-bottom: 0%;
                align-items: center;
                margin:0;

            }
            .socialicons{
                height:20px;
                width:30px;
                padding-right:5px;
                color:royalblue;
                padding-top:2px;
                padding-bottom: 0%;
                align-items: center;
                margin:0;

            }
            .socialicon:hover{
                box-shadow:0 8px 12px 0 rgba(00, 0, 0, 0.2);
            }
            .login{
                padding-right:40px;
                text-align:center;
            }
            .follow_icon:hover{
               height:35px;
               width:35px;
               background-color:tomato;
               border:1px solid tomato;
               border-radius:100%;
                color:white;
                padding:2px;

            }
            .login_button{
                padding:5px 10px;
                background-color:navy;
                border:none;
                border-radius:10px;
                font-size:20px;
                color:white;
                
            }
            .login_button:hover{
                font-weight:bold;
                font-size:22px;
                background-color:tomato;
                transition:0.2s;
            }
            
            @media screen and (max-width:600px){
                .brand1{
                    width:100%;
                    text-align:center;
                }
                .brand2{
                    width:100%;
                }
                .brand{
                    justify-content: center;
                }
            }
        </style>
    </head>
    <body>
        <div class="topmarquee">
           <marquee>Welcome Guys to apperar this website special than u for all.</marquee>
        </div>
        <header class="header">
            <div class="brand1">
                <div class="brand">
                    <div class="brandimage"><img src="icon/study.png "alt="webdayrilogo"style="height:90px;width:90px;margin:10px;">
                    </div>
                    <div>
                       <p class="brandname">WebDayri</p>
                       <p class="brandtitle">Online Web Support</p>
                        
                    </div>
                </div>
            </div>
            <div class="brand2">
               <div class="contact">
                    <div class="follow">
                       <h3>Enquiry</h3> 
                       <p><img src="icon/callne.png"class="socialicons">: +91 7808707697</p>
                       <p><img src="icon/email.png"class="socialicons">: webdayri0@gmail.com</p>
                       
                       
                    </div>
                    <div class="login">
                       <h3> Follow</h3>
                        <div style="margin-top:5px;margin-right:5px;">
                            <a href="#"><img src="icon/facebook.png"style="height:30px; height:30px;"class="follow_icon" ></a>
                            <a href="#"><img src="icon/twitter.png"style="height:30px; height:30px;"class="follow_icon" ></a>
                            <a href="#"><img src="icon/youtube.png"style="height:30px; height:30px;"class="follow_icon" ></a>
                            <a href="#"><img src="icon/linkedin.png"style="height:30px; height:30px;" class="follow_icon"></a>
                            <a href="#"><img src="icon/teligram.png"style="height:30px; height:30px;" class="follow_icon"></a>
                        </div>
                        <button class="login_button">Log In</button>    
                    </div>
               </div>
            </div>
        </header>
       <?php include "menu.php"; ?>
       <?php include "slide.php"; ?>
       <div style="height:300px;width:100%;background-color:tomato;"></div>
       <?php include "footer1.php"; ?>
    </body>
</html>