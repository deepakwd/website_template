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
               
                font-family:arial;
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
            <button class="tablinks" onclick="interBtn(event,'history')"> History</button>
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
            <!--1 what is computer in fundamental-->
            <div id="default"class="tabcontent">
                <?php include "fundamental/fundamentalIntroduction.php"; ?>
            </div>

            <!--2 history of computer in fundamental-->
            <div id="history"class="tabcontent">
                <?php include "fundamental/history.php"; ?>
            </div>

            <!--3 generation of computer in fundamental-->
            <div id="generation" class="tabcontent">
                <?php include "fundamental/generation.php"; ?>
            </div>
            <!--4 generation of computer in fundamental-->
            <div id="type" class="tabcontent">
                <?php include "fundamental/generation.php"; ?>
            </div>
            <!--5 generation of computer in fundamental-->
            <div id="inputDevice" class="tabcontent">
                <?php include "fundamental/inputdevice.php"; ?>
            </div>
            <!--6 generation of computer in fundamental-->
            <div id="outputDevice" class="tabcontent">
                <?php include "fundamental/outputdevice.php"; ?>
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