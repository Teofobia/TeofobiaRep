<html>
<head>
<title>������������� �������� ����</title>
</head>
<body><center>
<h1>������������� �������� ����</h1>
<FORM METHOD="post" ACTION="11.php">
������� �� ������ ��� ����������� ������� ������
<input name="Hidden" type="hidden" value="������� ������!">
<br><br>
<input type=SUBMIT value="OK">
</FORM>
</center>
<?php
echo $_REQUEST["Hidden"];
?>

</body>
</html>
