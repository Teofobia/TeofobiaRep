<html>
<head>
<title>��������� ����</title>
</head>
<body>
<?php

if (isset($_POST['submit'])){
    if(empty($_POST['login']))  {
    echo "������� �����";
}
	
elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
echo "� ���� ����� ������������ �������";
}
elseif(empty($_POST['password'])) {
echo  "������� ������!";
}
elseif($_POST['password'] != $_POST['password2']) {
echo "�������� ������ �� ���������";
}



</body>
</html>
