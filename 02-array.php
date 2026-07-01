<?php
    // indexed array
    $arr  = ["seren", "john", "jane"];

    echo $arr[0]; // seren

    for ($i=0; $i<count($arr); $i++) {
        echo $arr[$i] . "<br>";
    }

    foreach ($arr as $value) {
        echo $value . "<br>";
    }

    // associative array key-value
    $arr2 = [
        "name" => "seren",
        "age" => 22
    ];

    echo $arr2["name"]; // seren
    echo $arr2["age"]; // 22
    
    // multidimensional array
    $arr3 = [
        ["seren", 22],
        ["john", 25]
    ];

    echo $arr3[0][0]; // seren  
    echo $arr3[0][1]; // 22

    echo count($arr3); // dem so luong phan tu trong mang 
    array_push($arr3, ["jane", 20]); // them phan tu vao mang
?>

