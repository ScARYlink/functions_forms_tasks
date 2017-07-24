<?php
/*7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
Все добавленные комментарии выводятся над текстовым полем
 */

$file = 'comments.txt';
$text = [];
$comments = [];

if (!empty($_POST) === true) {
    $name = @strip_tags($_POST['name']);
    $comment = @strip_tags($_POST['comment']);

    if (empty($name)===true || empty($comment)===true) {
        echo "Заполняй все поля!";
    }else{
        $text['name'] = $name;
        $text['comment'] = $comment;
        file_put_contents($file,serialize($text). PHP_EOL, FILE_APPEND | LOCK_EX);
    }
}

if ($handle = @fopen($file, "r")){
    while (($buffer = fgets($handle)) !== false) {
        $comments[]=$buffer;
    }
    fclose($handle);
}else{
    echo "Что-то не так с файлом txt!";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<?php if (!empty($comments) === true): ?>
    <?php foreach ($comments as $item):
        $item = unserialize($item); ?>
        <div >
            <div >
                <p><?php echo $item["name"]; ?></p>
            </div>
            <div >
                <p><?php echo $item["comment"]; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>


<form action="task7.php" method="post" style="height: 130px; width: 500px; background-color: #ffd862;">
    <input name="nom" type="hidden" value="<?php echo ($handle); ?>">
    <label for="name">Ваш ник:</label>
    <input type="text" name="name" id="user" placeholder="name" style="width: 60px;">
    <label for="comment">Ваш комментарий:</label>
    <textarea name="comment" id="comment" style="width: 400px; height: 80px;"></textarea>
    <button type="submit" name="submit" >Submit</button>
</form>
</body>
</html>