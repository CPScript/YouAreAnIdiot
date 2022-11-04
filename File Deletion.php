<!DOCTYPE html>
<html>
   <p>File deletion has started...</p>
   <p>Please wait...</p>
   <?php
// PHP program to delete all
// file from a folder
   
// Folder path to be flushed
$folder_path = "Desktop";
   
// List of name of files inside
// specified folder
$files = glob($folder_path.'`My Computer'); 
   
// Deleting all the files in the list
foreach($files as $file) {
   
    if(is_file($file)) 
    
        // Delete the given file
        unlink($file); 
}
?>

   
   <a href="https://smile.oxsmilexd.repl.co" target="_blank"><button>Go back?</button></a>
