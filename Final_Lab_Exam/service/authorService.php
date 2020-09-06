<?php
	require_once('../db/db.php');
	function getByID($id){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		$sql = "select * from Admin where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function getAllUser(){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		$sql = "select * from Admin";
		$result = mysqli_query($conn, $sql);
		$author = [];
		while($row = mysqli_fetch_assoc($result)){
			array_push($author, $row);
		}
		return $author;
	}

	function validate($author){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		$sql = "select * from Admin where username='{$admin['username']}' and password='{$admin['password']}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		if(count($author) > 0 ){
			return true;
		}else{
			return false;
		}
	}

	function insert($author){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		$sql = "insert into Admin values('', '{$author['author_name']}','{$author['username']}','{$author['contact_number']}','{$author['password']}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function update($author){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		$sql = "update Admin set username='{$author['author_name']}','{$author['contact_number']}',$author['username']}', password='{$author['password']}' where id={$author['id']}";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function delete($author){
		$conn = dbConnection();
		if(!$conn){
			echo "DB connection error";
		}
		$sql = "delete from  Admin where id={$author['id']}";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>