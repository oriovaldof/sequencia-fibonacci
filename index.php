<?php
/*sequencia de fibonacci em um for simples*/
$tm = [];
for($i = 0; $i <= 20; $i++){
   if($i == 0){
       $tm[0] = 0;
       $tm[1] = 0;
   }else{
       if($i == 1 || $i == 2){
            $tm[0] = 0;
            $tm[1] = 1;
       }else{
           $tm[0] = $tm[1];
           $tm[1] = $resultado;
       }
   }
   $resultado = array_sum($tm);
   echo $resultado."\n";
    
}
?>
