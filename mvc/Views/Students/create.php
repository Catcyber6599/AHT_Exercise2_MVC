<h1>Create student</h1>
<form method='post' action='#'>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="name" placeholder="Enter student name" name="name">
	</div>
	<div class="form-group">
		<label for="gender">Gender</label>
		<select name="gender" id="gender" class="form-control" required="required">
            <option value="1">Male</option>
            <option value="0">Female</option>
        </select>
	</div>
	<div class="form-group">
		<label for="date">Date Of Birth</label>
		<input type="date" class="form-control" id="date" name="date">
	</div>

	<div class="form-group">
		<label for="address">Address</label>
		<input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
	</div>

	
	<button type="submit" onclick="alert('Add successfully')" class="btn btn-primary">Save</button>

</form>