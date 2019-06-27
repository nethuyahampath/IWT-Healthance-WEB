<?php
require("dbconnect.php");
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="login.js"></script>

</head>

<body>


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

<br>
<br>
<br>


<center>

    <table border="0">
        <tr>
            <td>
                <table border="0">
                    <tr>
                        <td>
                            <img src="images/loginlogo.jpg" width="400">
                        </td>
                    <tr>
                        <td><br><br><font class="headfont">
                                Become a HEALTHANCE Member</font>
                            <br><br>
                            <a href="signup.php" style="text-decoration: none;font-family: Ebrima;font-size: 15px">Sign Up</a>
                            <br><br><br>
                            <font style="font-family: Ebrima;font-size: 16px;"> With HEALTHANCE you can <br>
                                insurance your health..
                                <br>
                                We deditated for your service
                                <br>24 hours..</font>
                        </td>

                    </tr>
                    </tr>
                </table>
            </td>


            <td  rowspan="6" width="30px">

            </td>

            <td  rowspan="6" width="1px" style="background-color: black">

            </td>

            <td  rowspan="6" width="30px">

            </td>

            <td>
                <div  style="background-color: #d8eaea;border-radius: 10px;padding: 20px;">


                    <?php
                    SESSION_START();

                    if( isset($_POST['login']))
                    {
                        if( empty($_POST['username']) || empty($_POST['password']) ) {


                            echo "<h2 style = 'font-family : Ebrima; color :blue; font-size: 25px;'>
                                    Enter Username and Password</h2>";
                        }
                        else
                        {
                            $un = $_POST['username'];
                            $pw = $_POST['password'];

                            $upquery = mysqli_query($connect,"SELECT * FROM users 
                                    WHERE username = '$un' AND passwrd = '$pw' " );

                            $rows = mysqli_num_rows($upquery);

                            while( $up = mysqli_fetch_array($upquery) )
                            {
                                $UP =  $up['username'];
                            }

                            if ($rows == 1)
                            {
                                $_SESSION['user_name'] = $UP;

                                header("Location: userhome.php" );
                            }
                            else
                            {
                                echo "<h2 style = 'font-family : Ebrima; color : blue;
                    font-size: 25px;'>Invalid Username OR Password</h2>";
                            }
                        }

                    }



                    ?>


                    <form method="post" name="loginuser" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                          onsubmit="logValidate()">
                        <table border="0">

                            <tr>
                                <td>
                                    <center>
                                        <h2><font style="font-family: Ebrima">HEALTHANCE Account Login</font></h2>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br>
                                    <font style="font-family:Ebrima;font-size: 20px;color: #377D7A">you directly enter your HEALTHANCE Member
                                        <br>account and password to log in.</font>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br><br>
                                    <input type="text" name="username" placeholder="&nbsp;&nbsp;Username"
                                           style="width: 380px;height: 40px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" name="password" placeholder="&nbsp;&nbsp;Password"
                                           style="width: 380px;height: 40px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="loginbut" name="login" type="submit" value="Login">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br>
                                    <a href="signup.php" style="text-decoration: none;font-family: Ebrima;
                                    font-size: 15px">Sign Up</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#" style="text-decoration: none;font-family: Ebrima;font-size: 15px">
                                        Forgot your password?</a>
                                    <br> <br><hr>
                                </td>
                            </tr>


                        </table>
                    </form>
                </div>
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
