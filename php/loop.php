<?php

$n= 2;
$tong=0;
for( $i=1 ; $i<=$n; $i++  ){
    $tong += $i;
}
echo(" $tong");
if($tong%2==0){
    echo(" tổng là số chẵn");
}
else{
    echo(" tổng là số lẻ");
}

?>
<?php
$t=7;
$tong1=0;
for ($i1=1; $i1 <$t ; $i1++) { 

    if( $i1 %2==1){
        $tong1=$tong1+(-$i1) ;
    }
    echo(" tong la $tong1.</br>");
}
echo(" tong la $tong1")
?>