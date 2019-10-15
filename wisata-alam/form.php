<html>
<head>
<title>Upload Foto</title>
</head>
<body>

<form method="POST" enctype="multipart/form-data" action="upload.php">
Pilih File Foto:<br>
<input type="file" name="file_foto" size="20"><br>
<input type="file" name="file_foto2" size="20"><br>
<input type="file" name="file_foto3" size="20"><br>
<!--<input type="file" name="file_foto3" size="20"><br> -->
<p>
id foto : <br><input type="text" name="id_foto" size="50"></p>
<!--id tempat: <br><input type="text" name="id_tempat" size="50"></p> -->
<p><input type="submit" value="Upload">
</form>
</body>
</html>