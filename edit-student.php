<?php
include "vendor/autoload.php";

$id = $_GET['id'];
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$student = $collection->findOne([
    '_id' => new MongoDB\BSON\ObjectId("$id")]);
?>

<html>
    <title>Edit Student</title>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    </head>
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
        }
        .container {
            margin-top: 100px;
            width: 700px;
            background-color: #E0E4FB;
            border-radius: 10px;
        }
        form {
            margin: 20px;
            padding: 30px;
        }
        .btn {
            background-color: #6159E6;
            color: white;
        }
    </style>
    <body>
        <div class="container">
            <form method="POST" action="edit.php">
                <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                <div class="mb-3">
                    <label class="form-label">Student ID</label>
                    <input type="text" class="form-control" name="studentId" value="<?php echo $student['studentId'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstName" value="<?php echo $student['firstName'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastName" value="<?php echo $student['lastName'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Birthdate</label>
                    <input type="text" class="form-control" name="birthdate" value="<?php echo $student['birthdate'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $student['address'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Program</label>
                    <input type="text" class="form-control" name="program" value="<?php echo $student['program'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contact Number</label>
                    <input type="text" class="form-control" name="contactNumber" value="<?php echo $student['contactNumber'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Emergency Contact</label>
                    <input type="text" class="form-control" name="emergencyContact" value="<?php echo $student['emergencyContact'] ?>">
                </div>
            
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Submit" name="submit_info">
                </div>
            </form>
        </div>
    </body>
</html>


