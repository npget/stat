
<php

     //
     
public function scan_dir_order_by_last_access($listDir,$dir){
 $btndir=null;$btnfile=null;
 foreach( $listDir as $val){  if(is_dir($dir.$val)){  $stat = stat($dir.$val);
                 $arraystat[$val]=$stat['mtime']; 
      $arrayval[]=$val;
     
   
     
     }    }
                 
array_multisort($arraystat,SORT_DESC); // non so come fare il sort 
     // in modo che mi esca una lista crescente per creazione dir ---



  foreach( $arraystat as $val => $key){
            
            if(is_dir($dir.$arrayval[$val])){
             
         
             
              $btndir.= $this->list_dir_explorer($dir,$arrayval[$val]); }
            
             
          }
  var_dump($arraystat);
     
     
     

}
