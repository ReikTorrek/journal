<?php
require 'PHP/trCreator.php';

$trCreator = new trCreator();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/main.css">
    <title>Journal</title>
</head>
<body>
<table id="journal" class="journal">
    <caption id="tableName">
        Журнал
    </caption>
    <tr id="header">
        <td class="ID">
            <p>ID</p>
        </td>
        <td class="name">
            <p>name</p>
        </td>
        <td class="company">
            <p>Компания</p>
        </td>
        <td class="number">
            <p>Телефон</p>
        </td>
        <td class="email">
            <p>Email</p>
        </td>
        <td class="birthDate">
            <p>Дата рождения</p>
        </td>
    </tr>
<?php
for ($j = 0; $j < 100; $j++) {
    echo $trCreator->createTR($j);
}
?>
</table>
<div class="prev">
    <p><< previos</p>
</div>
<div class="next">
    <p>next >></p>
</div>
<script src="scripts/main.js"></script>
</body>
</html>