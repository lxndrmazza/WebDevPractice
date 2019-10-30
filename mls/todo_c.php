<?php
include 'todo_m.php';

if (isset($_POST['name'])){
	if($_POST['value'] == 'add'){
		//printf('we\'re adding, bitches!!!');
		this.sendToAdd($_POST);
	}
}

if (isset($_POST['delete'])){
	//printf('we\'re deleting, hoes!!!');
	this.removeToDo($_POST['delete']);
}


function sendToAdd($addArray){
	//print("ok let's add some sht!!");
	//printf($addArray['due_date']);
	if ($addArray['due_date'] === '2019-01-01'){
		$addArray['due_date'] = NULL;
	}
	this.addToDo($addArray['name'],$addArray['description'],$addArray['urgency'],$addArray['due_date']);
}


function displayToDo(){
	#get the todo_items from the Database
	$result = WhatTodo();
	
	#a <ul> item for testing the controller without the view
	//printf("<ul><p>Things to do</p>");

	#a loop that creates <li> items to attach to send to the view
	while($whatwedoing = $result->fetch_assoc()) {
		if(!$whatwedoing['description'] == NULL or 
			!$whatwedoing['due_date'] == NULL){
			printf("<div class=\"todo-item tooltip 
				color".$whatwedoing['urgency'].
				"\">".
				"<button 
				title=\"here\"
				name=\"delete\" 
				type=\"submit\" 
				value=\"".$whatwedoing['id'].
				"\">X</button> ".
				$whatwedoing['name']." ".
				"<span class =\"tooltiptext\">".
				"Description: ".$whatwedoing['description'].
				"<br>".
				"Date Due: ".$whatwedoing['due_date'].
				"<br>".
				"</span>".
				"</div>");
		}
		else{
			printf("<div class=\"todo-item tooltip color".$whatwedoing['urgency'].
				"\">".
				"<button 
				title=\"here\"
				name=\"delete\" 
				type=\"submit\" 
				value=\"".$whatwedoing['id'].
				"\">X</button> ".
				$whatwedoing['name']." ".
				"</div>");
		}
		#a test <li> item to pe used without the view
		//printf("<li>" . $whatwedoing['name'] . "</li>");
	}

	#a </ul> tag to close the test <ul> item
	//printf("</ul>");

}

?>