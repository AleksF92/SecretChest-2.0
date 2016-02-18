<?php
	class Database {
		private $db = NULL;

		function __construct() {
			//Connection data
			$host = "localhost";
			$username = "root";
			$password = "";
			$dbName = "secretchest_data";

			//Create connection
			$this->db = new mysqli($host, $username, $password, $dbName);

			//Check connection
			if ($this->db->connect_error) {
			    die("Connection failed: " . $this->db->connect_error);
			}
		}

		function query($query) {
			$result = NULL;

			if ($result = $this->db->query($query)) {
				/*
				while ($row = $result->fetch_row()) {
					for ($i = 0; $i < $result->field_count; $i++) {
						printf("[%s] ", $row[$i]);
					}
	    		}*/
	    	}

	    	return $result;
		}
	}

	$DB = new Database();
?>