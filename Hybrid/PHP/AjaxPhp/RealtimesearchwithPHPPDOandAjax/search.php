<?php


// create a new function
function search($text){
	
	// connection to the Ddatabase
	$db = new PDO("mysql:host=localhost;dbname=ntproesu_ntprodb", 'root', '');
	// let's filter the data that comes in
	$text = htmlspecialchars($text);
	// prepare the mysql query to select the users 
    $query = "SELECT * FROM supplier_qoutes WHERE qoute_id LIKE concat('%', :qoute_id, '%')";
	$get_name = $db->prepare($query);
	// execute the query
	$get_name -> execute(array('qoute_id' => $text));
	// show the users on the page
	while($names = $get_name->fetch(PDO::FETCH_ASSOC)){
		// show each user as a link
        $result = '<div style="background-color : yellowgreen;"><a href="">'.$names['qoute_id'].'</a>';
        $result .= '<a href="'.$names['qoute_name'].'">'.$names['qoute_name'].'</a></div>';
		// echo '<a href="">'.$names['qoute_name'].'</a>';
        echo $result;
		
	}
}


// call the search function with the data sent from Ajax
search($_GET['txt']);


?>