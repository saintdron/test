<?php ## ������� ������.
$a = 100;
function &R() { // & - ���������� ������
  global $a;    // ��������� $a ����������
  return $a;    // ����������, ������, � �� ��������!
}
$b =& R(); // �� �������� & !!!
$b = 0;    // ����������� ���������� $a!
echo $a;   // ������� 0. ��� ������, ��� ������ $b - ������� $a
?>
