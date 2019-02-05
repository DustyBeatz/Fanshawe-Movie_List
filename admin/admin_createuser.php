<?php
    require_once('scripts/config.php');

    confirm_logged_in();
    
    if(isset($_POST['submit'])){
        //Do some preprocess for the data
        $fname = trim($_POST['fanem']);
        $username = trim($_POST['username']);
        $username = trim($_POST['password']);
        $username = trim($_POST['email']);


        //Validation?
        if(empty($username) || empty($password) || empty($email)){
            $message = 'Please fill the required fields';

        }else{
            $result = createUser($fname,$username,$password,$email);
            $message = 'data seems tight..';
        }
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Create User</title>
</head>
<body>

<?php if(!empty($message)):?>
<p><?php echo $message;?></p>
<?php endif;?>

<h2> Create User</h2>

<form>
    <label for="first-name">First Name:</label>
    <input type="text" id="first-name" name="fname" value=""><br><br>

    <label for="first-name">User Name:</label>
    <input type="text" id="username" name="username" value=""><br><br>

    <label for="first-name">Email:</label>
    <input type="email" id="email" name="email" value=""><br><br>

    <label for="first-name">Password:</label>
    <input type="text" id="password" name="password" value=""><br><br>

    <button type="submit" name="submit">Create User</button> 

    </form>
    
</body>
</html>