<!DOCTYPE html>
<?php include 'todo_c.php';
?>
<html>
<head>
	<title>another todo list-app</title>
	<style>

		.container {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: space-around;
			-webkit-border-radius: 20px;
			border-radius: 20px;
		}

		.contained {
			flex-basis: auto;
			border: 3px solid #1C6EA4;
			border-radius: 20px;
			padding: 10px;
			background: lightgray;
		}

		.todo-list {
			display: flex;
			flex-direction: column;
			flex-wrap: wrap;
			flex-basis: auto;
			border: 3px solid #1C6EA4;
			padding: 10px;
			border-radius: 10px;
			background: lightgray;
		}

		.todo-item {
			flex-basis: auto;
			border: 3px solid #1C6EA4;
			padding: 5px;
			border-radius: 10px;
		}

		.color1 {
			background:	#13dceb;
		}

		.color2 {
			background: #10b5c2;
		}

		.color3 {
			background: #0d8f99;
		}

		.color4 {
			background: #09646b;
		}

		.tooltip {
			position: relative;
			display: ;
			border-bottom: 1px dotted black;
		}

		.tooltip .tooltiptext {
			visibility: hidden;
			width: 120px;
			background-color: gray;
			color: #fff;
			text-align: center;
			border-radius: 6px;
			padding: 5px 0;

			/* Position the tooltip */
			position: absolute;
			z-index: 1;
			top: 15px;

		}

		.tooltip:hover .tooltiptext {
			visibility: visible;
		}
	</style>

</head>
<body>
	<div class="container">
		<form class="contained" id="todoform" action="todo_v.php" method="post">
			The Name of the Thing Todo:<br>
			<input type="text" name="name" required><br>
			The Urgency of the Thing Todo:<br>
			<select form="todoform" name="urgency">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select><br>
			A Description of the Thing Todo:<br>
			<input type="text" name="description"><br>
			The Date that it is due:<br>
			<input type="date" name="due_date" value="2019-01-01"><br>
			<button type="submit" name="value" value="add">Submit</button>
		</form>

		<div class="todo-list">
			Things to Do: 
			<form id="deleteform" action="todo_v.php" method="post">
				<?php displayToDo();?>
			</form></div>

		</div>

	</body>
	</html>