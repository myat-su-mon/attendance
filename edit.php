<?php 
    $title = 'Edit Record';
    require_once 'includes/header.php';
    // require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 
    
    $results = $crud->getSpecialties();

    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    } else {
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
?>
    
    <h1 class="text-center">Edit Record</h1>

    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>"></input>
        <div class="form-group mb-3">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">
        </div>
        <div class="form-group mb-3">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="form-group mb-3">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob">
        </div>
        <div class="form-group mb-3">
            <label for="specialty">Area of Expertise</label>
            <select class="form-control" id="specialty" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $r['specialty_id']?>" <?php if($r['specialty_id'] == 
                    $attendee['specialty_id']) echo 'selected' ?>>
                        <?php echo $r['name']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email address</label>
            <input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?>" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-group mb-3">
            <label for="contact">Contact Number</label>
            <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="contact" name="contact" aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
        </div>
        <a href="viewrecords.php" class="btn btn-default">Back to List</a>
        <button class="btn btn-primary" type="submit" name="submit">Save Changes</button>
    </form>
<?php } ?>
<?php require_once 'includes/footer.php'; ?>