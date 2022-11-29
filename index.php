<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='style.css'>
<title>Stickerprinter</title>
<meta name='viewport' content='width=1080px'>
</head>
<body>
<center>
<div class='sticker-bg'>
<div class="fileupload">
<form class='uploadform' action="upload.php" method="post" enctype="multipart/form-data">
 <input type="file" name="uploaded" class="file-upload"><br>
 <select name='amount' id='amount'>
  <option value='1' selected>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
  <option value='4'>4</option>
  <option value='5'>5</option>
  <option value='10'>10</option>
 </select>
 <input type="submit" value="print!" class="submit">
</form>
</div>
</div>
</body>
</html>
