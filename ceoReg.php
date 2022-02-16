<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form class="p-4" method="post" action="ceoStore_details.php">
        <div class="card-heading text-center">
            <h1 class="title pb-2">Registration</h1>
            <!-- <h6 class="mt-3" style="color: #316835;font-weight: 600;">NOTE*:The event may require you to work in a team with people of your college who you may not know.</h6> -->
            <hr>
        </div>
        <div class="form-group row mb-2">
            <label for="name" class="col-md-4 col-form-label">Name*</label>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill" name="name" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label for="email" class="col-md-4 col-form-label">Email*</label>
            <div class="col-md-8">
                <input type="email" class="form-control rounded-pill" name="email" placeholder="Email" required>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label for="phone" class="col-md-4 col-form-label">Contact No. *</label>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill" name="phone" placeholder="Contact No." required>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label for="college" class="col-md-4 col-form-label">College*</label>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill" name="college" placeholder="College" required>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label for="course" class="col-md-4 col-form-label">Course*</label>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill" name="course" placeholder="eg, B.Tech" required>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label for="year" class="col-md-4 col-form-label">Year*</label>
            <div class="col-md-8">
                <input type="text" class="form-control rounded-pill" name="year" placeholder="Year" required>
            </div>
        </div>
        
        <center>
        <button class="btn btn-danger submit rounded-pill align-items-center" type="submit" name="submit_form" value="SUBMIT">SUBMIT</button>
        </center>
    </form>
</body>
</html>