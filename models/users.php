<?php

class User{
	public $id
	public $name
	public $email
	public $password
	public $picture

	function __construct ($atrr = array()){
		if(!empty($atrr)){
			$this->id = array_key_exists('id', $atrr) ? $atrr['id'] : null;
			$this->name = $atrr['name']
			$this->email = $atrr['email']
			$this->picture = $atrr['picture']
		}
	}

	public function insert(){}
	public function update(){}
	public function delete(){}

	public static function getAll(){}
	public static function getOne(){}






}