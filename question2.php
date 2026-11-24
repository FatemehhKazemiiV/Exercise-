<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
</head>
<body>

    <h2>اطلاعات محصول</h2>

    <?php
    $product = array(
        "id" => 101,
        "title" => "Laptop",
        "price" => 25000000
    );

    echo "عنوان محصول: " . $product["title"] . "<br>";
    echo "قیمت محصول: " . $product["price"];
    ?>

</body>
</html>
