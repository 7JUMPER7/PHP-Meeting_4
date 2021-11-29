<?php
    // $filename = 'Assets/text.txt';
    // $fd = fopen($filename, 'r') or die("Не удалось открыть файл!");

    // 1
    // $len = filesize($filename);
    // $str = fread($fd, $len);
    // echo "<div>$str</div>";

    // 2
    // while(!feof($fd)) {
    //     //htmlentities() - // Что б выводило HTML теги как строку
    //     $line = fgets($fd);
    //     echo "<div>$line</div>";
    // }
    
    //fclose($fd);

    // 3
    // $str = file_get_contents($filename);
    // echo "<div>$str</div>";



    // 1
    // $filename = 'Assets/write.txt';
    // $fd = fopen($filename, 'w') or die('Не удалось открыть файл');
    // if(!fputs($fd, 'Hello world!!!')) {
    //     echo 'Ошибка записи';
    // }
    // echo "Файл записан успешно";
    
    // 2
    // $fd = fopen($filename, 'w+') or die('Не удалось открыть файл');
    // fwrite($fd, 'Привет, мир!');
    // fseek($fd, 0, SEEK_SET);
    // fwrite($fd, 'Хрю');
    // fseek($fd, 0, SEEK_END);
    // fwrite($fd, ' Кря');
    
    // fclose($fd);



    // if(!rename('Assets/text.txt', 'Files/text.txt')) {
    //     echo 'Не удалось переместить файл';
    // } else {
    //     echo 'Файл перемещен';
    // }



    // if(!unlink('Assets/text.txt')) {
    //     echo 'Error';
    // } else {
    //     echo 'Файл удален';
    // }
?>