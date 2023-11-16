<?php
// Display record here...
?>

<html>

<head>
    <title>User Accounts</title>
</head>

<body>
    <!-- this is the destination for inserting record -->
    <p><a href="">Insert New Record</a></p>
    <h1>Registered Users</h1>

    <table border="1">
        <!-- this is the title of the records -->
        <thead>
            <tr>
                <td>ID No.</td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
            </tr>
        </thead>


        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>johndoe@example.com</td>
            <td>password1234</td>
            <td><a href="">Edit</a></td>
            <td><a href="">Delete</a></td>
        </tr>

    </table>
</body>

</html>