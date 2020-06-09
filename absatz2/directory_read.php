<?php

$dir = ".";

if(is_dir($dir)) {

    echo 'is directory<br>';

    $dir_handle =   opendir($dir);
    

    while( $file = readdir($dir_handle) ) {
        echo $file.'<br>';
    }
    
    
}else {
    
    echo 'is directory<br>';
}