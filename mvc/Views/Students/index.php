<h1>Students</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
            <a href="/mvc/students/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new task</a>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Date Of Birth</th>
                <th>Address</th>
                
                <th class="text-center">Action</th>
            </tr>
        </thead>
<?php
foreach ($students as $student) {
	echo '<tr>';
	echo "<td>".$student->getId()."</td>";
	echo "<td>".$student->getName()."</td>";
    $gender = ($student->getGender()==0) ? 'Nam' : 'Nữ';
    echo "<td>" . $gender . "</td>";
	echo "<td>".$student->getDate()."</td>";
    echo "<td>".$student->getAddress()."</td>";
	echo "<td class='text-center'>
            <a class='btn btn-info btn-xs' href='/mvc/students/edit/".$student->getId()."' >
            <span class='glyphicon glyphicon-edit'></span> Edit
            </a>
            <a href='/mvc/students/delete/".$student->getId()."' class='btn btn-danger btn-xs'>
            <span class='glyphicon glyphicon-remove'></span> Delete
            </a>
            </td>";
	echo "</tr>";
}
?>
    </table>
</div>