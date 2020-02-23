
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

  <div class="row">
      <h3 style="padding-left: 135px; color: #e30048;" style="padding-top: 800px;">
      ------------------------------- Register -------------------------------</h3>
    </div>

  <div class="container">
    
    <div>
    <div class="form">
        <form method="post" action="validation.php">
            <div class="row">
                <div class="col-lg-3">
                    
                    <label for="validationServer01">First name:</label><br>
                    <input type="text" id="fnameErr" maxlength="10" required="" name="fname" class="form-control is-valid" placeholder="Firstname">
                    <br>
                </div>
                <div class="col-lg-3">
                    <label for="lnameErr">Last name:</label><br>
                    <input type="text" id="lname" name="lname" min="1" class="form-control" placeholder="Lastname"><br>
                </div>
                <div class="col-lg-3">
                    <label for="mname">Middle name:</label><br>
                    <input type="text" id="mnameErr" name="mname" class="form-control" placeholder="Middlename"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <label for="address">Address:</label><br>
                    <input type="text" id="addressErr" name="address" class="form-control" placeholder="Complete Address"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <label for="birthday">Date of Birth:</label><br>
                  	<input type="date" id="birthErr" name="birthday" class="form-control"><br>
                </div>
                <div class="col-lg-6">
                  	<label for="lname">Place of birth:</label><br>
                    <input type="text" id="place" name="place" class="form-control" placeholder="Complete Address"><br>
                </div>
            </div>
            

            <label for="lname">Gender</label><br>
            <div class="form-check-inline">
                <label class="form-check-label" for="radio1">
                  <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male" checked>Male
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="radio2">
                  <input type="radio" class="form-check-input" id="radio2" name="gender" value="Female">Female
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="radio3">
                  <input type="radio" class="form-check-input" id="radio3" value="Other" name="gender">Other
                </label>
            </div>

            <div class="row">
                <div class="col-lg-3">
                	<label for="lname">Gaurdian:</label><br>
                  <input type="text" id="guardian" name="guardian" class="form-control" placeholder="Complete Name"><br>
                </div>
                <div class="col-lg-3">
                  <label for="phonenum">Contact Number:</label><br/>
                  <input name="phonenum" id="phonenum" value="+63"   pattern="[+0-9]{13}" type="tel" class="form-control"><br>

                </div>
                <div class="col-lg-3">
                  <label for="lname">Civil Status:</label><br>
                  <input type="text" id="status" name="status" class="form-control" placeholder="Ex: Single"><br><br>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputYear">Year Level</label>
                    <select id="inputState" class="form-control" name="yearlvl">
                      <option selected>Choose...</option>   
                      <option>1st year</option>
                      <option>2nd year</option>
                      <option>3rd year</option>
                      <option>4th year</option>
                      <option>5th year</option>
                    </select>
                </div>
            
                  <div class="form-group col-md-3">
                  <label for="inputCourse">Course</label>
                    <select id="inputState" class="form-control" name="course">
                      <option selected>Choose...</option>
                      <option>Bachelor of Engineering</option>
                      <option>Bachelor of Education</option>
                      <option>Bachelor of Computer Applications</option>
                      <option>Bachelor of Business Administration</option>
                      <option>BS in Chemical Engineering</option>
                      <option>BS in Software Engineering</option>
                      <option>BS in Technology Communication Management</option>
                    </select>
                    </select>
                </div>
                <div class="col-lg-3">
                  <label for="lname">School Year</label><br>
                  <input type="text" id="status" name="sy" class="form-control" placeholder="Year"><br><br>
                </div>
              </div>

            <div class="row">
                 <div class="col-lg-9">
                    <input name="submit" class="btn btn-danger btn-block" type="submit" value="Submit">
                 </div>
             </div> 
            

        </form><br>
      </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>