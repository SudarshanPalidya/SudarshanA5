<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body style="background-color:black;color: yellow;">
<?php
$file = fopen("file.txt","r");
$cont=readfile("file.txt");
echo "<br>"; 
 
$str=file_get_contents("file.txt");
$vCount = 0;  
$cCount = 0;
$dCount = 0;
$sCount = 0;
$str = strtolower($str);  
    for($i = 0; $i < strlen($str); $i++) {
    	 if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') {  
        $vCount++;  
    }  
              
    else if($str[$i] >= 'a' && $str[$i] <= 'z') {  
        $cCount++;  
        } 

    else  if($str[$i] >= '0' && $str[$i] <= '9') {  
        $dCount++;  
        }  

    else{
    	$sCount++;
    }
    }  
    $space=(substr_count($str," "));
    $line=count(file("file.txt"));
    echo "Number of vowels : " , $vCount;  
    echo "<br>";  
    echo "\nNumber of consonants : " , $cCount;  
    echo "<br>"; 
    echo "Number of digits : " , $dCount;  
    echo "<br>";    
    echo "Number of special Characters : " , $sCount - $dCount -1;  
    echo "<br>";
    echo "Number of words : " , str_word_count($str);  
    echo "<br>";
    echo "Number of characters : " , mb_strlen($str);  
    echo "<br>";
    echo "Number of lines : " , $line;  
    echo "<br>";


$data= filesize("file.txt");
echo 'Size of the file is: '.$data;
fclose($file);
?>
</body>
</html>
