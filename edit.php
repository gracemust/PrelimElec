<?php include('server.php'); ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>Edit User</title>
     <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
    <div class="header">
        <h2> Edit Information </h2>
    </div>

    <?php 
        $query = "SELECT * FROM users WHERE id = '".$_GET['user']."'";
        $result = mysqli_query($db, $query);

        while($user = mysqli_fetch_assoc($result)){
            $id = $user['id'];
            $username = $user['username'];
            $email = $user['email'];
            $password = $user['password'];
        }
     ?>

    <form method="post" action="server.php" >
        <div class="input-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </div>

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1" value="<?php echo $password; ?>">
        </div>

        <div class="input-group">
            <button type="submit" name="edit" class="btn">Submit</button>
        </div>
    </form>
 </body>
 </html>