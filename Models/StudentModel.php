<?php
namespace mvc\Models;

use mvc\Core\Model;

class StudentModel extends Model {
	protected $id;
	protected $name;
	protected $date;
	protected $address;
	protected $gender;
	protected $created_at;
	protected $updated_at;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}
	public function getDate() {
		return $this->date;
	}

	public function setDate($date) {
		$this->date = $date;
	}
	public function getAddres() {
		return $this->address;
	}

	public function setAddress($address) {
		$this->address = $address;
	}
	public function getGender() {
		return $this->gender;
	}

	public function setGender($gender) {
		$this->gender = $gender;
	}

	public function getCreate() {
		return $this->created_at;
	}

	public function setCreate($created_at) {
		$this->created_at = $created_at;
	}

	public function getUpdate() {
		return $this->updated_at;
	}

	public function setUpdate($updated_at) {
		$this->updated_at = $updated_at;
	}
}
