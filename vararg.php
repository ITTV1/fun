<?php

## Переменное число параметров функции (современный способ использования).
  function html(...$key)
  {  
    foreach ($key as $v) {
      echo "$v<br />\n"; // выводим элемент
    }
  }
// отображаем строки ввиде столби. каждый элемент выодится один под другим
html("css", "php", "html", "js");
?>