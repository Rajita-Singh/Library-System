<?php
	session_start();
	// session_unset($_SESSION['admin_id']);
	session_unset();
	header('location: index.php');

	// function __construct($DB_con)
	// {
	//   $this->db = $DB_con;
	// }