<?php 
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php'; 
    
    $results = $crud->getSpecialties();
?>
    <h1 class="text-center">Registration for IT Conference</h1>

    <form method="post" action="success.php">
        <div class="form-group mb-3">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
        </div>
        <div class="form-group mb-3">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>
        </div>
        <div class="form-group mb-3">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob">
        </div>
        <div class="form-group mb-3">
            <label for="specialty">Area of Expertise</label>
            <select class="form-control" id="specialty" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $r['specialty_id']?>"><?php echo $r['name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-group mb-3">
            <label for="contact">Contact Number</label>
            <input type="text" class="form-control" id="contact" name="contact" aria-describedby="phoneHelp" required>
            <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>
    </form>

<?php require_once 'includes/footer.php'; ?>