<html>
<head>
<title>������������� �������</title>
</head>
<body><center>
<h1>������������� �������</h1>
<FORM METHOD="post" ACTION="9.php">
�������� ������� ������:
<br><br>
<select name="Food[]" multiple="multiple">
<option>��������</option>
<option>�����</option>
<option>������</option>
<option>������</option>
</select>
<br><br>
<input type=SUBMIT value="OK">
</FORM>
</center>
<?php
foreach ($_REQUEST["Food"] as $f)
{
echo $f,"<br>";
}
?>

</body>
</html>
