
<php

     //
     
public function scan_dir_order_by_last_access($dirarray,$dir){

foreach( $dirarray as $val){  if(is_dir($dir.$val)){
    $stat = stat($dir.$val);
      var_dump($stat['atime']);//ok
       echo "<br>";
           $outxz[]=rsort($stat['atime']); //  qui non ottengo nulla tutto bool null
       var_dump($stat['mtime']); //ok 


       }     } 

}
