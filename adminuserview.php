<?php
include('adminremoveusers.php');
?>
<!DCOTYPE html>
<html>
<head>
    <title>Users Views</title>
<link rel="stylesheet" type="text/css" href="adminstyle.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="signupValidation.js"></script>
</head>
<body>



    <h2>Healthance User Accounts</h2>

    <form method="post" name="myForms" onsubmit="return signupValidate()"
          action="adminremoveusers.php">
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
                <td style="width: 420px;height: 40px" colspan="2">
                    <font class="fromFont"> Password:</font>
                </td>

            </tr>

            <tr>
                <td style="width: 420px;height: 40px" colspan="2">
                    <input type="password" name="password" style="height: 38px;width: 418px">
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
                    <button type="submit" name="save" class="btn">Save</button>

                </td>
            </tr>


        </table>
    </form>



    <table border="1">
        <thead>
        <tr>

            <th>Username</th>
            <th>password</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                Jhon
            </td>
            <td>
                un
            </td>
            <td>
                <a href="#">Edit</a>
            </td>
            <td>
                <a href="#">Delete</a>
            </td>
        </tr>
        </tbody>
    </table>






</body>
</html>

   <!--     </tbody>
        <?php
/*

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $result = mysqli_query($connect,"SELECT username FROM users ORDER BY username");

            while($row = mysqli_fetch_array($result)) {

                $un=$row['username'];
                */?>

                <tr><td><?php /*echo $row['username']*/?> <td><input type=\"button\" name=\"remove\" value=\"Remove\"
                                                                 onclick=\"window.location.href='removeuser.php'\"></a> </td></td></tr>
           </td>" ;
                echo "<br>";


        }
        ?>

    </table>
</div>



    <footer style="background-color:silver;padding: 10px;border-radius: 5px" align="center">
        <b><font color="black"> Copyright 2017 © <a href="home.php">H E A L T H A N C E</a> <br>
                (+94) 11 5 123 456  |  healthancehealthcare@gmail.com </font></b>
    </footer>
</body>
</html>

--><?php
/*mysqli_close($connect);
*/?>