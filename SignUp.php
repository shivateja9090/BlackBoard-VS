<?php
if(isset($_POST["signup"])){           
    echo "Signed Up:Thank You";
}

?>
<html >
<head>
    
    <Style>
        h3{                                          /*  Header Tag's  */
            font-family: monospace;
            color: aliceblue;
        }
       
       body{                                               
           background-color:  rgb(56, 60, 65);
           background-image: url("ORFEYB0.jpg");
           background-position: center;
           background-size: cover;
         
         
       }
       
       .Center{
           
           margin-top: 100px;                /*  Class for Aligning the content at Center  */
           text-align: center;
           display: flex;
           align-items: center;
           justify-content: center;
           
       
       }
       .CenterBox{
           background-image: url("chalkboardbackground.png");
           background-position:center ;
           background-size: cover;
           background-color:     snow;    /* Class For Creating a Box  */
           height: 500px;
           width: 700px;
           box-shadow:black;
           
          
       }
       .CenterBox form{
           display: flex;    
           margin: 10px;                      /*  Sorting Elements in Column Style  */                 
           flex-direction: column;
       }
       
       .CenterBox form input[type="text"], 
       .CenterBox form input[type="email"],                 /*  Adjusting Space Between the Elements  */
       .CenterBox form input[type="password"]{               /*  Element's of type {text,email,password}  */
       
           
           font-size: 20px;
           margin:8px 100px ;               
           border: none;
           border-bottom: 1px solid peru ;
       }
       .CenterBox form input[type="submit"] {
           color: rgb(0, 0, 0);
           background-color:coral;
           height: 40px;
           width: 80px;                                    /*  Adjusting the Button  */
           border: none;
           border-radius: 3px;
           font-weight:bolder ;
           margin:  auto ;
           
       }
       
          </Style>
    <meta charset="UTF-8">
    <title>Sign Up PAGE</title>
</head>
<body>
 
    <div class="Center">
      
        <div  class="CenterBox" >
                    
       
            <form  method="POST" >
               
                <img src="MyProjectLogom (2).png" title="Logo" style="width: 120px; height: 80px; margin: auto; padding-top: 10px; ">
                <h3> Sign Up </h3>
                <h3>Enter Your Detail's</h3>   
                <input type="text" name="firstname" placeholder="First Name" required>
                <input type="text" name="lastname" placeholder="Last Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="email" name="cemail" placeholder="Confirm Email" required>
                <input type="password" name="password" placeholder="Password" required >
                <input type="password" name="cpassword" placeholder="Confirm Password" required >
                <input type="submit" name="signup" value="SIGN UP" > 
                 <p><strong><a href="LogIn.php"> Already a User  </a></strong></p>
           </form>
        </div>
      
    </div>
  
</body>
</html>