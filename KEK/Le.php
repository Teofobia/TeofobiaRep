<html>
<head>
<title>��������� ����</title>
</head>
<body><center>
<h1>��������� ����</h1>
<FORM METHOD="post" ACTION="le.php">
������� ���� ���
<input name="Name" type="text">
<br><br>
<input type=SUBMIT value="OK">
</FORM>
</center>
<?php
echo $_REQUEST ["Name"];
?>
<center>
<h1>������������� ����</h1>
<FORM METHOD="post" ACTION="le.php">
����������� ����� ������ ������:
<br>
<textarea name="Friends" cols="50" rows="5">
1.
2.
3.
4.
5.
</textarea>
<br><br>
<input type=SUBMIT value="OK">
</FORM>
</center>

</body>
</html>
