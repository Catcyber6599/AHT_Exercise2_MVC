<h1>Edit student</h1>
<?php
$name = (!empty($student->getName())) ? $student->getName() : '';
$date = (!empty($student->getDate())) ? $student->getDate() : '';
$male = '';
$female = '';
if ($student->getGender() == 1) {
    $male = 'selected';
} else {
    $female = 'selected';
}
$address = (!empty($student->getAddress())) ? $student->getAddress() : '';
?>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" value="<?php echo $name; ?>" name="name">
    </div>

    <div class="form-group">
        <label for="description">Date Of Birth</label>
        <input type="text" class="form-control" id="birthday" placeholder="Enter a birthday" value="<?php echo $date; ?>" name="birthday">
    </div>
    <div class="form-group">
        <label for="description">Gender</label>
        <select name="gender" id="gender" class="form-control" required="required">
            <option <?php echo $male; ?> value="0">Male</option>
            <option <?php echo $female; ?> value="1">Female</option>
        </select>

    </div>
    <div class="form-group">
        <label for="description">Address</label>
        <input type="text" class="form-control" id="address" placeholder="Enter a address" value="<?php echo $address; ?>" name="address">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>