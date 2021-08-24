<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>course_index</title>
        <style>
            *{
                box-sizing: border-box;
            }
            body{
                margin:0;
                padding: 0;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            /**/
            .course_container{
                display:table;
                margin-top:5px;
                padding:0;
            }
            .course-menu{
                display:table;
                width:18%;
                float:left;
                margin:0;
                padding:0;
                margin-right:5px;
                height:2200px;
                background-color:rgb(166,241,233);
            }
           
            .course_btn{
                padding:0;
                margin:0;
                
                width:100%;
                height:auto;
            }
            .course_btn button{
                width:100%;
                display:block;
                padding:10px;
                font-size:18px;
                border:none;
                outline:none;
                cursor:pointer;
                border-bottom:1px solid black;
                background-color:transparent;
                margin-bottom:3px;
                transition:0.3s;
            }
            .course_btn button:last-child{
                margin-bottom:0;
                border-bottom:none;
            }
            .course_btn button:hover{
                box-shadow:0 4px 8px rgba(0,0,0,0.6);
                border:none;
                font-size:23px;
                font-weight: bold;
                background-color:rgb(255, 99, 71);
            }
            .course_btn button a{
                text-decoration: none;
                color:black;
            }
            /*button text styling*/
            .course_btn h2{
                text-align:center;
                margin:0;
                padding:8px;
                width:100%;
                background-color:tomato;
                font-size:23px;
                font-variant: normal;
                font-weight:bold;
                box-shadow:0 4px 8px rgba(0,0,0,0.4);
            }
            .course_btn h3{
               color:tomato;
                padding:5px;
                margin:5px;
            }
        /* fundamental container style*/
            .fundcard{
                width:50%;
                height:350px;
                padding:10px;
                float:left;
                background-color:tomato;
                margin:0;
                box-sizing: border-box;
            }
            .fund_content,.office_content{
                width:100%;
                height:100%;
                margin:0;
                padding:10px;
                border-radius:10px;
                text-align:center;
                box-sizing:border-box;
                background-color: lightgoldenrodyellow;
                transition:all 0.5s;
                
            }
            .fund_content:hover,.office_content:hover{
                
                border-end-end-radius: 20%;
                box-shadow:0 4px 8px rgba(0,0,0,0.4);
            }
            .fund_content h1,.office_content h1,.office_content h1 a{
                padding-top:0;
                margin-top:0;
                text-decoration: none;
                color:black;
                cursor:text;
            }
            .fund_content p,.office_content p{
                font-size:18px;
            }
            .fund_content button,.office_content button{
                margin-top:15px;
                padding:10px 30px;
                font-size:23px;
                cursor:pointer;
                border:none;
                outline:none;
                border-radius: 10px;
                background-color:rgba(255, 99, 71, 0.274);;
                transition:all 0.2s;

            }
            .fund_content button:hover,.office_content button:hover{
                font-weight:bold;
                font-size:25px;
                background-color: tomato;
                box-shadow:0 4px 8px rgba(0,0,0,0.6);


            }
            .fund_content button a,.office_content button a{
                text-decoration:none;
                color:black;
            }
            /*web developoment container style*/
            .cardContainer{
                display:table;
                width:80%;
                height:auto;
                background: tomato;
            }
            
            .cardContainer .card{
                width:33.3%;
                height:400px;
                padding:10px;
                float:left;
                background-color:tomato;
            }
            
            .flipcard{
                background-color: transparent;
                width:100%;
                height: 100%;
                perspective: 1000px;
                
            }
            .flipcard_inner{
                width:100%;
                height:100%;
                text-align: center;
                border:5px solid white;
                position:relative;
                transition:transform 0.8s;
                transform-style: preserve-3d;
            }
            .flipcard:hover .flipcard_inner{
                transform: rotateY(180deg);
            }
            .flipcard_front,.flipcard_back{
                width:100%;
                height:100%;
                position:absolute;
                backface-visibility: hidden;
            }
            .flipcard_front{
                background-color:lightgrey;
                color:black;
            }
            .flipcard_front img{
                width:50%;
                height:40%;
            }
            .flipcard_back{
                background-color:lightsteelblue;
                color:black;
                transform:rotateY(180deg)
            }

            /* second card*/
           
            .card1{
                width:66.7%;
                padding:10px;
                float:left;
                background-color:tomato;
            }
            .descard{
                background-color: lightgoldenrodyellow;
                width:100%;
                text-align: center;
                margin:auto auto;
               
            }
            .descard h2{
                padding:5px;
                margin:5px;
                font-size:30px;
            }
            .descard p{
                padding:5px;
                margin:5px;
                font-size:18px;
            }
            .descard button{
                padding:10px 30px;
                margin:10px 0;
                outline:none;
                border:none;
                background-color:rgba(255, 99, 71, 0.274);
                color:black;
                font-size:20px;
                cursor:pointer;
                transition:all 0.3s;
                border-radius:10px;
                
            }
            .descard button:hover{
                background-color: tomato;
                font-weight: bold;
                box-shadow:0 4px 8px rgba(0,0,0,0.6);

            }
            .descard button a{
                text-decoration: none;
                color:black;
            }
            /*media screen stylein using card in style*/
            @media screen and (max-width:600px){
                .course-menu{
                    width:20%;
                    float:left;
                }
                .cardContainer{
                    width:60%;
                    float:left;
                    top:0;
                    right:0;
                    
                }
                .cardContainer .card{
                    width:100%;
                }
                .fundcard{
                    width:100%;
                }
                .card1{
                    width:100%;
                }
            }
        </style>
    </head>
    <body>
        <?php include "header.php";?>
        <?php include "menu.php"; ?>
        <div class="course_container">
            <!--button container-->
            <div class="course-menu">
                <div class="course_btn">
                    <h2>BASIC</h2>
                    <button><a href="fundamental_index.php">Fundamental</a></button>
                    <button><a href="msOffice_index.php">MS-Office</a></button>
                </div>
                <div class="course_btn">
                    <h2>Web Development</h2>
                    <h3>Front-End</h3>
                    <button><a href="html_index.php">HTML</a></button>
                    <button><a href="css_index.php">CSS</a></button>
                    <button><a href="#">SASS</a></button>
                    <button><a href="bootstrap_index.php">BootStrap</a></button>
                    <button><a href="javaScript.php">JavaScript</a></button>
                    <button><a href="jquery_index.php">JQuery</a></button>

                    <h3>Back-End </h3>
                    <button><a href="php_index.php">PHP</a></button>
                    <button><a href="#">NODE JS</a></button>

                    <h3>DataBase</h3>
                    <button><a href="mysql_index.php">MySql</a></button>
                </div>
                <div class="course_btn">
                    <h2>Other Courses</h2>
                    <button><a href="#">Tally</a></button>
                    <button><a href="#">Typing</a></button>
                    <button><a href="#">Photoshop</a></button>
                </div>
                <div class="course_btn">
                    <h2>Example</h2>
                    <button><a href="#">HTML</a></button>
                    <button><a href="#">CSS</a></button>
                    <button><a href="#">JavaScript</a></button>
                    <button><a href="#">JQuery</a></button>
                    <button><a href="#">MySQL</a></button>
                    <button><a href="#">PHP</a></button>
                    <button><a href="#">Node JS</a></button>
                </div>
                <div class="course_btn">
                    <h2>Notes PDF</h2>
                    <button><a href="#">introduction</a></button>
                    <button><a href="#">Fundamental</a></button>
                    <button><a href="#">MS-Office</a></button>
                    <button><a href="#">HTML</a></button>
                    <button><a href="#">CSS</a></button>
                    <button><a href="#">BootStrap</a></button>
                    <button><a href="#">JavaScript</a></button>
                    <button><a href="#">JQuery</a></button>
                    <button><a href="#">MySQL</a></button>
                    <button><a href="#">PHP</a></button>
                    <button><a href="#">Node JS</a></button>
                </div>
            </div>
                            <!--Basic course container-->
            <!--first container basic of computer container-->
            <?php include "courseBasic_index.php"; ?>
            
                            <!--development container-->
            <!-- front end development container like html -->
            <?php include "courseFrontEndDevelopment_index.php"; ?>
            <br>
            <!--front end development card container like css javaScript and bootstrap-->
            <?php include "courseFrontEndDevelopmentCard_index.php";?>
            
            <!--Back End development container-->
            <!-- back end development insert php container using php-->
            <?php include "courseBackEndDevelopment_index.php";?>
            <!--third box start this box is container more thean html css and javascript container-->
            <br>
            <!-- back end development card like node js, mysql and wordpress-->
            <?php include "courseBackEndDevelopmntCard_index.php";?>
        </div>
        <?php include "footer1.php"; ?>
    </body>
</html>