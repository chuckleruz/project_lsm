<?php 

class Connection{

	static public function conn(){

		#Connection to DB  with user and password
		$link = new PDO("mysql:host=localhost;dbname=lsm", 
			            "root", 
			            "root");

		$link->exec("set names utf8");

		return $link;

	}

}
