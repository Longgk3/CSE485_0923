<!DOCTYPE html>
<html>
<head>
    <title>Hiển thị màu yêu thích</title>
</head>
<body>
    <?php
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    $names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

    // Sử dụng vòng lặp foreach để duyệt qua mảng màu và tên
    $sentence = "";
    foreach ($arrs as $key => $color) {
        $name = $names[$key];
        $sentence .= "Màu $color là màu yêu thích của $name";
        if ($key < count($arrs) - 1) {
            $sentence .= ", ";
        } else {
            $sentence .= ".";
        }
    }

    echo $sentence;
    ?>
</body>
</html>