<!DOCTYPE html>
<html>
    <head>
        <title>flipcart</title>
        <style>
            *{
                box-sizing: border-box;
            }
            .courseCart{
                width:33.3%;
                height:450px;
                padding:20px;
                padding-top:5px;
                float:left;
            }
            .courseCart_box{
                width:100%;
                height:100%;
                background: transparent;
                perspective: 1000px;
            }
            /*card box start*/
            .courseCart_inner{
                box-shadow:0 4px 8px rgba(0,0,0,0.6);
                text-align: center;
                width:100%;
                height:100%;
                position:relative;
                transition: transform 0.8s;
                transform-style: preserve-3d;
                border:5px solid white;
            }
            .courseCart_box:hover .courseCart_inner{
                transform: rotateY(180deg);
            }
            .courseCart_front,.courseCard_back{
                width:100%;
                height:100%;
                position:absolute;
                backface-visibility: hidden;
            }
            .courseCart_front img{
                width:100%;
            }
            .courseCart_front{
                background-color:thistle;
                color:black;
            }
            .courseCart_back{
                background-color: tomato;
                color:black;
                transform: rotateY(180deg);
            }
            @media screen and (max-width:600px){
                .courseCart{
                    width:100%;
                }
            }
        </style>
    </head>
    <body>
    
        <div class="courseCart">
            <div class="courseCart_box">
                <div class="courseCart_inner">
                    <div class="courseCart_front">
                        <img src="image/web develop.png">
                        <h2>Ms-Office</h2>
                        <P>Lorem ipsum dolor sit amet.</P>
                    </div>
                    <div class="courseCart_back">
                        <h2>webdayri</h2>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>