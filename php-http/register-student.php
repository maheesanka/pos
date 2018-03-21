<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Information</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            margin-top: 10px;
        }

        h1{
            text-align: center;
        }

    </style>
</head>
<body class="container">
<h1>Registration Information</h1>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Address</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $_POST["sid"] ?></td>
            <td><?= $_POST["sname"] ?></td>
            <td><?= $_POST["saddress"] ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>