<body>
<form action="" method="post">
    <div>
        <textarea name="a_text"
                  style="width: 300px; height: 150px; background-color: aquamarine; color: darkred"></textarea>
    </div>
    <div>
        <input type="submit" value="PUSH">
    </div>
</form>
</body>
</html>

<?php
/*2. Создать форму с элементом textarea.
При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
Реализовать с помощью функции.
 */
$a_text=$_POST['a_text'];

function top_three_words($a_text) {

    $a_text = explode(" ", $a_text);
    foreach ($a_text as $item) {
        $a[]=strlen($item);
        $a++;
    }
    print_r($a);

}
top_three_words($a_text);
