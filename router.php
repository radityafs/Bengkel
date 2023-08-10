<?php
// router.php
$script = $_SERVER["REQUEST_URI"];
$path = pathinfo($script);
if (empty($path["extension"])) {
    $php = ".$script.php";
    if(file_exists($php)){
        readfile($php);
    }else{
        return FALSE;
    }
}else{
    return FALSE;
}
?>