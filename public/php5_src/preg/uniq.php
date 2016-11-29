<?php ## Выделение уникальных слов в тексте.
// Эта функция выделяетт из текста $text все уникальные слова и
// возвращает их список. В необязательный параметр $nOrigWords 
// помещается исходное число слов в тексте, которое было  
// до "фильтрации" дубликатов.
function getUniques($text, &$nOrigWords=false) { 
  // Сначала получим все слова в текстеå.
  $words = preg_split("/([^[:alnum:]]|['-])+/s", $text);
  $nOrigWords = count($words);
  // Затем приводим слова к нижнему регистру.
  $words = array_map("strtolower", $words);
  // Получаем уникальные значения.
  $words = array_unique($words);
  return $words;
}
// Пример использования функции.
setlocale(LC_ALL, '');
$fname = "largetextfile.txt";
$text = file_get_contents($fname);
$uniq = getUniques($text, $nOrig);
echo "Было слов: $nOrig<br>";
echo "Стало слов: ".count($uniq)."<hr>";
echo join(" ", $uniq);
?>
