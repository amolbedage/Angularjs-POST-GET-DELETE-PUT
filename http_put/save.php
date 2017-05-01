<?php

//echo "amol";
//echo $_POST['name'];
// $_POST['ss'];

 $_SERVER['REQUEST_METHOD']==="PUT" ? parse_str(file_get_contents('php://input', false , null, -1 , $_SERVER['CONTENT_LENGTH'] ), $_PUT): $_PUT=array();
 
$data=$_PUT;
print_r($data);