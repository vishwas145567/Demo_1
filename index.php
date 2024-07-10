<?php
    $title = "Home page";
    require_once './includes/header.php';
    ?>
    <link rel="stylesheet" href="../DEMO/css/BootStrap.css" />
    <link rel="stylesheet" href="../DEMO/css/style.css" />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-mid-8">
            <form method="POST" action="receive.php" class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" required>
                </div>
                <br>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="address" class="form-control" id="inputAddress" name="address" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="city" class="form-control" id="inputCity" name = "city" required>
                </div>
                <br>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Province</label>
                    <select id="province" class="form-select" name ="province" required>
                        <option value="" selected disabled>Choose...</option>
                        <option value="Alberta">Alberta</option>
                        <option value="British Columbia">British Columbia</option>
                        <option value="Manitoba">Manitoba</option>
                        <option value="New Brunswick">New Brunswick</option>
                        <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                        <option value="Northwest Territories">Northwest Territories</option>
                        <option value="Nova Scotia">Nova Scotia</option>
                        <option value="Ontario">Ontario</option>
                        <option value="Prince Edward Island">Prince Edward Island</option>
                        <option value="Quebec">Quebec</option>
                        <option value="Saskatchewan">Saskatchewan</option>
                        <option value="Nunavut">Nunavut</option>
                        <option value="Yukon">Yukon</option>
                    </select>
                </div>
                <br>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Area Code</label>
                    <input type="area_code" class="form-control" id="inputZip" name= "area_code" required>
                </div>
                <br>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-8">
                    <a href="viewrecords.php" class="btn btn-info w-100">View Records</a>
        </div>
    </div>
</div>



            </form>
            <form action="delete_record.php" method="POST">
            <div class="container">
    <div class="row justify-content-center mt-5">
    <div class="col-auto">
    <input type="number" class="form-control" id="Delete_Key" name="del_key" placeholder="Primary Key" >

    </div>
    <div class="col-auto">

    <button type="submit" class="btn btn-danger">To Delete a Record, click here!</button>
        </div>
    </div>
</div>
</form>
        </div>
    </div>
</div>


<?php require_once './includes/footer.php'; ?>