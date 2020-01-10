
<php

     //
     
public function scan_dir_order_by_last_access($dirarray,$dir){

foreach( $dirarray as $val){  if(is_dir($dir.$val)){
$stat = stat($dir.$val);

$arraystat[$val]=$stat['mtime'];


} 
}
array_multisort($arraystat,SORT_DESC);
var_dump($arraystat);
     
    $c=0;
        foreach( $listDir as $val){
          $c++;
       
            if(is_file($dir.$val)){
$btnfile.=$this->list_file_explorer($dir,$val);
             }
             if(is_dir($dir.$val)){
        
 $btndir.= $this->list_dir_explorer($dir,$arraystat);
             
             
             }
             
             
             } 
     
     
     

}
