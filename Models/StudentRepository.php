<?php
namespace mvc\Models;

use mvc\Models\StudentResourceModel;

class StudentRepository {
	protected $StudentResourceModel;

	public function __construct() {
		$this->StudentResourceModel = new StudentResourceModel();
	}

	public function add($model) {
		$student = $this->StudentResourceModel;
		return $student->save($model);
	}

	public function edit($model) {
		$student = $this->StudentResourceModel;
		return $student->save($model);
	}

	public function delete($id) {
		$student = $this->StudentResourceModel;
		return $student->delete($id);
	}

	public function get($id) {
		$student = $this->StudentResourceModel;
		return $student->get($id);
	}

	public function getAll() {
		$student = $this->StudentResourceModel;
		return $student->getAll();
	}
}
