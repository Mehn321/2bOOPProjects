<?php
    $time=date(format: "H");

    if($time<"12"){
        echo "Have a great day!";
    }else{
        echo "Have a great night!";
    }
?>