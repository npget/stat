
<php



if( $listDir = array_diff(scandir($dir), array('..', '.','extra_final'))){
  $c=0;
  
foreach( $listDir as $val){ if(is_dir($dir.$val)){  $stat = stat($dir.$val);
$listDir[] =  usort( $stat['atime']);
echo $stat['atime'];
}  
} 

