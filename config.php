
<php

     //
     
public function scan_dir_order_by_last_access($listDir,$dir){
 $btndir=null;$btnfile=null;
 foreach( $listDir as $val){  if(is_dir($dir.$val)){  $stat = stat($dir.$val);
                 $arraystat[$val]=$stat['mtime']; 
     // SE PASSO dentro $arraystat[$val] un valore  numerico e solo numerico  
     // OVVIAMENTE ME LA SCARTA e mi ARRAY IN CHIAVE  ritorna [0]=> int(1578674338)
   
     
     }    }
                 
array_multisort($arraystat,SORT_DESC,$arraystat);
//var_dump($arraystat);


  foreach( $arraystat as $val => $key){
            
             if(is_dir($dir.$val)){
             
       
             
              $btndir.= $this->list_dir_explorer($dir, $val); }
            
             
          }
  var_dump($arraystat);
     
     
     

}
