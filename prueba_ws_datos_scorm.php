<?php
$userid = 5;
$scoid = 19;
$intentoid = 1;

if (isset($_GET["userid"])){
    $userid = $_GET["userid"];   
}
if (isset($_GET["scoid"])){
    $scoid = $_GET["scoid"];
}
if (isset($_GET["intentoid"])){
    $intentoid = $_GET["intentoid"];
}

require_once ("webservices_moodle.php");

$token = 'a9ac8cf9b29fd2ded136f8d9e3950033';//wsprueba
$server = 'http://localhost/moodle_3_3_5/';

// $dir = '/moodle'; // May be null if moodle runs in the root directory in the server.
$dir = ''; // May be null if moodle runs in the root directory in the server.

// To do things with Moodle, we create a new Moodle class, initialize it, and then call its functions.
$moodle = new Moodle();

// Initialize the class.
$fields = array('token'=>$token, 'server'=>$server, 'dir'=>$dir);
$moodle->init($fields);

$curso = $moodle->getDatosScorm($scoid,$userid,$intentoid);
if ($curso){
//     	echo "<pre>";
//     	var_dump($curso);          // Success, normal result.
//     	echo "</pre>";
   
    echo "<pre>";
    print_r($curso);
    echo "</pre>";
    	
}else{
	var_dump($moodle->error); // Error.
}

//modificado jose
//modificado jose
// echo $OUTPUT->footer();
?>