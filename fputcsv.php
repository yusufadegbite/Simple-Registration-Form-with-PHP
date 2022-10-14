<?php

$data = ['John', 25, 'yusuf@gmail.com'];

$file = fopen('userdata.csv', 'a');

if($file){
    echo "File Opened...";
    fputcsv($file, $data);
    echo "File Written...";
}else{
    echo "File could not be opened..";
}




if($file){
    echo "File Opened...";

    if(fputcsv($file, $data)){
        echo "File Written...";
        }else{
        echo "File could not be opened..";
        }
    
        echo "File Written...";
    }else{
        echo "File could not be Opened...";
    }
   

?>