<?php
    if(isset($_POST["submit"]))
    $inputed_letter=$_POST['letter'];
    $inputed_letter=strtolower($inputed_letter);
    function isletter($character){
        $letters = [
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
            'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's',
            't', 'u', 'v', 'w', 'x', 'y', 'z'
        ];
        foreach($letters as $letter){
            if($letter==$character){
                return true;
            }
        }
    }
    
    if(isletter($inputed_letter)){
        if($inputed_letter=="a"||$inputed_letter=="e"||$inputed_letter=="i"||$inputed_letter=="o"||$inputed_letter=="u"){
            echo "its a vowel";
        }
        else{
            echo "its a consonant";
        }
    }
    else {
        print "error";
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="letter">
        <input type="submit" name="submit">
    </form>
</body>
</html>
