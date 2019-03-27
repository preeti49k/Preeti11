<?php 
	//include 'db_connect.php';

	function dbConnect(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database="student_management";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password,$database);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error); 
			echo "Connected Unsuccessfully";
		}
		return $conn;
	}


	function getdata($tableName = "", $selectColumn = "*", $whereCondition = ""){
		$conn = dbConnect();
		//SELECT * FROM TABLENAME WHERE CONDITION

		if(!empty($tableName)){
			$_query = "SELECT $selectColumn FROM $tableName";
			if(!empty($whereCondition)){
				$_query = $_query." WHERE $whereCondition";
			}

			$dataArray = mysqli_query($conn, $_query);
			$_returnArray = array();
			if(mysqli_num_rows($dataArray) > 0){
				while ($row = mysqli_fetch_assoc($dataArray)) {
			    	$_returnArray[] = $row;
			    }
			}
			//printf("Records affected: %d\n", mysqli_affected_rows($conn));
			return $_returnArray;
		}else{
			exit("Please select a table to get the data");
		}
	}

	function insertdata($tableName = "", $selectColumn = "*", $whereCondition = ""){
		$conn = dbConnect();
		//SELECT * FROM TABLENAME WHERE CONDITION

		if(!empty($tableName)){
			$_query = "SELECT $selectColumn FROM $tableName";
			if(!empty($whereCondition)){
				$_query = $_query." WHERE $whereCondition";
			}

			$dataArray = mysqli_query($conn, $_query);
			$_returnArray = array();
			if(mysqli_num_rows($dataArray) > 0){
				while ($row = mysqli_fetch_assoc($dataArray)) {
			    	$_returnArray[] = $row;
			    }
			}
			return $_returnArray;
		}else{
			exit("Please select a table to get the data");
		}
	}

	function updatedata($tableName = "", $selectColumn = "*", $whereCondition = ""){
		$conn = dbConnect();
		//SELECT * FROM TABLENAME WHERE CONDITION

		if(!empty($tableName)){
			$_query = "SELECT $selectColumn FROM $tableName";
			if(!empty($whereCondition)){
				$_query = $_query." WHERE $whereCondition";
			}

			$dataArray = mysqli_query($conn, $_query);
			$_returnArray = array();
			if(mysqli_num_rows($dataArray) > 0){
				while ($row = mysqli_fetch_assoc($dataArray)) {
			    	$_returnArray[] = $row;
			    }
			}
			return $_returnArray;
		}else{
			exit("Please select a table to get the data");
		}
	}

	function deletedata($tableName = "", $whereCondition = ""){
		$conn = dbConnect();
		//SELECT * FROM TABLENAME WHERE CONDITION

		if(!empty($tableName)){
			$_query = "DELETE FROM $tableName";
			if(!empty($whereCondition)){
				$_query = $_query." WHERE $whereCondition";
			}

			$dataArray = mysqli_query($conn, $_query);
			printf("Records affected: %d\n", mysqli_affected_rows($conn));
		}else{
			exit("Please select a table to get the data");
		}
	}

?>