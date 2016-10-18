<?php

#Only gets the content of the file. Has to be assigned to a variable and echoed.
$fileContent=file_get_contents("./content/file.txt");
//echo $fileContent;

#Read and echos out the content of the file.
//readFile("./content/file.txt");

/*#Opens the file indicated and places the pointer and will read line by line.
$fp = fopen ("./content/lipsum.txt", "r");

while(!feof($fp)){
			//Gets the variable fp, holds file path, and will grab 999 bytes of data before it moves on to the next line.
	$row = fgets($fp, 999);
	echo $row . "<br/>";
}

#Closes the file to ensure it does not remain open for use anywhere else.
fclose($fp);
*/

#Storing the file within an Array.
$arr = file("./content/lipsum.txt");
#Stores the content by blocks of text. $arr[1] will show space as that is inputted into the array.
//echo $arr[2];

/*Reads through the text file by characters, not by blocks.
$fp = fopen("file.txt", "r");

while (! feof ($fp)){
	echo fgetc($fp);
}
fclose($fp);
*/


/*Reads through text file to a set length of characters.
$fp = fopen ("file.txt", "r");
#Reads the variable $FP, but will only read 2 characters.
echo fread($fp, 2);

#Check to see if file exists
if(file_exists("file.txt")){
	echo "file exists!";
}

#Get the file size
echo filesize("file.txt")." bytes<br/>";

*/

/*Navigate within a file. rewind($fp) resets the pointer to the beginning of the file.
#ftell($fp) reports how far the pointer has proceeded in bytes.
#fseek($fp, 100) sets a pointer to the specified position in a file.
$fp = fopen("./content/lipsum.txt", "r");
echo fread($fp, 100)."<br/>";
echo ftell($fp)."<br/>";
rewind($fp);
echo fread($fp, 120)."<br/>";
fseek($fp, 120);
echo ftell($fp);
*/

#File locking. Takes the file path and an OPERATION.
##OPERATION LIST
#	LOCK_SH - Reading Lock. Can be read by others.
#	LOCK_EX - File cannot be shared
#	LOCK_UN - Lock is released 
//flock($fp, LOCK_SH);

#Writing to a file uses...
readfile('./content/file.txt');

$fp = fopen("./content/file.txt", 'a');
fwrite($fp, "<br/><h1>BEGONE IMPS!</h1><br/>");
fclose($fp);

readfile("./content/file.txt");


#fputs();
$file = fopen("./content/file.txt", "w");
echo fputs($file, "<h3>Evil</h3><br/>");
fclose($file);

#file_put_contents() calls fopen, freite and fclose in succession
echo file_put_contents("./content/file.txt", "We are opening and closing!<br/>");

#Delete a folder using unlink()

$fp = fopen('file.txt', 'a');
fwrite($fp, 'Hey');
fclose($fp);

unlink('file.txt');

?>