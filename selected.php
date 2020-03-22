<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Пример функции и ее использования в пхп</title>
  <meta charset='utf-8'>
</head>
<body>
<?php
  // Функция принимает ассоциативный массив и создает несколько 
  // тэгов <option value="$key">$value, г ключ - значение де $key - очередной
  // ключ массива, а $value -  значение массива. Если задан
  // также и второй параметр, то у соответствующего тэга option
  // проставляется атрибут selected.
  function selectItea($items, $selected = 0)
  { 
    $html = "";
    foreach ($items as $k => $v) { 
      if ($k === $selected)
        $ch = " selected";
      else
        $ch = "";
      $html .= "<option$ch value='$k'>$v</option>\n";
    }  
    return $html;
  }
  // Предположим, у нас есть массив имен и фамилий программистов
  $name = [
    "Антон"  => "Антонов",
    "Димон"  => "Димонов",
    "Роман"   => "Романов",
  ];
  // Если был выбран элемент, вывести информацию на экран
  if (isset($_REQUEST['surname'])) {
    $name = $name[$_REQUEST['surname']];
    echo "Вы выбрали этих программистов: {$_REQUEST['surname']}, {$name} ";
  }
?>
<!-- Форма для выбора имени человека. -->
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST">
  Выберите имя программиста:
  <select name="surname">
    <?=selectItea($name, $_REQUEST['surname'])?>
  </select><br />
  <input type="submit" value="Узнать имя">
</form>
</body>
</html>
