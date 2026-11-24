<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>

    <h2>Student Information</h2>

    <?php
    $student = array(
        "name" => "Ali",
        "family" => "Ahmadi",
        "age" => 21,
        "field" => "Computer"
    );

    echo $student["name"] . "<br>";
    echo $student["family"] . "<br>";
    echo $student["age"] . "<br>";
    echo $student["field"];
    ?>

</body>
</html>
