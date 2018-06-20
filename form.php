<!DOCTYPE html>
<html>
<head>
<title>Form</title>
</head>

<body>
<form enctype="multipart/form-data" action="yukle.php" method="POST">
 
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <input name="dosya" type="file" /> <br/><br/>
    <input type="submit" value="Dosyayı Gönder" />
    <?php 
    	session_start();
    	echo @$_SESSION["hata"];
    	session_destroy();
    ?>
</form>
</body>

</html>