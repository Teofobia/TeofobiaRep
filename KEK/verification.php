<html>
<head>
<title>��������� ����</title>
</head>
<body>
<?php
include_once("bd.php");

if (isset($_POST['submit'])){
    if(empty($_POST['login']))  {
    echo '<br><font color="red"><img border="0" src="error.gif" alt="������� �����"> ������� �����!</font>';
} 
elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="� ���� "�����" ������� ������������ �������!">� ���� "�����" ������� ������������ �������! ������ �����, ����� � �������������!</font>';
}
elseif(empty($_POST['password'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="������� ������ !">������� ������!</font>';
}
elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="������ ������� ��������!">������ ������� ��������! ������ ������ ���� �� ����� 6 ��������! </font>';
}
elseif(empty($_POST['password2'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="������� ������������� ������!">������� ������������� ������!</font>';
}
elseif($_POST['password'] != $_POST['password2']) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="��������� ������ �� ���������!">��������� ������ �� ���������!</font>';
}
elseif(empty($_POST['email'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="������� E-mail!">������� E-mail! </font>';
}
elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="E-mail ����� ������������ ������!">E-mail ����� ������������ ������! ��������, name@gmail.com! </font>';
}
?>
</body>
</html>
