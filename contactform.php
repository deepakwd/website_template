<!DOCTYPE html>
<html>
    <head>
        <title>form</title>
        <style>
         *{
                box-sizing: border-box;
                font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            body{
                margin:0;
                padding:0;
            }
            
            .contact_form{
                box-shadow:0 8px 12px 0 rgba(00, 0, 0, 0.8);
                width:100%;
                padding:10px;
            }
            .contact_form h1{
                text-align: center;
                padding:0;
                margin:0;
            }
            .form_group{
                padding:5px;
            }
            .form_group label{
                font-size:18px;
            }
            .form_group input{
                font-size:16px;
                margin:0;
                padding:8px;
                width:100%;
            }
            .form_group textarea{
                width:100%;
                height:100px;
            }
            .form_group button{
                width:100%;
                font-size:20px;
                padding:8px;
                outline:none;
                cursor:pointer;
                background-color:rgba(0, 128, 0, 0.89);
                border:none;
                color:white;
                transition:0.2s;
            }
        /* hover effect in alll div in this container*/
            .form_group input:hover{
                box-shadow:0 8px 12px 0 rgba(00, 0, 0, 0.4);
                outline:none;
                border:none;
                margin:5px;
            }
            .form_group textarea:hover{
                box-shadow:0 8px 12px 0 rgba(00, 0, 0, 0.4);
                outline:none;
                border:none;
                margin:5px;
            }
            .form_group button:hover{
                background-color:tomato;
                font-size:22px;
                font-weight:bold;
                box-shadow:0 8px 12px 0 rgba(00, 0, 0, 0.4);
            }
        </style>
    </head>
    <body>
       
        
            <div class="contact_form">
                <h1>New Query</h1>
                <form>
                    <div class="form_group">
                        <label for="user">User Name: </label><br>
                        <input type="text" id="user"name="user" placeholder="Enter Your Name"> 
                    </div>
                    <div class="form_group">
                        <label for="email">Email Id: </label><br>
                        <input type="email"type="email" id="email"name="email" placeholder="Enter Your Email"> 
                    </div>
                    <div class="form_group">
                        <label for="phone">Phone No.: </label><br>
                        <input type="text"type="phone" id="phone"name="phone"placeholder="Enter Your Email"> 
                    </div>
                    <div class="form_group">
                        <label for="comment">Comment: </label><br>
                        <textarea type="text" id="comment"name="comment">

                        </textarea>
                    </div>
                    <div class="form_group">
                        <button type="submit">Submit</button> 
                    </div>
                </form>
            </div>
        
    </body>
</html>