
<?php 

if(isset($_GET['dosya']))
{
	echo "<h1>".$_GET['dosya']."</h1>";
	$oku=file_get_contents('yuklenenler/'.$_GET['dosya']);
	$bol=explode("\n", $oku);
	echo '<table border="1" style="width:50%;">';
		for($i = 0; $i < count($bol) ; $i++){
			$bol2 = explode(',', $bol[$i]);
			echo "<tr>";
			for ($j=0; $j < count($bol2); $j++) { 
				echo "<td>";
				echo @$bol2[$j];
				echo "</td>"; 
			}
			echo "</tr>";
		}
	echo "</table>";
	
}
?>