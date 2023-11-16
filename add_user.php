<?php
// Add record here...
?>

<html>

<head>
    <title>Insert New User</title>
</head>

<body>
    <h1>Insert New User</h1>
    <form action="" method="post">
        <input type="hidden" name="new" value="1">
        <input type="text" name="user_name" placeholder="Enter your name" required> <br>
        <input type="email" name="user_email" placeholder="Enter your email" required> <br>
        <input type="password" name="user_password" placeholder="Enter your password" required> <br>
        <input type="submit" value="Add Record">
    </form>

</body>

</html>