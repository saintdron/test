<?php ## ������� ������ ������������� ������ ��� Cookies.
session_name("test");
session_start();
$_SESSION['count'] = @$_SESSION['count'] + 1;
?>
<h2>�������</h2>
� ������� ������ ������ � ��������� �� ������� ��� ��������
<?=$_SESSION['count']?> ���(�). <br>
�������� �������, ����� �������� ���� �������.<br>
<a href="<?=$_SERVER['SCRIPT_NAME']?>?<?=SID?>">
������� ���� ��� ���������� ��������!</a>
