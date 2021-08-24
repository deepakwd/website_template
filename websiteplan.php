<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>service style</title>
        <style>
            *{
                box-sizing:border-box;
            }
            .service_column{
                width:33.3%;
                float:left;
                padding:10px;
                font-family:Arial, Helvetica, sans-serif;
            }
            .service_plan{
                list-style: none;
                margin:0;
                padding:0;
                box-shadow:0 8px 12px 0 rgba(00, 0, 0, 0.2);
                transition:0.3s;
            }
            .service_plan .service_header{
                background-color:black;
                color:white;
                font-size:25px;
            }
            .service_plan li{
                border-bottom:2px solid rgb(233, 229, 229);
                padding:20px;
                text-align:center;
            }
            .service_plan .service_price{
                font-size:25px;
                background-color:#4682B4;
                color:white;
            }
            .service_btn{
                text-decoration:none;
                color:white;
                padding:0;
                text-align:center;
                font-size:18px;
                background-color:#4682B4;
                width:100%;
            }
            .service_btn a{
                text-decoration:none;
                color:white;
                font-size:18px;
            }
            .service_plan:hover{
                background-color:tomato;
                border:none;
                margin:-10px;
                box-shadow:0 12px 12px 0 rgba(00, 0, 0, 0.9);
            }
            .service_btn:hover{
                background-color:black;
            }
            .service_btn a:hover{
                font-size:25px;
                transition:0.2s;
                padding:10px 25px;
                background-color:tomato;
            }
           .service_row:after{
               content:" ";
               display:table;
               clear:both;
           }
           @media screen and (max-width:600px){
               .service_column{
                   width:100%;
               }
           }
        </style>
    </head>
    <body>
        <h1 style="text-align:center;margin-bottom:2px;">Website Plan</h1>
        <div class="service_row">
            <div class="service_column">
                <ul class="service_plan">
                    <li class="service_header">SIMPLE</li>
                    <li class="service_price">Rs. 1,000</li>
                    <li>domain regestration for 1 Year</li>
                    <li>free web hosting</li>
                    <li>Attractive HomePage Design</li>
                    <li>website maximum 5 page</li>
                    <li>Clients Logo,Graphic & Banner</li>
                    <li>No Editable Content</li>
                    <li>1 Year Free Maintenance</li>
                    <li>500mb web space for 1 Year</li>
                    <li>Duration 10 Days</li>
                    <li class="service_btn"><a href="#">Add To Cart</a></li>
                </ul>
            </div>
            <div class="service_column">
                <ul class="service_plan">
                    <li class="service_header">News/Blog</li>
                    <li class="service_price">Rs. 5,000</li>
                    <li>domain regestration for 1 Year</li>
                    <li>free web hosting</li>
                    <li>Attractive HomePage Design</li>
                    <li>website maximum 5 page</li>
                    <li>Clients Logo,Graphic & Banner</li>
                    <li>No Editable Content</li>
                    <li>1 Year Free Maintenance</li>
                    <li>500mb web space for 1 Year</li>
                    <li>Duration 20 Days</li>
                    <li class="service_btn"><a href="#">Add To Cart</a></li>

                </ul>
            </div><div class="service_column">
                <ul class="service_plan">
                    <li class="service_header">E-Commerce</li>
                    <li class="service_price">Rs. 10,000</li>
                    <li>domain regestration for 1 Year</li>
                    <li>free web hosting</li>
                    <li>Attractive HomePage Design</li>
                    <li>website maximum 5 page</li>
                    <li>Clients Logo,Graphic & Banner</li>
                    <li>No Editable Content</li>
                    <li>1 Year Free Maintenance</li>
                    <li>500mb web space for 1 Year</li>
                    <li>Duration 30 Days</li>
                    <li class="service_btn"><a href="#">Add To Cart</a></li>

                </ul>
            </div>
        </div>
    </body>
</html>