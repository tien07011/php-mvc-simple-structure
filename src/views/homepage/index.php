<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>

<body>
    <p>Hello <?php echo $user["name"] ?></p>
    <a href="<?php route("index", "test", ["query" => "thang"]) ?>">Redirect</a>
</body>

</html>
