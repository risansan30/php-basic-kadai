<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>
    <p>
        <?php
        $items = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
        foreach ($items as $key => $value) {
            echo "{$key}:{$value}<br>";
        }
        ?>
    </p>
</body>

</html>