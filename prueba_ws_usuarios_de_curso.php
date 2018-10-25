<?php
$user_id = 3;
$roleid = 5;
$courseid = 4;

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

// Usage examples.
// Normally, a function returns something useful, such as an array of user properties, or TRUE, on success.
// When something happens the return is FALSE, and the last error string is in $moodle->error string.
// A lot of things need to be done in Moodle for web services API to work properly. See readme in this project.

// // Get user information.
// $id = 29245; // User id in Moodle. 1 for guest user.
// // $user = $moodle->getUser($id);
// if ($user)
  // var_dump($user);          // Success, normal result.
// else
  // var_dump($moodle->error); // Error.

// $courseid = null;//id del curso

$curso = $moodle->getUsuariosCurso($courseid);
if ($curso){
	echo "<pre>";
	print_r($curso);          // Success, normal result.
	echo "</pre>";
}else{
	var_dump($moodle->error); // Error.
}

//modificado jose
//modificado jose
// echo $OUTPUT->footer();
?>