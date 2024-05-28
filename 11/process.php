<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $info=$_POST['one'];
    if(!(empty($info))){
        $file=fopen('file.txt','a');
        fwrite($file,$info.'\n');
        fclose($file);
        echo "Information submitted Successfully";
    }
    else{
        echo "Please enter some information";
    }
}
?>
