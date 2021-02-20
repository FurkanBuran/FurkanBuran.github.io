<!doctype html>
<html>
    <title>SHOW TV İZLE</title>
    <body>
       
<?php
    $oku = file_get_contents('https://www.blutv.com/actions/player/create/5a265493fbead36680f61cf9?seek=&platform=com.blu&token=undefined');
    echo $oku;
?>

    </body>
</html>