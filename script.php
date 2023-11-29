<?php
// Display number
$k = 1;


for ($i = 1; $i <= 5; $i++) {
  
    for ($j = 1; $j <= 5; $j++) {
       echo $k . "&emsp;";
        
      
        $k++;
    }
    
   
    echo "<br/>";
}

echo "<br/>-----------------------<br/>";


$k = 1;


for ($j = 1; $j <= 5; $j++) {
    // 5 rows
    for ($i = 1; $i <= 5; $i++) {
     
        echo $k . "&emsp;";
        
      
        $k += 5;
    }
    
   
    $k = $j + 1;
    

    echo "<br/>";
}
?>
