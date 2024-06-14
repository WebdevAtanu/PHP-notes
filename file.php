<?php 
// read file
readfile("myFile.txt");
readfile("index.html");


// file opening
$file=fopen("myFile.txt", "r");
if (!$file){
	echo("Can not open the file");
}
else{
	$content=fread($file, filesize("myFile.txt"));
	fclose($file);
	echo $content;
}


// fgets use for reading a file line by line.
$file=fopen("myFile.txt","r");
while ($i=fgets($file)) {
	echo $i;
	echo "<br>";
}
echo("<br>End of file<br>");

// fgetc use for reading a character.
$file=fopen("myFile.txt","r");
while ($i=fgetc($file)) {
	echo $i;
	echo "<br>";
}
echo("<br>End of file");

//Write method
$file=fopen("writeFile.txt", "w");
$result=fwrite($file, "This line is written by php write method\n");
if($result){
	echo("File written succesful");
}

//Append method
$file=fopen("writeFile.txt", "a");
$result=fwrite($file, "\nThis is another line written by php append method");
if($result){
	echo("File append succesful");
}

 ?>