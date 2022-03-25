<?php
namespace mvc\Models;

use mvc\Core\ResourceModel;
use mvc\Models\StudentModel;

class StudentResourceModel extends ResourceModel {
	public function __construct() {
		$student = 'students';
		$id     = 'id';

		$studentmodel = new StudentModel();

		$this->_init($student, $id, $studentmodel);
	}
}
