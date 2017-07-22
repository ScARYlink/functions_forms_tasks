<?php
/*7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
Все добавленные комментарии выводятся над текстовым полем
 */

include 'task7.html';

function add_comment($comment){
    return file_put_contents('comment.txt', serialize($comment));
}
function get_comment($comment){
    return unserialize(file_get_contents('comment.txt'));
}
if (file_exists('comment.txt')) {
    $comment=get_comment();
} else {echo "Файл с комментариями не найден";}
