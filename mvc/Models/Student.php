<?php

namespace mvc\Models;

use mvc\Config\Database;
use mvc\Core\Model;

class Student extends Model
{
	public function create($name, $date, $address, $gender)
	{
		$sql = "INSERT INTO students (name, date, address, gender, created_at, updated_at) VALUES (:name, :date, :address, :gender, :created_at, :updated_at)";

		$req = Database::getBdd()->prepare($sql);

		return $req->execute([
			'name'        => $name,
			'date'        => $date,
			'address'     => $address,
			'gender'      => $gender,
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s')
		]);
	}

	public function showStudent($id)
	{
		$sql = "SELECT * FROM students WHERE id =" . $id;
		$req = Database::getBdd()->prepare($sql);
		$req->execute();
		return $req->fetch();
	}

	public function showAllStudents()
	{
		$sql = "SELECT * FROM students";
		$req = Database::getBdd()->prepare($sql);
		$req->execute();
		return $req->fetchAll();
	}

	public function edit($name, $date, $address, $gender)
	{
		$sql = "UPDATE students SET name = :name, date = :date, address = :address, gender = :gender, updated_at = :updated_at WHERE id = :id";

		$req = Database::getBdd()->prepare($sql);

		return $req->execute([
			'name'        => $name,
			'date'        => $date,
			'address'     => $address,
			'gender'      => $gender,
			'updated_at'  => date('Y-m-d H:i:s')

		]);
	}

	public function delete($id)
	{
		$sql = 'DELETE FROM students WHERE id = ?';
		$req = Database::getBdd()->prepare($sql);
		return $req->execute([$id]);
	}
}
