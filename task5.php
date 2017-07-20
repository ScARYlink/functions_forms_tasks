<?php
/*5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
Директория и искомое слово задаются как параметры функции.
 */

function cur_dir($dir,$word){
    $arr_dir=(scandir($dir));
    for ($i = 0; $i < count($arr_dir); $i++) {
        $pos=strpos($arr_dir[$i],$word);
        if($pos!==false){
            $result[]=$arr_dir[$i];
        }
    }return $result;
}
print_r(cur_dir(__DIR__,'task'));

/*
function cur_dir($dir, $word) {
    $arr_dir = scandir($dir);
    foreach ($arr_dir as $item) {
        if (file_exists($dir.'/'.$item) && $item != '.' && $item != '..') {
            $text = file_get_contents($dir.'/'.$item);

            if (strripos($text, $word) == true) {
                echo '<b>' . $item . "</b><br>";
                echo file_get_contents($dir . '/' . $item) . '<br>';
            }
        }
    }
}
print_r(cur_dir(__DIR__, 'task'));
*/