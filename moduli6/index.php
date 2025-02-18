<?php

    //fopen
    $my_file = fopen('file1.txt','w');

    //content

//fclose
fclose($my_file);

$filename = 'ds.txt';


$file = fopen($filename,'r');

$size = filesize($filename);

$my_filedata = fread($file,$size );
echo $my_filedata . '<br>';

fclose($file);

//foef - end of line

$my_file = fopen("example.txt", 'w');

while(!feof($my_file)) {

    echo fgets($my_file). "<br>";
}

//fwrite

$my_file = fopen('file1.txt','w');

$text = 'computer programming';

fwrite($my_file, $text);


// w+

$my_file = fopen ('data.txt','w+');

fwrite($my_file, 'Data test 1');


// a+

$my_file = fopen ('data.txt','a+');

fwrite($my_file, 'Data test 2')

?>