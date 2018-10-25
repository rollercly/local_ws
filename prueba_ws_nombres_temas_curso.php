<?php
$courseid = 3;
if (isset($_GET["courseid"])){
    $courseid = $_GET["courseid"];   
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

$curso = $moodle->getContenidosCurso($courseid);
if ($curso){
    echo "<pre>";
    print_r($curso);
    echo "</pre>";
}else{
	var_dump($moodle->error); // Error.
}
?>