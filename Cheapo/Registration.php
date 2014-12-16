<?php
session_start();
include 'register.php';
?>

<html>
<head>
	<titlt></title>
</head>
<body>
	<div id="Register Area">
                    
                    <h3 id="head">Register</h3>
                    <hr>
                    
        <div id="home">
                <div id="admin">
                    <input type="button" id="add_user_button" value="Add New User">
                    <input type="button" id="logoutbutton" value="Log out">
                </div>
                <hr>
                <div id="user_data">
                    <div id="new_user_error">
                        
                    </div>
                    <form action= "register.php" method ="get">
                        <br><br>
                        First Name: <br>
                        <input type="text" id="firstname"> <br>
                        Last Name:<br>
                        <input type="text" id="lastname"><br>
                        Username:<br>
                        <input type="text" id="username"><br>
                        Email:<br>
                        <input type="text" id="email"><br>
                        Password:<br>
                        <input type="password" id="password"><br><br>
                        Confirm Password:<br>
                        <input type="password" id="password_confirm"><br><br>
                        <input type="submit" id="new_user_sub" name="new_user_sub" value="Submit">
                        <input type="button" id="new_user_cancel" value="Cancel">
                     
                    </form>
                    
                </div>
        </div>
    </div>
</body>
</html>