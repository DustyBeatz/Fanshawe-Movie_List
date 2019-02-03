<?php require_once('scripts/config.php');

confirm_logged_in();
//TODO LOGIN NEEDED

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to your admin page</title>
</head>
<body>
<h1>Admin Dashboard</h1>
<h3> Welcome <?php echo $_SESSION['user_name'];?></h3>
    <p>This is the admin dashboard page</p>

    <nav>
    <ul>
    <li><a href="#">Create User</a></li>
    <li><a href="#">Edit User</a></li>
    <li><a href="#">Delete User</a></li>
    <li><a href="scripts/caller.php?caller_id=logout">Sign Out</a></li>
    </ul>
    </nav>

    <a href="../index.php"> CLick here to see movie list</a> 
</body>
</html>