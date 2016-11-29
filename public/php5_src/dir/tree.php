<?php ## Печать дерева каталогов файловой системы.
// Функция распечатывает имена всех подкаталогов в текущем каталоге,
// выполняя рукурсивный обход. Параметр $level задает текущую
// глубину рекурсии.
function printTree($level=1) {
  // Открываем каталог и выходим в случае ошибки.
  $d = @opendir(".");
  if (!$d) return;//(возвращает null)
  while (($e=readdir($d)) !== false) {
    // Игнорируем элементы '..' и '.'
    if ($e=='.' || $e=='..') continue;
    // Нам нужны только подкаталоги.
    if (!@is_dir($e)) continue;
    // Печатаем пробелы, чтобы сместить вывод.
    for ($i=0; $i<$level; $i++) echo "    ";
    // Выводим текущий элемент.
    echo "$e\n";
    // Входим в текущий подкаталог и печатаем его
    if (!chdir($e)) continue;
    printTree($level+1);
    // Возвращаемся назад
    chdir("..");
    // Отправляем данные в браузер, чтобы избежать видимости зависания
    // для больших распечаток.
    flush();
  }
  closedir($d);
}

// выводим остальной текст фиксированным шрифтом
echo "<pre>";
echo "/\n";
// Входим в корневой каталог и печатаем его
chdir(filter_input(INPUT_SERVER,'DOCUMENT_ROOT'));
PrintTree();
echo "</pre>";

echo "\n".ini_get('register_globals');