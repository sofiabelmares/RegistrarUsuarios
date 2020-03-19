<html> 
<body> 
<center>
<font FACE="verdana" SIZE=3 COLOR="blue">
</br>
<h1>Usuarios guardados en MySql en Google Cloud </h1>  
</br>
<?php 
$user="root";
$pass="its2020";
$server="35.238.223.246";
$db="tec";
$db_port="3306";
$conectar = mysqli_connect($server,$user,$pass,$db,$db_port);

$result = mysqli_query($conectar,"SELECT * FROM clientes"); 

echo "<table border = '1' bordercolor='black' cellspacing='0' cellpadding='2'> \n"; 
echo "<tr><td><strong><center>Nombre</center></strong></td><td><strong><center>Apellido</center></strong></td><td><strong><center>E-Mail</center></strong></td></tr> \n"; 

while ($row = mysqli_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr> \n"; 
} 
echo "</table> \n"; 
?> 
</center>
</font>
<font FACE="verdana" SIZE=3 COLOR="gray">Ana Sofía Belmares Gualajara</br>Ilse Estefanía Zúñiga Rodriguez </FONT>
</body> 
</html> 