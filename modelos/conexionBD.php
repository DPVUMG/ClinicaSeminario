<?php

class conexionBD{

	public function cBD(){

		$bd = new PDO("mysql:host=localhost;dbname=db_clinica", "elio", "root");

		$bd -> exec("set names utf8");

		return $bd;

	}

}