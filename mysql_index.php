<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Interview Question</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <style>
            *{
                box-sizing: border-box;
            }
            body{
               
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                padding:0;
                margin:0;
            }
            
            .inter_btn_container{
                float:left;
                border:none;
                
                width:23%;
                height:auto;
            }
            .inter_btn_container button{
                display:block;
                background: inherit;
                color:black;
                padding:10px;
                width:100%;
                outline:none;
                border:none;
                cursor:pointer;
                transition:0.3s;
                font-size:20px;
                border-bottom:1px solid rgba(0, 0, 0, 0.664);
                background-color:rgba(64, 224, 208, 0.466);
                margin:2px;
            }
            .inter_btn_container button:last-child{
                border-bottom:none;
            }
            /*hover effect on button*/
            .inter_btn_container button:hover{
                background-color:tomato;
            }
            .inter_btn_container button.active{
                background-color:tomato;
                box-shadow:0 4px 8px rgba(0,0,0,0.6);
                font-size:22px;
                margin:5px;
                border:none;
            }
        /* content container styling*/
            .tabcontent{
                float:left;
                padding:10px;
                margin-left:5px;
                border-left:none;
                width:58%;
               
            }
            .tabcontent h1{
                text-align:center;
               
                margin:0;
                padding:8px;
                width:100%;
                font-size:25px;
            }
            /*right box sidebar container */
            .rightbox{
                width:20px;
                float:left;
                padding:10px;
            }
            .templeate_row{
                display:table;
            }
            .personality_row{
                display:table;
                width:100%;
            }
            .inter_temp_card{
                width:100%;
                padding:10px;
                box-shadow:0 4px 8px rgba(0,0,0,0.6);

            }
            .inter_q_box{
                width:100%;
                height:auto;
            }
            @media screen and (max-width:600px){
                .inter_btn_container{
                    width:38%;
                    float:left;
                }
                .tabcontent{
                    width:60%;
                   
                }
                .rightbox{
                    display:none;
                }
            }
        </style>
    </head>
    <body>
    <?php include "header.php"; ?>
    <?php include "menu.php"; ?>
        <!--first container button box start1111111111111111111111111-->
        <div class="inter_btn_container">
            <button class="tablinks" onclick="interBtn(event,'default')" id='defaultOpen'>Introduction</button>
            <button class="tablinks" onclick="interBtn(event,'history')"> Computer</button>
            <button class="tablinks" onclick="interBtn(event,'generation')"> Generation</button>
            <button class="tablinks" onclick="interBtn(event,'type')"> type</button>
            <button class="tablinks" onclick="interBtn(event,'inputDevice')"> input Device</button>
            <button class="tablinks" onclick="interBtn(event,'outputDevice')"> Output Device</button>
            <button class="tablinks" onclick="interBtn(event,'alu')"> ALU</button>
            <button class="tablinks" onclick="interBtn(event,'cpu')"> CPU</button>
            <button class="tablinks" onclick="interBtn(event,'memory')"> Memory</button>
            <button class="tablinks" onclick="interBtn(event,'unit')"> Unit</button>
            <button class="tablinks" onclick="interBtn(event,'multimedia')"> Multimedia</button>
            <button class="tablinks" onclick="interBtn(event,'software')"> Software</button>
            <button class="tablinks" onclick="interBtn(event,'operatingSystem')">Operating System</button>
            <button class="tablinks" onclick="interBtn(event,'startmenu')"> Start Menus</button>
            <button class="tablinks" onclick="interBtn(event,'System Tools')"> System Tools</button>
            <button class="tablinks" onclick="interBtn(event,'shortcut')"> Shortcut</button>
        </div>
        <!--second container content box start2222222222222222222222222222222222222-->
        <div>
            <div id="default"class="tabcontent">
                <div class="inter_temp_card">
                    <h1>Introduction</h1>
                        <h2>What is Computer</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita velit nobis eos facilis amet officia nesciunt illum! Rem atque quas excepturi cupiditate fuga pariatur iure repudiandae, assumenda porro nesciunt corrupti odio in inventore ab quisquam, illum mollitia dicta tempora nobis?</p>
                    
                    <!--start personality row container-->
                    <div class="personality_row">
                        <div>
                            <h1>Personality development</h1>
                            <div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quas minus ea, impedit beatae unde laudantium? Voluptatibus alias rerum quod. Quidem assumenda ipsam pariatur labore. Velit blanditiis ipsa sit iure?</p>
                                <h3>choose your look</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel possimus aliquid minima quos ratione necessitatibus autem praesentium obcaecati fuga cum.</p>
                                <h3>choose your look</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel possimus aliquid minima quos ratione necessitatibus autem praesentium obcaecati fuga cum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--change div container eb development inter-view question-->
            <div id="history"class="tabcontent">
                <div class="inter_temp_card">
                    <div>
                        <h3>this is teh web development job</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestias dolore a totam reprehenderit asperiores, maxime deleniti impedit beatae non?</p>
                    </div>
                   <div class="inter_q_box ui-corner-all">
                       <h3>What is Know about yourself ?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint rerum enim in temporibus ipsam necessitatibus!</p>
                       <h3>why you hairying this company</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus labore magni amet consectetur eum unde!</p>
                       <h3>tell me about yourself</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error maiores deleniti assumenda recusandae iusto molestiae voluptatem, perspiciatis tempore esse pariatur.</p>
                        <h3>your goal about this company</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque itaque cum magni inventore vero dolorem repudiandae, iusto nam saepe aperiam?</p>
                        <h3>why hairing you in this company</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis laboriosam placeat incidunt eveniet nostrum odio.</p>
                       
                   </div>
                </div>
            </div>
            <!--chage div digital marketing container-->
            <div id="generation" class="tabcontent">
                <div class="inter_temp_card">
                    <div>
                        <h3>this is teh web development job</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At molestias dolore a totam reprehenderit asperiores, maxime deleniti impedit beatae non?</p>
                    </div>
                   <div class="inter_q_box ui-corner-all">
                       <h3>box1</h3>
                       <p>content1</p>
                       <h3>box1</h3>
                       <p>content1</p>
                       <h3>box1</h3>
                       <p>content1</p>
                       
                   </div>
                </div>
            </div>
        </div>
        <!--side container start3333333333333333333333333333333333333333333333333-->
        <div class="rightbox">
            <div>
            <h2>web development sidebar</h2>
            </div>
        </div>
        <div style="display:table;width:100%;">
            <?php include "footer1.php"; ?>
        </div>
        
        <!-- Java Script code start-->
        <script>
            function interBtn(evt,cityName){
                var i,tabcontent,tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                tablinks = document.getElementsByClassName("tablinks");

                for(i = 0; i < tabcontent.length; i++){
                    tabcontent[i].style.display = "none";
                }
                for(i=0; i<tablinks.length;i++){
                    tablinks[i].className=tablinks[i].className.replace(" active"," ");
                }
                
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className +=" active";
            }
            document.getElementById("defaultOpen").click();
        </script>
        <!--jQuery code start-->
        <script>
            $(document).ready(function(){
                $(".inter_q_box").accordion({
                    collapsible:true,
                    icons:{
                        header:"ui-icon-circle-arrow-e",
                    activeHeader:"ui-icon-circle-arrow-s"
                    },
                    heightStyle:"content"
                });

            });
        </script>
    </body>
</html>