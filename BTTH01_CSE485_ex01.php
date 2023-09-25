<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Bài 1A</title>
</head>
<body>
    1.
    <?php
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];
    $result = calculateOperation($arrs);
    function calculateOperation($arr){
        $sum = 0;
        $product = 1;
        $difference = $arr[0];
        $quotient = $arr[0];

        foreach ($arr as $value){
            $sum += $value;
            $product *= $value;
            $difference -= $value;
            $quotient /= $value;
        }

        return array(
            'sum' => $sum,
            'product' => $product,
            'difference' => $difference,
            'quotient' => $quotient
        );
    }
    echo "Tổng các phần tử " . implode(" + ",$arrs) . " = " . $result['sum'] . '<br>' . '<br>';
    echo "Tích các phần tử = " . implode(" * ",$arrs) . " = " . $result['product'] . '<br>' . '<br>';
    echo "Hiệu các phần tử = " . implode(" - ",$arrs) . " = " . $result['difference'] . '<br>' . '<br>';
    echo "Thương các phần tử = " . implode(" / ",$arrs) . " = " . $result['quotient'] . '<br>'  . '<br>';
    ?>
    <br>
    2.
    <?php
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
    $names = ['Anh', 'Sơn', 'Thắng', 'tôi'];
    $result = '';
    $length = count($arrs);
    foreach ($arrs as $color) {
        $redcolor = 'red' . substr(md5(rand()),0,6);
    }
    for ($i = 0; $i < $length; $i++) {
        $color = $arrs[$i];
        $name = $names[$i];
        $result .= "Màu <span style=\"color: $redcolor;\">$color là màu yêu thích của $name";
        if ($i < $length - 1) {
            $result .= ', ';
        }
    }
    echo $result ;
    ?>
    <br>
    3.
    <?php
    $data = [
        ['<strong>Tên khóa học </strong>'],
        ['PHP'],
        ['HTML'],
        ['CSS'],
        ['JS']
    ];
    echo '<table border="1">';
    foreach ($data as $row) {
        echo '<tr>';
        foreach ($row as $cell) {
            echo '<td>' . $cell . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
    <br>
    4.
    <?php
    $arrs = array(
        "Italy" => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels",
        "Denmark" => "Copenhagen",
        "Finland" => "Helsinki",
        "France" => "Paris",
        "Slovakia" => "Bratislava",
        "Slovenia" => "Ljubljana",
        "Germany" => "Berlin",
        "Greece" => "Athens",
        "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam",
        "Portugal" => "Lisbon",
        "Spain" => "Madrid",
        "Sweden" => "Stockholm",
        "United Kingdom" => "London",
        "Cyprus" => "Nicosia",
        "Lithuania" => "Vilnius",
        "Czech Republic" => "Prague",
        "Estonia" => "Tallin",
        "Hungary" => "Budapest",
        "Latvia" => "Riga",
        "Malta" => "Valetta",
        "Austria" => "Vienna",
        "Poland" => "Warsaw"
    );
    foreach ($arrs as $country => $capital) {
        echo "Thủ đô của $country là $capital " . '<br>' . '<br>';
    }
    ?>
    <br>
    5.
    <?php
    $a = [
        'a' => [
            'b' => 0,
            'c' => 1
        ],
        'b' => [
            'e' => 2,
            'o' => [
                'b' => 3
            ]
        ]
    ];
    $value1 = $a['b']['o']['b'];
    echo "Giá trị = $value1 với key là 'b'<br>";
    $value2 = $a['a']['c'];
    echo "Giá trị = $value2 với key là 'c'<br>";
    $info = $a['a'];
    echo "Thông tin của phần tử có key là 'a':<br>"; print_r($info);
    ?>
    <br>
    6.
    <?php
    $keys = array(
        "field1" => "first",
        "field2" => "second",
        "field3" => "third"
    );
    $values = array(
        "field1value" => "dinosaur",
        "field2value" => "pig",
        "field3value" => "platypus"
    );
    $keysAndValues = array_combine(array_values($keys), array_values($values));
    print_r($keysAndValues);
    ?>
    <br>
    7.
    <?php
    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100,  -125, 0];
    for ($i = 100; $i <= 200; $i++) {
        if ($i % 5 === 0) {
            $array[] = $i;
        }
    }
    echo "Các số chia hết cho 5 là : " .$i;
    print_r($array);
    ?>
    <br>
    8.
    <?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $maxLength = '';
    $minLength = '';
    foreach ($array as $string) {
        if (strlen($string) > strlen($maxLength)) {
            $maxLength = $string;
        }
        if (strlen($string) < strlen($minLength) || $minLength === '') {
            $minLength = $string;
        }
    }
    $maxLengthLength = strlen($maxLength);
    $minLengthLength = strlen($minLength);
    echo "Chuỗi có độ dài lớn nhất: $maxLength (Độ dài: $maxLengthLength)<br>";
    echo "Chuỗi có độ dài nhỏ nhất: $minLength (Độ dài: $minLengthLength)<br>";
    ?>
    <br>
    9.
    <?php
    function convertToLowercase($arr) {
        return array_map('strtolower', $arr);
    }
    $arr1 = ['a', 'b', 'ABC'];
    $arr2 = ['1', 'B', 'C', 'E'];
    $arr3 = ['a', 0, null, false];

    $result1 = convertToLowercase($arr1);
    $result2 = convertToLowercase($arr2);
    $result3 = convertToLowercase($arr3);

    echo "Mảng 1: "; print_r($result1);
    echo "Mảng 2: "; print_r($result2);
    echo "Mảng 3: "; print_r($result3);
    ?>
    <br>
    10.
    <?php
    function convertToUppercase($arr) {
        return array_map('strtoupper', $arr);
    }

    $arr1 = ['a', 'b', 'ABC'];
    $arr2 = ['1', 'b', 'c', 'd'];
    $arr3 = ['a', 0, null, false];

    $result1 = convertToUppercase($arr1);
    $result2 = convertToUppercase($arr2);
    $result3 = convertToUppercase($arr3);

    echo "Mảng 1: "; print_r($result1);
    echo "Mảng 2: "; print_r($result2);
    echo "Mảng 3: "; print_r($result3);
    ?>
    <br>
    11.
    <?php
    $array = array(1, 2, 3, 4, 5);
    array_splice($array, 2, 1);
    $array = array_values($array);
    print_r($array);
    ?>
    <br>
    12.
    <?php
    $numbers = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];
    $firstElement = reset($numbers);
    $lastElement = end($numbers);
    $maxNumber = max($numbers);
    $minNumber = min($numbers);
    $sum = array_sum($numbers);
    asort($numbers);
    arsort($numbers);
    ksort($numbers);
    krsort($numbers);
    echo "Phần tử đầu tiên: " . $firstElement . '<br>';
    echo "Phần tử cuối cùng: " . $lastElement . '<br>';
    echo "Số lớn nhất: " . $maxNumber .  '<br>';
    echo "Số nhỏ nhất: " . $minNumber . '<br>';
    echo "Tổng các giá trị: " . $sum . '<br>';
    echo "Mảng sau khi sắp xếp tăng giá trị: ". '<br>'; print_r($numbers);
    echo "Mảng sau khi sắp xếp giảm giá trị: " . '<br>'; print_r($numbers);
    echo "Mảng sau khi sắp xếp tăng key: " . '<br>'; print_r($numbers);
    echo "Mảng sau khi sắp xếp giảm key: " . '<br>'; print_r($numbers);
    ?>
    <br>
    13.
    <?php
    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
    $average = array_sum($numbers) / count($numbers);
    echo "Các số lớn hơn giá trị trung bình ($average): " . '<br>';
    foreach ($numbers as $number) {
        if ($number > $average) {
            echo $number . " " . '<br>';
        }
    }
    echo "\n";
    echo "Các số nhỏ hơn hoặc bằng giá trị trung bình ($average): " . '<br>';
    foreach ($numbers as $number) {
        if ($number <= $average) {
            echo $number . " " . '<br>';
        }
    }
    echo "\n";
    ?>
    <br>
    14.
    <?php
    $array1 = [
        [77, 87],
        [23, 45]
    ];
    $array2 = [
        'giá trị 1',
        'giá trị 2'
    ];
    $result = [];
    for ($i = 0; $i < count($array1); $i++) {
        $result[$i] = array_merge([$array2[$i]], $array1[$i]);
    }
    print_r($result);
    ?>
</body>
</html>