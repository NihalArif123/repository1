<!--Jaria batool
    04072013018
    BCSC 5th
    G9_CS_2
    BUS REQUISITION WEB PAGE
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                justify-content: center;
                background-image: url('https://img.freepik.com/premium-photo/highway-road-dry-grass-atacama-desert-chile-with-yellow-blue-landscape-south-america_124067-142.jpg?w=2000');
                background-repeat:no-repeat;
                background-size: cover;
                background-attachment: fixed;
                opacity: 1;
            }
            h1{
                color: midnightblue;
            }
            h2{
                color: midnightblue;
                text-align: center;
            }
            div.menu{
                background-color:rgb(18, 18, 88);
                position: relative;
            }
            div.menu a{
                color: beige;
                display: inline-block;
                text-align: center;
                padding: 15px 35px 15px 40px;
                text-decoration: none;
            }
            div.menu a:hover {
                background-color:cornflowerblue;
            }
            #login{
                background-color: rgb(88, 121, 170);
                opacity: 0.9;
                border:20px;
                border-color: black;
                padding: 20px 30px 20px 40px;
                margin-right: 50px;
                margin-left: 550px;
                margin-top: 50px;
                width:300px;
                height: 150px;
            }
            #foot1{
                width: 25%;
                float: left;
                margin-top: 5%;
                height: 200px;
                color: #fff;
            }
    
            #foot2{
               margin-top: 5%;
               width: 25%;
               float: right;
               height: 200px;
               color: #fff;
               border: none;
            }
            #left
            {
       
               width:20%;
            }
            #left p{
               font-size: 24px;
               color:white;
               margin-top: 70%;
            }
            #right{
               margin-top: 5%;
               width: 30%;
               height: 200px;
               color: #fff;
               border: none;
            }
            #footerdiv
            {
       
              display: flex;
            }
           #link
           {
              color:white;
           }
          #footer
           {
              height: 10%;
              background-color: rgb(18, 18, 88);
           }
        </style>
        <script>
            function ValidateEmail() {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var inputText = document.getElementById("email");
            if (inputText.value.match(mailformat)) {
                document.getElementById("errormail").innerHTML = "";
            }
            else {
                document.getElementById("errormail").innerHTML = " &nbsp&nbspInvalid email address!\n"
                document.getElementById("errormail").style.color = "red";
            }
        }
        var myInput = document.getElementById("password");
              
              // When the user starts to type something inside the password field
              myInput.onkeyup = function() {
                // Validate lowercase letters
                var lowerCaseLetters = /[a-z]/g;
                if(myInput.value.match(lowerCaseLetters)) {  
                  letter.classList.remove("invalid");
                  letter.classList.add("valid");
                } else {
                  letter.classList.remove("valid");
                  letter.classList.add("invalid");
                }
                
                // Validate capital letters
                var upperCaseLetters = /[A-Z]/g;
                if(myInput.value.match(upperCaseLetters)) {  
                  capital.classList.remove("invalid");
                  capital.classList.add("valid");
                } else {
                  capital.classList.remove("valid");
                  capital.classList.add("invalid");
                }
              
                // Validate numbers
                var numbers = /[0-9]/g;
                if(myInput.value.match(numbers)) {  
                  number.classList.remove("invalid");
                  number.classList.add("valid");
                } else {
                  number.classList.remove("valid");
                  number.classList.add("invalid");
                }
                
                // Validate length
                if(myInput.value.length >= 8) {
                  length.classList.remove("invalid");
                  length.classList.add("valid");
                } else {
                  length.classList.remove("valid");
                  length.classList.add("invalid");
                }
              }
        </script>
    </head>
    <!--BODY-->
    <body>
        <br>
        <p>
            <H1>
                <img src="logo.bmp" width="80px" height="80px">
                Le Bus
            </H1>
        </p>
        <div>
        <form id="login">
            <label for="email"> <b>Email/username:</b> </label><br>
            <input type="text" id="email" onchange="ValidateEmail()" required>
            <br>
            <label id="errormail" ></label>
            <br>
             <label for="password"> <b> Password:</b></label><br>
            <input type="password" id="password" placeholder="******"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required> <br><br>
            <a href="AdminHome.html"><b>Login</b></a>
        </form>
    </div>
        <br><br><br>
        <!--FOOTER-->
        <br><br><br>
<div id="footer">
    <div id="footerdiv">
        <div id="left">
            <p>
                Le Bus
            </p>
        </div>
            <div id="foot1">
                <!--<li><a href="#" id="link">Home</a></li>
                <li><a href="#" id="link">Schdeule</a></li>
                <li><a href="#" id="link">Seat reservation</a></li>
                <li><a href="#" id="link">Request bus requisition</a></li>
                <li><a href="#" id="link">Help desk</a></li>-->
                <br><br><br>
           
            </div>
            <div id="foot2">
                <li><a href="#" id="link">T & Cs</a></li>
                <li><a href="#" id="link">Privacy</a></li>
                <li><a href="#" id="link">Community</a></li>
                <li><a href="#" id="link">Mobile:+923303487342</a></li>
                <li><a href="#" id="link">Email:LeBus@gmail.com</a></li>
            </div>
            <!--FORM-->
            <div id="right">
            <form name="Newsletter" method="post" style="color: #fff;">
                Sign up </br>
                <input type="text" placeholder="E-mail" required>
                <input type="button" value="Sign up">
                
            </form>
           </div>    
    </div>
    <p style="color:white;font-size: 16px;position: relative;left:50%;">All rights reserved.</p>
</div>

    </body>
</html>