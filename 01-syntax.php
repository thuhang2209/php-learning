<?php
    // code php phai de trong day

    /* 
    - php chay tren server
    - output tra ve html
    */

    /* variable 
    - luon co $ truoc ten bien
    - khong can khai bao kieu
    */
    $name  = "thuhang";
    $age = 20;

    // output: dung echo la chu yeu
    echo $name;
    print $age;

    // string
    echo "hello " . $name; // noi chuoi dung '.'

    // if - else if - else
    if ($age > 18) {
        echo "ban du tuoi";
    } else {
        echo "ban chua du tuoi";
    }

    // switch - case
    $day = 3;

    switch ($day) {
    case 1:
        echo "Mon";
        break;
    case 2:
        echo "Tue";
        break;
    default:
        echo "Unknown";
    }

    // for
    for ($i = 1; $i <= 5; $i++) {
        echo $i;
    }

    // while - do while
    $i = 1;

    while ($i <= 5) {
        echo $i;
        $i++;
    }

    do { // do while luon chay it nhat 1 lan
        echo $i;
        $i++;
    } while ($i <= 5);
?>