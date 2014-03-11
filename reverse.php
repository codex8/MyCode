<?php
//One
$string = SAMEER;
$i = 0;
while(isset($string[$i])){
        $i++;
}
$i--;
while(isset($string[$i])){
        echo $string[$i];
$i--;
}

echo "<br>";
//Two
$str_name='sameer';
$len=strlen($str_name);
//echo $len;
$i=$len;
for ($i;$i>-1;$i--)   
//$i>-1 because in array Ist element is start with 0th position.
{
echo $str_name[$i];
}

?>
