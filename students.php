<?php
include "vendor/autoload.php";

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->find();

?>

<html>
<title>MongoDB Students</title>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Address</th>
                    <th scope="col">Program</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Emergency Contact</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $student) { ?>
                <tr>
                <th scope="row"><?php echo $student['_id'] ?></th>
                <td><?php echo $student['studentId'] ?></td>
                <td><?php echo $student['firstName'] ?></td>
                <td><?php echo $student['lastName'] ?></td>
                <td><?php echo $student['birthdate'] ?></td>
                <td><?php echo $student['address'] ?></td>
                <td><?php echo $student['program'] ?></td>
                <td><?php echo $student['contactNumber'] ?></td>
                <td><?php echo $student['emergencyContact'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>