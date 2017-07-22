<table style="border: 1px solid #ffd862; background-color: cyan;">
<?php
/*6. Создать страницу, на которой можно загрузить несколько фотографий в галерею.
Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.
 */

include 'task6.html';
$uploaddir = 'img/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

// print_r($_FILES);
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Не получилось загрузить!\n";
}
print "</pre>";

$directory = "./img";    // Папка с изображениями
$allowed_types=array("jpg", "png", "gif");  //разрешеные типы изображений
$file_parts = array();
$ext="";
$title="";
$i=0;
//пробуем открыть папку
$dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");
while ($file = readdir($dir_handle))    //поиск по файлам
{
    if($file=="." || $file == "..") continue;  //пропустить ссылки на другие папки
    $file_parts = explode(".",$file);          //разделить имя файла и поместить его в массив
    $ext = strtolower(array_pop($file_parts));   //последний элеменет - это расширение


    if(in_array($ext,$allowed_types))
    {
        echo '<tr>
                <td >
                <img src="'.$directory.'/'.$file.'" class="pimg" title="'.$file.'" />
                </td></tr>';
        $i++;
    }

}
closedir($dir_handle);  //закрыть папку
?>
</table>
