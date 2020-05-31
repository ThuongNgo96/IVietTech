<?php
function myname($value)
{
    $tong=0;
for( $i=1 ; $i<=$value; $i++  ){
    $tong += $i;
}
echo(" $tong");
if($tong%2==0){
    echo(" tổng là số chẵn");
}
else{
    echo(" tổng là số lẻ");
}
}
$n = 7;
myname($n);
?>
<?php
function tuoi($t1){
switch ($t1) {
    case  $t1 < 20:
        echo " tuoi cua em";
        break;
    case $t1 < 40:
        echo " tuoi cua anh";
        break;
    case $t1 < 70:
        echo " tuoi cua bo";
        break;
    case $t1 > 70:
        echo " tuoi cua ong";
        break;
}
}
 $n1=37;
 tuoi($n1);


?>
<?php
function tich($son){

$tich=1;

    for( $i11=1; $i11<=$son; $i11++)    {
        $tich *= $i11;
    }
echo ("Tich la $tich " ."<br>");


}
$aa=5;
tich($aa);
?>
<?php 
 function GiaiPT( $a, $b,$c)
{
    echo ($c - $b) / $a;
}
 $a = 1;
$b = 2;
$c = 0;
GiaiPT($a,$a,$a);