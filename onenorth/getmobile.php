<?php
   $servername = "localhost";
   $username = "root";
   $password = "ravi";
   $dbname = "indiradigital";
   
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
    
   //http://stackoverflow.com/questions/18382740/cors-not-working-php
      if (isset($_SERVER['HTTP_ORIGIN'])) {
          header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
          header('Access-Control-Allow-Credentials: true');
          header('Access-Control-Max-Age: 86400');    // cache for 1 day
      }
   
      // Access-Control headers are received during OPTIONS requests
      if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
   
          if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
              header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
   
          if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
              header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
   
          exit(0);
      }
   
   
      //http://stackoverflow.com/questions/15485354/angular-http-post-to-php-and-undefined
      $postdata = file_get_contents("php://input");
	//$postdata = $_POST["_body"];
	
    if (isset($postdata)) {
      $request = json_decode($postdata);
	
       // $designation = $request->designation; 
         $mobile = $request->mobile; 
         $name = $request->name; 

        
    
  $sql = "INSERT INTO `leads` (`name`, `mobile`) 
  VALUES ('$name', '$mobile');";
   
	
if ($conn->query($sql) === TRUE) {
	
$last_id = $conn->insert_id;


$output = new stdClass();
$output->status = 'success';

$output->userid = $last_id;

echo json_encode($output);
}
else {
	         $output = new \stdClass();
             $output->status='failed';
			
			 echo json_encode($output);
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
	}

?>