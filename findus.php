<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Find Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body bgcolor="#f0f8ff">
<table class="header" border="0" style="width: 100%">
    <tr>
        <td style="width: 200px">
            <a href="home.php"><img src="images/mainLogo.png" width=200></a>
        </td>

        <td style="width: 100px">
            <nav class="nav">
                <ul>
                    <li><a href="home.php"><font class="fontnav"><b>Home</b></font></a></li>
                </ul>
            </nav>
        </td>
        <td style="width: 100px">
            <nav class="nav">
                <ul>
                    <li><a href="services.php" fontnav"><b>Services</b></font></a></li>
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
            <input class="sb" type="submit" value="Search" style="background-color: black;border-radius: 6px;color: white;font-weight: bold;
             width:80px;height: 40px;">
        </td>
        <td style="width: 250px">

        </td>
        <td style="width: 80px">
            <input class="lb" type="button" value="Login" onclick="window.location.href='userlevels.php'" style="background-color: gold;border-radius: 6px;color: black;font-weight: bold;
            width: 80px;height: 40px;">

        </td>

    </tr>
    <tr>
        <td colspan="9"><hr style="height: 3px"></td>
    </tr>


</table>

<table align="center">
    <tr>
        <td width="400px">
            <div class="slider2">
                <a href="services.php" target="_blank">
                    <figure>

                        <div class="slide2">
                            <img src="images/services/icu2.jpg">
                            <div class="slide2">
                                <img src="images/services/lab3.jpg">
                            </div>
                            <div class="slide2">
                                <img src="images/services/radiology3.jpg">
                            </div>
                            <div class="slide2">
                                <img src="images/services/eye4.jpg">
                            </div>
                        </div>
                    </figure>
                </a>
            </div>
        </td>
        <td>
            <div id="googleMap" style="width:500px;height:300px;"></div>

            <script>
                function myMap() {
                    var mapProp= {
                        center:new google.maps.LatLng(6.927079,79.861244),
                        zoom:10,
                    };
                    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxAfu23Ds3BsMn_nQ1Zl7OlwCDhIPbRxo&callback=myMap"></script>
        </td>
        <td width="400px">
            <div class="slider2">
                <a href="services.php" target="_blank">
                    <figure>

                        <div class="slide2">
                            <img src="images/services/operation.jpg">
                        </div>
                        <div class="slide2">
                            <img src="images/services/eye2.jpg">
                        </div>
                        <div class="slide2">
                            <img src="images/services/radiology1.jpeg">
                        </div>
                        <div class="slide2">
                            <img src="images/services/lab1.jpg">
                        </div>
                    </figure>
                </a>
            </div>
        </td>
    </tr>
</table>
<br><br>
<hr>


<br><br><br><br><br><br>

<footer style="background-color:silver;padding: 10px;border-radius: 5px" align="center">
    <b><font color="black"> Copyright 2017 © <a href="home.php">H E A L T H A N C E</a> <br>
            (+94) 11 5 123 456  |  healthancehealthcare@gmail.com </font></b>
</footer>

</body>
</html>
