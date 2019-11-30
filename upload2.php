<?php 

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['description_entered'];

if (isset($name)) {

$path= 'Uploads/files/';

if (!empty($name)){
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';

}
}
}
?>
<?php
$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "phplogin"; 
$table = "content"; 


$connection= mysqli_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysqli_select_db($connection, $dbase);


if(!empty($description)){
mysqli_query($connection,"INSERT INTO $table (description, filename)
VALUES ('$description', '$name')");
}


mysqli_close($connection);

?>