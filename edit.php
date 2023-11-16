<?php
// Edit record here...
?>

<html>

<head>
    <title>Update User</title>
</head>

<body>
    <h1>Update User</h1>
   
    <form action="" method="post">
        <input type="hidden" name="new" value="1">
        <input type="hidden" name="user_id" value=""> <br>
        <input type="text" name="user_name" value="" required> <br>
        <input type="email" name="user_email" value="" required> <br>
        <input type="password" name="user_password" value="" required> <br>
        <input type="submit" value="Update Record">
    </form>
</body>

</html>