<?php
    require_once "settings/settings.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
  echo Settings::config("db1.user")."\n";
    ?>
</body>
</html>