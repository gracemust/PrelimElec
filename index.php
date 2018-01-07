<?php 

    include('server.php');

    if (empty($_SESSION['username'])) {
        header('location: login.php');
    }
?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>User registration system using php and mysql </title>
     <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
    <div class="header">
        <h2> Home Page</h2>
    </div>

    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                     ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION["username"])): ?>
            <p>WELCOME <strong> <?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style="color: red;" >Logout</a></p>
        <?php endif ?>

        <?php 
            $query = "SELECT * FROM users WHERE username != '".$_SESSION['username']."'";
            $result = mysqli_query($db, $query);
         ?>

        <center>
            <table cellspacing="2"  border="1">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($result)
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                        <td>".$row['username']."</td>
                                        <td>".$row['email']."</td>
                                        <td>".$row['password']."</td>";
                    ?>

                                    <td>
                                        <a href="edit.php?edit=1&user=<?php echo $row['id']; ?>">Edit</a>
                                        <a href="index.php?delete=1&user=<?php echo $row['id']; ?>">Delete</a>
                                    </td>
                                  </tr>
                    <?php
                            }
                    ?>
                </tbody>
            </table>
        </center>

    </div>

 </body>
 </html>