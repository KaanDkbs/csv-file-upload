<!DOCTYPE html>
<html>
<head>
<title>Form</title>
</head>

<body>
<table style="width:70%; border:1px solid;">	
  <tr>
    <th>Dosyalar</th>
    
  </tr>
<?php
$dizin = opendir('yuklenenler');
while($dosya = readdir($dizin)){
if($dosya!='.' && $dosya!='..'){	
  echo '<tr>';
    echo "<td>"."<a href='tablo.php?dosya=$dosya'>".$dosya.'</a>'."</td>";
  echo '</tr>';
	}
}?>
</table>
  

</body>

</html>