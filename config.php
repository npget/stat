
<php

     //
     
public function scan_dir($dir){

            foreach( $listDir as $val){  if(is_dir($dir.$val)){
$stat = stat($dir.$val);
var_dump($stat['atime']);
echo "<br>";
$outxz[]=rsort($stat['atime']); //  qui non ottengo nulla tutto bool null
var_dump($stat['mtime']);


}  } 

}
