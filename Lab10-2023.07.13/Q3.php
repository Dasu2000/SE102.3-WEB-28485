<?php
    $units=120;

    if($units<=50)
    {
        $bill=$units*3.5;
    }
    elseif($units<=100)
    {
        $bill=50*3.5+($units-50)*4;
    } 
     elseif($units<=150)
    {
        $bill=50*3.5+50*4+($units-100)*5.20;
    } 
    
    else
    {
        $bill=50*3.5+50*4+50*5.20+($units-150)*6.50;
    } 

 echo "Electricity Bills: Rs. ".$bill;
    
?>