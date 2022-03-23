<?php
namespace mvc\Controllers;

use mvc\Core\Controller;
use mvc\Models\StudentModel;
use mvc\Models\StudentRepository;

class StudentsController extends Controller {
	public function index() {
		$studens = new StudentRepository();

		$d['students'] = $studens->getall();
		$this->set($d);
		$this->render("index");
	}

	public function create() {
		if (isset($_POST["name"])) {

			$model = new StudentModel();
			$model->setName($_POST['name']);
			$model->setDate($_POST['date']);
            $model->setAddress($_POST['address']);
            $model->setGender($_POST['gender']);

			$add = new StudentRepository();

			if ($add->add($model)) {
				header("Location: ".WEBROOT."students/index");
			}
		}

		$this->render("create");
	}

	public function edit($id) {
		$student = new StudentRepository();

		$d["students"] = $student->get($id);

		if (isset($_POST["name"])) {
			$model = new StudentModel();
			$model->setName($_POST['name']);
			$model->setDate($_POST['date']);
            $model->setAddress($_POST['address']);
            $model->setGender($_POST['gender']);

			$edit = new StudentRepository();
			if ($edit->edit($model)) {
				header("Location: ".WEBROOT."students/index");
			}
		}
		$this->set($d);
		$this->render("edit");
	}

	public function delete($id) {
		$student = new StudentRepository();
		if ($student->delete($id)) {
			header("Location: ".WEBROOT."students/index");
		}
	}
}
