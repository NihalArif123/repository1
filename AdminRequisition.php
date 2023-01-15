<!--Jaria batool
    04072013018
    BCSC 5th
    G9_CS_2
    BUS REQUISITION WEB PAGE
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Requistion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--STYLE-->
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
           .button{
            width: 100px;
            height: 100px;
            background-color: midnightblue;
            color: #fff;
           }
           p{
            margin-left: 600px;
           }
           .opt{
            background-color:#fff;
            color: black;
            font-size: x-large;
            width: 300px;
            height: 90px;
           }
           .fm{
            margin-left: 650px;
           }
        </style>
    </head>
    <!--BODY-->
    <body>
        <br>
        <p>
            <H1>
                <img src="logo.bmp" width="80px" height="80px">
                Le Bus
            </H1>
            <div class="menu">
                <a href="AdminHome.html">Home</a>
                <a href="adminschedule.html">Schedule</a>
                <a href="Adminreservation.html">Seat reservation</a>
                <a href="AdminRequisition.html">Bus requisition</a>
                <a href="AdminTrack.html">Track bus</a>
            </div>
        </p>
        <br><br><br>
        <!--Body buttons-->
        <p>
                <br><br>
                <form class="fm" method="post" action="AdminRequisitionRequests.php">
                <button class="opt" value="Add requisition" >Requisition requests</button>
                <br><br>
            </form>
                <form class="fm" method="post" action="AdminAddRequisition.php">
                <button class="opt" value="Check requisition requests">Check requisition schedule</button>
                <br><br>
                <button class="opt" value="view requisition">Add any requisition</button>
                <br><br>
                <button class="opt" value="Check all requisition details">Check all requisition details</button>
                </form>
            </p>
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
                <li><a href="#" id="link">Home</a></li>
                <li><a href="#" id="link">Schdeule</a></li>
                <li><a href="#" id="link">Seat reservation</a></li>
                <li><a href="#" id="link">Bus requisition</a></li>
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