<?php
// create a new function
function search($text,$table,$docf){
	
	// connection to the Ddatabase
	$db = new PDO("mysql:host=localhost;dbname=ntproesu_ntprodb", 'root', '');
	// let's filter the data that comes in
	$text = htmlspecialchars($text);
	// prepare the mysql query to select the users 
    $query = "SELECT * FROM $table WHERE $docf LIKE concat('%', :qoute_items, '%') LIMIT 1";
	$get_name = $db->prepare($query);
	// execute the query
	$get_name -> execute(array('qoute_items' => $text));
	// show the users on the page
	while($names = $get_name->fetch(PDO::FETCH_ASSOC)){
		// show each user as a lin
        $result = $names['s_qoute_reference'];
        
		// echo '<a href="">'.$names['qoute_name'].'</a>';
        echo $result;
		
	}
}


// GET REQUEST VARIABLES AND STORE THEM
// create empty variable holders both strings
$table = "";
$txt = "";
$docfield = "";


// check if anything was sent with the request
if (!empty($_GET["text"])) {
    # if data was sent code...
    $txt = explode(",",$_GET["text"])[0];
    $table = explode(",",$_GET["text"])[1];
    $docfield =  explode(",",$_GET["text"])[2];
    // call the search function with the data sent from Ajax
    search($txt,$table,$docfield);
}
else {
    echo "empty";
}




?>