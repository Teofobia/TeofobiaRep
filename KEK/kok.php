<html>
<head>
<title>������������� ������������</title>
</head>
<body><center>
<h1>������������� ������������</h1>
<FORM METHOD="post" ACTION="kok.php">
�� �����?
<input name="Check1" type="checkbox" value="��">��
<input name="Check2" type="checkbox" value="������ �����">������ �����
<br><br>
<input type=SUBMIT value="OK">
</FORM>
</center>
<?php
if (isset ($_REQUEST["Check1"]))
echo $_REQUEST["Check1"],"<br>";
if (isset ($_REQUEST["Check2"]))
echo $_REQUEST["Check2"],"<br>";
?>

</body>
