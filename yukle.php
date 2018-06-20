<?php
if($_POST)
{
	if(isset($_FILES['dosya']))
	{
			$tip = $_FILES['dosya']['type'];
			$isim = $_FILES['dosya']['name'];
			$uzanti=explode(".", $isim);
			if(@$uzanti[1]=="csv")
			{
				$yol="yuklenenler/".$_FILES["dosya"]["name"];
				move_uploaded_file($_FILES["dosya"]["tmp_name"] , $yol);
				echo "başarılı";
			
			}
			else 
			{
				session_start();
				$_SESSION["hata"] = "Bir Hata Oluştu. Sadece .csv uzantılı dosya yükleyebilirsiniz";
				header('Location: form.php');
			}
   		
	}
	
}
	

?>