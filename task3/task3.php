<?php
/**Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму.
 * Проверить работу на кириллических строках - найти ошибку, найти решение.
 */

include 'task3.html';

if(!empty($_POST)) {
    $lenght = $_POST['lenght'];
    $file = file_get_contents('task3.txt');
    $arr_file = explode(' ', $file);
    # print_r($arr_file);

    foreach ($arr_file as $item) {
        if ($lenght >= strlen($item)) {
            $new_arr[]=$item;
            }
    }
    # print_r($new_arr);

    $new_string = implode(" ", $new_arr);
    file_put_contents('new_task3.txt', $new_string);
    $new_file = file_get_contents('new_task3.txt');
    # echo $new_file;

}