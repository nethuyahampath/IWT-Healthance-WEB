<?php
require("dbconnect.php");
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Book an appointment</title>
    <link rel="stylesheet" type="text/css" href="app.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg">

<table class="header" border="0" style="width: 100%">
    <tr>
        <td style="width: 200px">
            <a href="home.php"><img src="images/mainLogo.png" width=200></a>
        </td>

        <td style="width: 100px">
            <nav class="nav">
                <ul>
                    <li><a href="home.php" fontnav"><b>Home</b></font></a></li>
                </ul>
            </nav>
        </td>
        <td style="width: 100px">
            <nav class="nav">
                <ul>
                    <li><a href="services.php"><font class="fontnav"><b>Services</b></font></a></li>
                </ul>
            </nav>
        </td>
        <td style="width: 120px">
            <nav class="nav">
                <ul>
                    <li><a href="findus.php"><font class="fontnav"><b>Find Us</b></font></a></li>
                </ul>
            </nav>
        </td>
        <td style="width: 120px">
            <nav class="nav">
                <ul>
                    <li><a href="aboutus.php"><font class="fontnav"><b>About Us</b></font></a></li>
                </ul>
            </nav>
        </td>
        <td style="width: 135px">
            <nav class="nav">
                <ul>
                    <li><a href="contactus.php"><font class="fontnav"><b>Contact Us</b></font></a></li>
                </ul>
            </nav>
        </td>

        <td style="width: 350px">
            <input type="text" placeholder="Search.." class="search" style="width:250px;border-radius: 1px;height: 30px">
            <input class="sb" type="submit" value="Search" style="background-color: black;border-radius: 6px;
            color: white;font-weight: bold;width:80px;height: 40px;">
        </td>
        <td style="width: 250px">

        </td>
        <td style="width: 80px">
            <input class="lb" type="button" value="Logout" onclick="window.location.href='home.php'"
                   style="background-color: gold;border-radius: 6px;color: black;font-weight: bold;
            width: 80px;height: 40px;">

        </td>

    </tr>
    <tr>
        <td colspan="9"><hr style="height: 3px"></td>
    </tr>


</table>


<br>

<h1 class="app">Appointment</h1>


<center><h1 class="book"><u>BOOK AN APPOINTMENT.</u></h1>


<form>
    <table border="0">

        <tr>
            <td colspan="2">
                <font class="fromFont">Username</font>
            </td>

        </tr>
        <tr  >
            <td colspan="2">
                <center> <input type="text" name="username" style="height: 30px;width: 840px"></center>
            </td>

        </tr>

        <tr>
            <td>
                <br><br>
                <font class="fromFont">Contact  </font>
            </td>
            <td>
                <br><br>
                <font class="fromFont" >Email &nbsp; Address </font>
            </td>
        </tr>
        <tr>
            <td>
                <center> <input type="text" name="phone"  style="height: 30px;
                width: 418px"></center>
            </td>
            <td>
                <center> <input type="email" name="email"  style="height: 30px;width: 418px"></center>
            </td>
        </tr>

        <tr>
            <td>
                <br><br>
                <font class="fromFont">Date &nbsp; Of &nbsp; Birth  </font>
            </td>
            <td>
                <br><br>
                <font class="fromFont">Appointment &nbsp; Date </font>
            </td>
        </tr>
        <tr>
            <td>
                <center> <input type="date" name="dob" placeholder="DD/MM/YYYY" style="height: 30px;width: 418px">
                </center>
            </td>
            <td>
                <center> <input type="date" name="adate" placeholder="DD/MM/YYYY" style="height: 30px;width: 418px">
                </center>
            </td>
        </tr>
        <tr>
            <td>
                <br><br>
                <font class="fromFont">Message </font>
            </td>
            <td>
                <br><br>
                <font class="fromFont">Booked &nbsp; With &nbsp; Us &nbsp; Before?</font>
            </td>
        </tr>
        <tr>
            <td>
                <center><textarea style="height: 60px;width: 420px"></textarea></center>
            </td>



            <td>
                <center>
                    <input type="radio" name="check" value="YES"><b>YES</b> &nbsp; &nbsp;
                    <input type="radio" name="check" value="NO"><b>NO</b>
                </center>
            </td>
        </tr>
    </table>

    </td>


<br><br><br><br>

    <input type="button" value="Confirm Booking" class="con">
    <br><br><br><br><br><br>
</form>

</center>
<table>
    <tr>
        <td rowspan="9" ><hr style="width: 1470px" height="0" color="darkblue">

        </td>
    </tr>
</table>

<footer style="background-color:silver;padding: 10px;border-radius: 5px" align="center">
    <b><font color="black"> Copyright 2017 © <a href="home.php">H E A L T H A N C E</a> <br>
            (+94) 11 5 123 456  |  healthancehealthcare@gmail.com </font></b>
</footer>


</body>
</html>