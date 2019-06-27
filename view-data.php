<?php
include 'connect.php';



?>

    <html>
    <head>
        <title>Insert User</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="adminstyle.css">
    </head>
    <body>
    <form name="insert-data" action="" method="post">

                    <table border="1">

                        <thead>
                        <tr>Healthance User Accounts</tr>
                        <tr>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Password</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Acton</th>

                        </tr>
                        </thead>
                        <?php
                        $sql="select * from users";
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
                        ?>



                        <tbody>
                        <tr>
                            <th scope="row"><?php echo $username; ?></th>
                            <td ><?php echo $fname; ?></td>
                            <td><?php echo $lname; ?></td>
                            <td><?php echo $password; ?></td>
                            <td><?php echo $address; ?></td>
                            <td><?php echo $contact; ?></td>
                            <td><?php echo $age; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><a href='edit-data.php?username=<?php echo $username; ?>'>
                                    Edit</a><br>
                                <a href='delete-data.php?username=<?php echo $username; ?>'>
                                    Delete</a></td>


                        </tr>
                        <?php
                        }

                        ?>
                        </tbody>
                    </table>



                    </div>
                    <div>
                        <a>&copy; HEALTHANCE health care center</a>
                    </div>
    </form>
    </div>
    </div>
    </div>


    </body>
    </html>
