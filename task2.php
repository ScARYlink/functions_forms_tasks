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

function top_three_words($a_text)
{
    $a_text = explode(' ', $a_text);
    // print_r($a);
    for ($i = 0; $i < count($a_text); $i++) {
        for ($j = 0; $j < count($a_text)-3; $j++) {
            if (mb_strlen($a_text[$j])>mb_strlen($a_text[$j+1])){
                $c=$a_text[$j];
                $a_text[$j]=$a_text[$j+1];
                $a_text[$j+1]=$c;
            }
        }
    }
    return (array_slice($a_text, 0, 3));
}
print_r(top_three_words($a_text));