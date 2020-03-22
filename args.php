<?php
# Использование функции func_get_args().
  function html()
  {  
    foreach (func_get_args() as $v) {
      echo "$v<br />\n"; // выводим элемент
    }
  }
  // отображаем строки ввиде столби. каждый элемент выодится один под другим
html("css", "php", "html", "js");
?>
