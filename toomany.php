<?php

// Использование ... многоточия
  function html($first, $second, $third, $fourth)
  {
    echo "Первый элемент: $first<br />";
    echo "Второй элемент: $second<br />";
    echo "Третий элемент: $third<br />";
    echo "Четвертый элемент: $fourth<br />";
  }
// отображаем строки ввиде столби. каждый элемент выодится один под другим
$languages = ["css", "php", "html", "js"];
html(...$languages);
?>
