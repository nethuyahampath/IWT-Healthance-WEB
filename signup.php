<?php
require("dbconnect.php");
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="signupValidation.js"></script>
</head>

<body style="background-color:white">
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
            <input class="sb" type="submit" value="Search" style="background-color: black;border-radius: 6px;color: white;font-weight: bold;
             width:80px;height: 40px;">
        </td>
        <td style="width: 250px">

        </td>
        <td style="width: 80px">

        </td>

    </tr>


</table>
<hr style="height: 3px">
<br><br><br>

<center>

    <table border="0" style="background-color: white ">
        <tr>
            <td rowspan="10" width="50px"></td>

            <td><h2><font style="font-family: Ebrima;color:blue">Sign Up</font>
                </h2><hr>
            </td>

            <td rowspan="10" width="50px"></td>
        </tr>

        <tr>

            <td><font style="font-family: Ebrima;color: gray">
                    Welcome, HEALTHANCE Member! Once you have filled out the following information,
                    you can complete your registration.<br>
                    The information you provide will not be used in any other way,
                    so feel secure as you fill in your information.</font> </td>
        </tr>
        <tr>
            <td>
                <br><br>

                <?php
                if(isset($_POST["fname"])&&isset($_POST["lname"])&&isset($_POST["username"])&&isset($_POST["password"])
                    &&isset($_POST["confirmpassword"])&&isset($_POST["address"])&&isset($_POST["contact"])&&isset($_POST["age"])
                    &&isset($_POST["email"])){

                    $fname=$_POST["fname"];
                    $lname=$_POST["lname"];
                    $username=$_POST["username"];
                    $password=$_POST["password"];
                    $address=$_POST["address"];
                    $contact=$_POST["contact"];
                    $age=$_POST["age"];
                    $email=$_POST["email"];

                }
                else{
                    $error="<h2 style = 'font-family : Ebrima; color : blue;
                    font-size: 25px;'>Fill All Feilds</h2>";
                    echo $error;
                }



                if(isset($_POST["signup"])){
                    $insertString="INSERT INTO users VALUES('$fname','$lname','$username','$password',
            '$address','$contact','$age','$email')";

                    if(!mysqli_query($connect,$insertString)){
                        die("Error :".mysqli_error());

                    }
                    else{
                        header("Location: loginuser.php" );
                    }

                }
                ?>


                <form method="post" name="myForms" onsubmit="return signupValidate()"
                      action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <table border="0">
                        <tr>
                            <td style="width: 420px;height: 40px">
                                <font class="fromFont"> First Name:</font>
                            </td>
                            <td style="width: 420px;height: 40px">
                                <font class="fromFont"> Last Name:</font>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 420px;height: 40px">
                                <input type="text" name="fname" style="height: 38px;width: 418px">
                            </td>
                            <td style="width: 420px;height: 40px">
                                <input type="text" name="lname" style="height: 38px;width: 418px;text">
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 420px;height: 40px" colspan="2">
                                <font class="fromFont">Username:</font>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 840px;height: 40px" colspan="2">
                                <input type="text" name="username" style="height: 38px;width: 846px;">
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 420px;height: 40px">
                                <font class="fromFont"> Password:</font>
                            </td>
                            <td style="width: 420px;height: 40px">
                                <font class="fromFont"> Confirm Password:</font>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 420px;height: 40px">
                                <input type="password" name="password" style="height: 38px;width: 418px">
                            </td>
                            <td style="width: 420px;height: 40px">
                                <input type="password" name="confirmpassword" style="height: 38px;width: 418px">
                            </td>
                        </tr>


                        <tr>
                            <td style="width: 420px;height: 40px" colspan="2">
                                <font class="fromFont">Current Address:</font>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 840px;height: 40px" colspan="2">
                                <textarea name="address" style="height: 76px;width: 846px;"></textarea>
                            </td>
                        </tr>



                        <tr>
                            <td style="width: 420px;height: 40px">
                                <font class="fromFont"> Contact No:</font>
                            </td>
                            <td style="width: 420px;height: 40px">
                                <font class="fromFont"> Age:</font>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 420px;height: 40px">
                                <input type="text" name="contact" style="height: 38px;width: 418px">
                            </td>
                            <td style="width: 420px;height: 40px">
                                <input type="text" name="age" style="height: 38px;width: 418px">
                            </td>
                        </tr>


                        <tr>
                            <td style="width: 420px;height: 40px" colspan="2">
                                <font class="fromFont">E-mail:</font>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 840px;height: 40px" colspan="2">
                                <input type="email" name="email" style="height: 38px;width: 846px;">
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 840px;height: 40px" colspan="2">
                                <br>
                                <br>
                                <input type="submit" value="Sign Up" name="signup" style="height: 38px;width: 300px;"
                                       class="loginbut">
                            </td>
                        </tr>


                    </table>
                </form>




            </td>
        </tr>
    </table>
</center>

<br><br><br><br><br><br><br>
<hr>
<footer style="background-color:silver;padding: 10px;border-radius: 5px" align="center">
    <b><font color="black"> Copyright 2017 © <a href="home.php">H E A L T H A N C E</a> <br>
            (+94) 11 5 123 456  |  healthancehealthcare@gmail.com </font></b>
</footer>

</body>
</html>

<?php
mysqli_close($connect);
?>
