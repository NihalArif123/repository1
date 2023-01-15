<?php
include_once "SchClass.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <style>
        *{
            box-sizing: border-box;
        }
    
        body{
            font-size: medium;
            background-image:url("data:image/jpeg;base64,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");
                background-repeat: no-repeat;
                background-size:1400px 600px;
                background-position-y: 40%;
                
                
        }
        .cnt{
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            align-items:center;
            justify-content:flex-start;
            margin: 0px;
    
        }
        .seat{
            background-color: #444451;
            height: 12px;
            width: 15px;
            margin: 3px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .row{
            display: flex;
        }
        .seat.selected{
            background-color: rgb(191, 158, 252);
        }
        .seat.occupied{
            background-color: rgb(134, 252, 242);
        }
        .seat:nth-of-type(2){
            margin-right: 18px;
        }
        .seat:not(.occupied):hover{
            cursor: pointer;
            transform: scale(1.2);
        }
       .show.seat:not(.occupied):hover{
            cursor:default;
            transform: scale(1);
        }
        .show{
            background-color: rgb(110, 133, 236);
            padding: 2px 2px;
            border-radius: 5px;
    margin-right: 400px;
    margin-left: 500px;
            list-style-type: none;
            display: flex;
            justify-content:center;
            
        }
        .show li{
            display: flex;
            align-items: center;
            justify-content:centre;
            margin-left: 70px;
        
        }
     .show li small{
        margin-left: 5px;
        text-decoration: solid;
        color: rgb(243, 253, 253);
     }
     .tble{
        margin-left: 500px;
        margin-top: 100px;
        background-color: rgb(93, 173, 226);
            color: #fff;
            padding: 20px 25px 25px 25px;
            font-size: large;

    
     }
        h1{
            color: midnightblue;
        }
        div.menu{
            background-color:rgb(18, 18, 88);
            position: relative;
        }
        .head{
            background-color: rgb(33, 27, 114);
            color: #fff;
            padding: 15px 15px 15px 10px;
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
        #reservation{
            opacity: 0.9;
            border:10px;
            border-color: black;
            position: absolute;
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
</head>
<body>
    <p>
        <H1>
            <img src="logo.bmp" width="80px" height="80px">
            Le Bus
        </H1>
        <div class="menu">
            <a href="hommee.html">Home</a>
            <a href="schedule.php">Schedule</a>
            <a href="reservation.html">Seat reservation</a>
            <a href="requisition.php">Bus requisition</a>
            <a href="Track bus.html">Track bus</a>
            <a href="">Help</a>
        </div>
    </p>
    <h2 style="color: midnightblue; margin-left: 500px; font-size: 60px;"> schedule:</h2>
        <table id="tble" style="border-collapse: collapse; margin-left: 500px;
        margin-top: 100px;
        background-color: rgb(93, 173, 226);
            color: #fff;
            padding: 20px 30px 35px 25px;
            font-size: large;">
            <th style="border-collapse: collapse; background-color:midnightblue;  padding: 20px 30px 35px 25px;" height="40px" >Bus number</th>
            <th style="border-collapse: collapse;  background-color:midnightblue;  padding: 20px 30px 35px 25px;" height="40px">route</th>
            <th style="border-collapse: collapse;  background-color:midnightblue;  padding: 20px 30px 35px 25px;" height="40px">time</th>
            <th style="border-collapse: collapse;  background-color:midnightblue;  padding: 20px 30px 35px 25px;" height="40px">date</th>

    <!--<table class="tab">
        <tr class="head">
            <th style="padding:10px 10px 10px 15px;">BUS.NO</th>
            <th style="padding-right: 15px;">ROUTE</th>
            <th style="padding-right: 15px;">TIME</th>
        </tr>-->
           <!--<tr>
            <td>1</td>
            <td>f-6</td>
            <td>4:00</td>
        </tr>
        <tr>
            <td>2</td>
            <td>G-10</td>
            <td>4:00</td>
        </tr>
        <tr>
            <td>34</td>
            <td>f-10</td>
            <td>4:00</td>
        </tr>
        <tr>
            <td>7</td>
            <td>sadar</td>
            <td>4:00</td>
        </tr>
        <tr>
            <td>8</td>
            <td>pims</td>
            <td>4:00</td>
        </tr>
    </table>-->
</div>
<?php
                //database connection
                $con = new mysqli("localhost", "root", "", "bus managment system",3306);
               
                $sql = " SELECT * FROM schedule ";
                $result = $con->query($sql);
                //$mysqli->close();
                 // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['Busno'];?></td>
                <td><?php echo $rows['route'];?></td>
                <td><?php echo $rows['time'];?></td>
                <td><?php echo $rows['date'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>


    <br><br><br><br><br><br><br><br><br><br>
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
                    <li><a href="#" id="link">Request bus requisition</a></li>
                    <li><a href="#" id="link">Help desk</a></li>
                    <br><br><br>
               
                </div>
                <div id="foot2">
                    <li><a href="#" id="link">T & Cs</a></li>
                    <li><a href="#" id="link">Privacy</a></li>
                    <li><a href="#" id="link">Community</a></li>
                    <li><a href="#" id="link">Mobile:+923303487342</a></li>
                    <li><a href="#" id="link">Email:LeBus@gmail.com</a></li>
                </div>
</body>
</html>