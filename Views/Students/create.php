<h1>Create student</h1>
<form method='post' action='#'>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="name" placeholder="Enter student name" name="name">
	</div>

	<div class="form-group">
		<label for="date">Date Of Birth</label>
		<input type="date" class="form-control" id="date" name="date">
	</div>

	<div class="form-group">
		<label for="address">Address</label>
		<input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
	</div>

	<div class="form-group">
		<label for="gender">Gender</label>
		<input list="genders" class="form-control" id="gender" placeholder="Enter gender" name="gender">
		<datalist id="genders">
			<option value="Male">
			<option value="Female">
		</datalist>
	</div>
	<button type="submit" onclick="alert('Add successfully')" class="btn btn-primary">Save</button>

</form>