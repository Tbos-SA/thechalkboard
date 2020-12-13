<?php require "header.php";

if (isset($_SESSION['userID'])) {
  // Everything is good
}

else {
 header("Location: ../login.php?loginfirst");
 exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Profile</title>
</head>

<body class="no-backround">
  <main>
    <div class="form-container">
      <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">

          <div class="myform form ">
            <div class="logo mb-3">
              <div class="col-sm-12 text-center">
                <h1>Create Your Profile</h1>
              </div>
            </div>
            <form action="includes/profile.inc.php" method="POST" name="profile-form">

              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label for="Surname">Surname</label>
                <input type="text" name="surname" class="form-control" id="surname" aria-describedby="emailHelp" placeholder="Enter Surname">
              </div>

              <div class="form-group">
                <label for="IDnum">ID Number</label>
                <input type="text" name="idnum" id="idnum" class="form-control" aria-describedby="emailHelp" placeholder="Enter your ID number">
              </div>

              <div class="form-group">
                <label for="cellphone">Cellphone</label>
                <input type="text" name="cell" id="cell" class="form-control" aria-describedby="emailHelp" placeholder="Enter your Cellphone number">
              </div>

              <div class="form-group">
                <label for="city">City / Town</label>
                <input type="text" name="city" id="location" class="form-control" aria-describedby="emailHelp" placeholder="Enter your City / Town">
              </div>

              <div class="form-group">
                <label for="Province">Province</label>
                <select class="form-control" id="province" name="province">
                  <option selected disabled> Select Your province here</option>
                  <option value="EASTERN-CAPE">Eastern Cape</option>
                  <option value="WESTERN-CAPE">Western Cape</option>
                  <option value="NORTHERN-CAPE">Northern Cape</option>
                  <option value="FREE-STATE">Free State</option>
                  <option value="LIMPOPO">Limpopo</option>
                  <option value="GAUTENG">Gauteng</option>
                  <option value="MPUMALANGA">Mpumalanga</option>
                  <option value="NORTH-WEST">North West</option>
                  <option value="KWAZULU-NATAL">Kwazulu Natal</option>
                </select>
              </div>

              <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role">
                  <option selected disabled> Select Your role here</option>
                  <option value="LEARNER">Learner</option>
                  <option value="TUTOR">Tutor</option>
                  <option value="ADMIN">ADMIN</option>
                </select>
              </div>

              <div class="form-group">
                <label for="grade">Educational level</label>
                <select class="form-control" id="level" name="level">
                  <option selected disabled> Select Your current grade here</option>
                  <option value="GRADE-10">Grade 10</option>
                  <option value="GRADE-11">Grade 11</option>
                  <option value="GRADE-12">Grade 12</option>
                </select>
              </div>

              <div class="col-md-12 text-center mb-3">
                <button type="submit" name="profile-submit" class=" btn btn-block mybtn btn-primary tx-tfm">Create Profile</button>
              </div>
              <br><br>
            </form>


          </div>
        </div>

        <div class="col-sm-3">
          <!---Empty Space ---->
        </div>
      </div>
    </div>

  </main>
</body>

</html>
