<?php
// The PHP code to read the file and write it to the output buffer is as follows (the readfile() function returns the number of bytes read on success):
echo readfile("sampletext.txt");


// The fread() function reads from an open file.

// The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.

// The following PHP code reads the "webdictionary.txt" file to the end
$myfile = fopen("sampletext.txt", "r");
// some code to be executed....
fclose($myfile);
?>