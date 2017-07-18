<body>
<form action="" method="post">
    <div>
        <textarea name="a_text"
                  style="width: 300px; height: 150px; background-color: aquamarine; color: darkred"></textarea>
    </div>
    <div>
        <textarea name="b_text"
                  style="width: 300px; height: 150px; background-color: antiquewhite; color: darkblue;"></textarea>
    </div>
    <div>
        <input type="submit" value="PUSH">
    </div>
</form>
</body>
</html>

<?php
/*
1. Создать форму с двумя элементами textarea.
При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
которая будет возвращать массив с общими словами.
*/
function getCommonWords($a, $b)
{
    $cut_words1 = explode(" ", $a);
    $cut_words2 = explode(" ", $b);
    $result = array_intersect($cut_words1, $cut_words2);
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}

if ($_POST) {
    $a_text = $_POST['a_text'];
    $b_text = $_POST['b_text'];
    getCommonWords($a_text, $b_text);
    var_dump($_POST);
}
