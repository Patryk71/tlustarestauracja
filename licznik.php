<?php
if(!isSet($_COOKIE['visit_counter'])){
    setcookie("visit_counter", 1);
    $str = "ciasteczko odwiedzin nie jest jeszcze możliwe do wyświetlenia, prosze odświerzyć strone.";
}
else{
    $current_value =  $_COOKIE["visit_counter"];
    $new_value = $current_value+1;
    setcookie("visit_counter",$new_value);
    $str = "dotychczas odwiedziłeś strone ".$current_value." razy !";
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $str; ?>
</body>
</html>