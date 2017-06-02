<?php

include 'templates/result.php'; // require success template

 /**
  * Upload controller file that get's posted data and checks for a leader collection
  *
  * @author  Siya
  *
  * @since 1.0
  *
  */

if(empty($_POST)) {
   echo "Redirect...";
   header("location: /"); // redirect user to index
}

if($_FILES['csv_file']['error'] > 0) {
  echo "Error occured uploading the file";
}

// get file contents from temporary storage
$content = fopen($_FILES['csv_file']['tmp_name'], 'rb');

$collection = '';
 
// get file contents
 while ( ($value = fgets($content)) !== false) {
   $collection .= $value;
 }

 $array_collection = explode(',', $collection);

 $array_count = count($array_collection);

 $unique_array_coll = array_unique($array_collection);

 $collection_leader = -1;

 foreach($unique_array_coll as $item) {
   if(count(array_filter($array_collection, create_function('$a','return $a=='.$item.';'))) > ($array_count / 2)) {
   	 $collection_leader = "1";
   }
 }

if ($collection_leader == 1) {
	$message = "There is a leader collection";
} else {
	$message = "There is no leader collection";
}

get_result($message, $collection_leader);


