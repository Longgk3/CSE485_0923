<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<style>
    table, th, td 
    {
    border: 1px solid black;
    border-collapse: collapse;
    }
</style>
<table>
    <tr>
        <th>Tên khóa học</th>
    </tr>
    <?php
    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];

    foreach ($arrs as $course) {
        echo "<tr><td>$course</td></tr>";
    }
    ?>
</table>

</body>
</html>