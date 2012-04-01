<?php
session_start();
?>

<HTML>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
include 'template.php';
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 
$uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self; 
$uploadForm = 'http://localhost:8538/MaryMassacreBudget/uploadForm.php' . $_SERVER['HTTP_HOST'] . $directory_self . 'uploadForm.php'; 
$uploadSuccess = 'http://localhost:8538/MaryMassacreBudget/uploadSuccess.php' . $_SERVER['HTTP_HOST'] . $directory_self . 'uploadSuccess.php'; 
$fieldname = 'picture';

$errors = array(1 => 'php.ini max file size exceeded', 
                2 => 'html form max file size exceeded', 
                3 => 'file upload was only partial', 
                4 => 'no file was attached'); 

// check the upload form was actually submitted else print the form 
isset($_POST['submit']) 
    or error('the upload form is neaded', $uploadForm); 

// check for PHP's built-in uploading errors 
($_FILES[$fieldname]['error'] == 0) 
    or error($errors[$_FILES[$fieldname]['error']], $uploadForm); 
     
// check that the file we are working on really was the subject of an HTTP upload 
@is_uploaded_file($_FILES[$fieldname]['tmp_name']) 
    or error('not an HTTP upload', $uploadForm); 
     
// validation... since this is an image upload script we should run a check   
// to make sure the uploaded file is in fact an image. Here is a simple check: 
// getimagesize() returns false if the file tested is not an image. 
@getimagesize($_FILES[$fieldname]['tmp_name']) 
    or error('only image uploads are allowed', $uploadForm); 
     
// make a unique filename for the uploaded file and check it is not already 
// taken... if it is already taken keep trying until we find a vacant one 
// sample filename: 1140732936-filename.jpg 
$now = time(); 
while(file_exists($uploadFilename = $uploadsDirectory.$now.'-'.$_FILES[$fieldname]['name'])) 
{ 
    $now++; 
} 

// now let's move the file to its final location and allocate the new filename to it 
@move_uploaded_file($_FILES[$fieldname]['tmp_name'], $uploadFilename) 
    or error('receiving directory insuffiecient permission', $uploadForm); 
     
// If you got this far, everything has worked and the file has been successfully saved. 
// We are now going to redirect the client to a success page. 
	if (isset($_GET['name'])){
		$name= mysqli_real_escape_string($db, trim($_GET['name']));
		$_SESSION['name'] = $name;
	}

header('Location: ' . $uploadSuccess);
?>
