<?php
include 'connect.php';
$id=$_GET['username'];
$sql="select * from users where username='$id'";
$res=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($res))
{

    $fname=$row['fname'];
    $lname=$row['lname'];
    $username=$row['username'];
    $password=$row['passwrd'];
    $address=$row['address'];
    $contact=$row['contact'];
    $age=$row['age'];
    $email=$row['email'];


}
?>

    <html>
    <head>
        <title>Edit User Data </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="adminstyle.css">
    </head>
    <body>
    <form name="insert-data" action="" method="post">


        <table border="1">
            <tr><td>Edit User Data</td></tr>

            <tr>
                <td>
                    <label for="fn">First Name:</label>

                </td>
                <td>
                    <input type="text" class="form-control" value="<?php echo $fname; ?>"
                           name="fname" id="fn">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ln">Last Name:</label>
                </td>
                <td>
                    <input type="text" class="form-control" name="lname"
                    value="<?php echo $lname; ?>" id="ln">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pw">Password:</label>
                </td>
                <td>
                    <input type="text" class="form-control" value="<?php echo $password; ?>"
                           name="password" id="pw">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ad">Address:</label>
                </td>
                <td>
                    <input type="text" class="form-control" name="address"
                           value="<?php echo $address; ?>" id="ad">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="co">Contact:</label>
                </td>
                <td>
                    <input type="text" class="form-control" value="<?php echo $contact; ?>"
                    name="contact" id="co">
                </td>
            </tr>

            <tr>
            <td>
                <label for="ag">Age:</label>
            </td>
            <td>
                <input type="text" class="form-control" name="age"
                       value="<?php echo $age; ?>" id="ag">
            </td>
            </tr>


            <tr>
            <td>
                <label for="em">Email:</label>
            </td>
            <td>
                <input type="email" class="form-control" value="<?php echo $email; ?>"
                       name="email" id="em">
            </td>
            </tr>


            <tr>
                <td>
                    <input type="submit" name='submit' class="loginbut" value="Save" id="save">
                </td>

            </tr>
        </table>



    </form>
    </div>
    </div>
    </div>


    </body>
    </html>

<?php

if(isset($_POST['submit']))
{
    $fname=mysqli_real_escape_string($link,$_POST['fname']);
    $lname=mysqli_real_escape_string($link,$_POST['lname']);
    $password=mysqli_real_escape_string($link,$_POST['password']);
    $address=mysqli_real_escape_string($link,$_POST['address']);
    $contact=mysqli_real_escape_string($link,$_POST['contact']);
    $age=mysqli_real_escape_string($link,$_POST['age']);
    $email=mysqli_real_escape_string($link,$_POST['email']);


    $sql="update users set fname='$fname',lname='$lname', passwrd='$password', 
    address='$address', contact='$contact', age='$age',
    email='$email' where username='$id'";
    mysqli_query($link,$sql);
    ?>
    <script type="text/javascript">

        alert("Your Data Sucuessfully Updated");
        window.location="view-data.php";


    </script>

    <?php
}


?>