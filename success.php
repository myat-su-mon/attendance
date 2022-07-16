<?php 
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if(isset($_POST['submit'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $specialty = $_POST['specialty'];

        $original_file = $_FILES['avatar']['tmp_name'];
        $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$contact.$ext";
        move_uploaded_file($original_file, $destination);

        $isSuccess = $crud->insertAttendee($fname, $lname, $dob, $email, $contact, $specialty, $destination);
        $specialtyName = $crud->getSpecialtyById($specialty);
        if($isSuccess){
            SendEmail::SendMail($email, 'Welcome to IT Conference', 'You have successfully registered for this year\'s IT conference.');
            include 'includes/successmessage.php';
        }else {
            include 'includes/errormessage.php';
        }
    }
?>
    
    <img src="<?php echo $destination; ?>" class="img-fluid rounded" style="width: 70%; height: 70%">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $specialtyName['name']; ?></h6>
            <p class="card-text">Date of Birth: <?php echo $_POST['dob']; ?></p>
            <p class="card-text">Email Address: <?php echo $_POST['email']; ?></p>
            <p class="card-text">Contact Number: <?php echo $_POST['contact']; ?></p>
        </div>
    </div>
    
    <?php
        
    ?>

<?php require_once 'includes/footer.php'; ?>