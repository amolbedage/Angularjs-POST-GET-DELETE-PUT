<?php

//echo "amol";
//echo $_POST['name'];
// $_POST['ss'];
 
 $_SERVER['REQUEST_METHOD']==="delete" ? parse_str(file_get_contents('php://input', false , null, -1 , $_SERVER['CONTENT_LENGTH'] ), $_DELETE): $_DELETE=array();
 
$data=$_DELETE;
print_r($data); 

/* $method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    echo '// Method is POST';
} elseif ($method == 'GET') {
    // Method is GET
} elseif ($method == 'PUT') {
    // Method is PUT
} elseif ($method == 'DELETE') {
    echo '// Method is DELETE';
	print_r($_REQUEST);
} else {
     echo '// Method unknown';
} */