<?php
    function createUser($fname,$username,$password,$email){
        include('connect.php');



        //TODO: the following query will create a new row in tbl_user table
        //with user_fname = $fname
        //user_name = $username
        //user_pass = $password
        //user_email = $email
        //TODO: redirect user to index.php if success
        //otherwise return a message 

        create_user_query = 'INSERT INTO tbl_user(user_fname, user_name, user_pass, user_email)';
        create_user_query .= ' VALUES (:fname, :username, :password, :email');


        $create_user_set = $pdo->prepare($create_user_query);
        $create_user_set->execute(
            array(
                ':fname'=>$fname,
                ':username'=>$username,
                ':password'=>$password,
                ':email'=>$email
            )
            );

            if($create_user_set->rowCount()){
                redirect_to('index.php')
            }else{
                $message = 'Your hiring practices have failed you. this individual isnt up to date'
                return $message;
            }
    }