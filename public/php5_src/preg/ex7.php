<?php ## "������" ��������������.
$str = "Hello, this <b>word</b> is <b>bold</b>!";
$re = '|<(\w+) [^>]* > (.*) </\1>|xs';
preg_match($re, $str, $pockets) or die("��� �����.");
echo htmlspecialchars("'$pockets[2]' ��������� ����� '$pockets[1]'");
?>
