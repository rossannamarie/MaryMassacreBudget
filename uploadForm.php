<?php
session_start();
include 'template.php';

$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 

// make a note of the location of the upload handler script 
//$uploadHandler = $_SERVER['HTTP_HOST'] . $directory_self . 'uploadPicture.php'; 
$uploadHandler = $directory_self . 'uploadPicture.php';

// set a max file size for the html upload form 
$max_file_size = 30000; // size in bytes 

// now echo the html page 
?>
    <body> 
     
    <form id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post"> 
    <font face = "Century Gothic"> 
        <h1> 
            Upload form 
        </h1> 
         
        <p> 
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>"> 
        </p> 
         
        <p> 
            <label for="file">File to upload:</label> 
            <input id="file" type="file" name="file"> 
        </p> 
                 
        <p> 
            <label for="submit">Press to...</label> 
            <input id="submit" type="submit" name="submit" value="Upload me!"> 
        </p> 
     </font>
    </form> 
     
     
    </body> 

</html>
