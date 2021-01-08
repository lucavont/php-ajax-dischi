<?php 

   include_once('db.php');
    
   foreach($call['response'] as $value){
    echo "<img style='width:300px;height:300px;display:flex' src=".$value['poster'].">" ;
    echo $value['title']."\n";
    echo $value['author']."\n";
    echo $value['year'];
   }
   
?> 