<?php
include 'todo_db_con.php';

function addTodo($name, $description, $urgency, $due_date){
  $conn = OpenCon();
  #prepare a statement. This is to be able to pass it diferent variables.
  $addIt = "INSERT INTO todo_items (name, description, urgency, due_date) VALUES (?, ? , ?, ?)";
  //echo 'here';

  if(!$stmt = $conn->prepare($addIt)){
    printf("something went wrong preparing");
  }
  //echo 'here2';


  if(!$stmt->bind_param("ssis", $name, $description, $urgency, $due_date)){
    printf("something went wrong while binding");
  }


  //echo 'here3';
  $stmt->execute();

  $stmt->close();
  CloseCon($conn);
}

function removeTodo($id){
  $conn = OpenCon();

  $deleteIt = "DELETE FROM todo_items WHERE id = ?";
  if (!$stmt = $conn->prepare($deleteIt)){
    printf("something went wrong preparing the excecution");
  }

  if(!$stmt->bind_param("i", $id)){
    printf("something went wrong binding the excecution");
  }

  $stmt->execute();

  $stmt->close();
  CloseCon($conn);
}

#returns an array of todo_list items
function WhatTodo(){
  $conn = OpenCon();

  if(!$result = $conn->query('SELECT * FROM todo_items')){
    echo 'something went wrong';
  }


  CloseCon($conn);


  return $result;

}


?>