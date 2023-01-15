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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
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
            h2{
                color:#fff;
                text-align: center;
            }
            #tble{
                align-items: center;
                text-align: left;
                font-size: 30px;
                font-size: x-large;
                color: midnightblue;
                border: 3px solid;
                width: 100%;
                border-collapse: collapse;
                padding: 15px;
                font-style:italic;
            }
            th, td {
                text-align: left;
                padding: 8px;
                color: #fff;
            }  
           tr:nth-child(even) {
               background-color:rgb(88, 121, 170);
               color:#fff;
            }
            tr:nth-child(odd) {
               background-color: midnightblue;
               color:#fff;
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
        <!--DISPLAY REQUESTS TO ADMIN FROM DATABASE-->

        <h2 style="color: midnightblue;">Bus requisition Requets:</h2>
        <table id="tble" style="border-collapse: collapse;">
            <th style="border-collapse: collapse;" height="40px">Bus number</th>
            <th style="border-collapse: collapse;" height="40px">Date</th>
            <th style="border-collapse: collapse;" height="40px">Time</th>
            <th style="border-collapse: collapse;" height="40px">Action</th>

            <!--Fetching table from database-->
            <?php
                //database connection
                $con = new mysqli("localhost", "root", "", "bus management system",3306);
               
                $sql = " SELECT * FROM request ";
                $result = $con->query($sql);
                //$mysqli->close();
                 // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Destination'];?></td>
                <td><?php echo $rows['Time'];?></td>
                <td><?php echo $rows['Date'];?></td>
                <td>
                <form method="post" action="AdminAddRequisition.php">
                <button class="btn btn-success mr-2">Approve</button>
                </form>
                <form method="POST">
                <input type="hidden" name="deleteID">
                <button class="btn btn-danger">Reject</button>
                </form>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
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