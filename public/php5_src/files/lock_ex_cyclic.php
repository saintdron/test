<?php ## ������ ������������ �������� � �������������� �����������.
$file = "file.txt";

// ������� ������� ������ ����, ���� ��� ��� ���.
// ���� �� ���� ����������, ��� ��� �� ��������.
fclose(fopen($file, "a+b"));

// ��������� ����.
$f = fopen($file, "r+b") or die("�� ���� ������� ����!");

while (true) {
  flock($f, LOCK_EX); // ����, ���� �� �� ������ �������������
  // . . .
  // � ���� ����� �� ����� ���� �������, ��� ������ ���
  // ��������� �������� � ������.
  // . . .
  fflush($f);         // ���������� ������ �� ����
  flock($f, LOCK_UN); // ����������� ����
  // � �������, �������� �� 10 ������.
  sleep(10);
}

fclose($f);
?>