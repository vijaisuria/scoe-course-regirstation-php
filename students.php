<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siemens Registration Form</title>
  <link rel="stylesheet" href="./css/form.css">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</head>

<body>

  <?php
  include('action/upload.php');

  if (isset($_POST["submit"])) {
    if ($alert != 1) {
      echo '
            <div id="snackbar" style=" background-color: red; " >
                <i class="fi fi-rr-exclamation d-flex"></i> '
        . $alert . '
            </div>
        ';
    } else {
      echo '
          <div id="snackbar" style=" background-color: green; " >
            <i class="fi fi-rr-badge-check d-flex"></i>
            Record added successfully!
          </div>
          ';
    }

    echo '
      <script>
         myFunction();
         function myFunction() {
          var x = document.getElementById("snackbar");
          x.className = "show";
          setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
        }
      </script>
      ';
  }
  ?>



  <div class="forms-main-wrapper">
    <div class="forms-form-wrapper">
      <form id="myform" method="post" enctype="multipart/form-data">
        <div>
          <center><label class="label-main"><b>SCoE</b></label></center>
        </div>
        <div class="forms-input-wrapp forms-mb-3">
          <div>
            <label for="full_name" class="forms-form-label">Full Name</label>
          </div>

          <div>
            <input type="text" name="full_name" id="full_name" placeholder="First name" class="forms-form-input" />


            <input type="text" name="initial" id="initial" placeholder="Initial" class="forms-form-input" />
          </div>
        </div>

        <div class="forms-input-wrapp forms-mb-3">
          <div>
            <label for="father_name" class="forms-form-label">Father's Name</label>
          </div>

          <div>
            <input type="text" name="father_name" id="father_name" placeholder="Father's Name"
              class="forms-form-input" />
          </div>
        </div>

        <div class="forms-input-wrapp forms-mb-3">
          <div>
            <label for="mother_name" class="forms-form-label">Mother's Name</label>
          </div>

          <div>
            <input type="text" name="mother_name" id="mother_name" placeholder="Mother's Name"
              class="forms-form-input" />
          </div>
        </div>

        <div class="forms-mb-3">
          <label for="dob" class="forms-form-label"> Date of Birth </label>
          <input type="date" name="dob" id="dob" class="forms-form-input" />
        </div>

        <div class="forms-input-wrapp forms-mb-3">
          <div>
            <label for="phone_num" class="forms-form-label">Phone Number</label>
          </div>

          <input type="text" name="phone_num" id="phone_num" placeholder="Phone number" pattern="[0-9]{10}" required
            class="forms-form-input" onKeyUp="checkInput()" />
          <div id="phone_error" class="hidden error" style="display:none"> Please enter a valid phone number </div>
        </div>

        <div class="forms-input-wrapp forms-mb-3">
          <div>
            <label for="aadhar_num" class="forms-form-label">Aadhar Number (Type 12 digits without space) </label>
          </div>

          <div>
            <input type="text" name="aadhar_num" id="aadhar_num" placeholder="Aadhar Number" pattern="[0-9]{12}"
              required onKeyUp="checkInput1()" class="forms-form-input" />
          </div>
          <div id="aad_error" class="hidden error" style="display:none"> Please enter a valid aadhar number </div>
        </div>

        <div class="forms-mb-3">
          <label for="email" class="forms-form-label"> Email </label>
          <input type="email" name="email" required id="email" placeholder="example@email.com"
            class="forms-form-input" />
        </div>

        <div class="forms-mb-3">
          <label for="address" class="forms-form-label"> Address </label>

          <input type="text" name="address" id="address" placeholder="Street address"
            class="forms-form-input forms-mb-3" />
          <input type="text" name="address2" id="address2" placeholder="Street address line 2"
            class="forms-form-input" />
        </div>

        <div class="forms-mb-3">
          <label class="forms-form-label">Gender</label>

          <select class="forms-form-input" name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>

          </select>
          <div id="otherGenderDiv" style="display: none;">
            <label for="otherGender" class="forms-form-label">Enter your gender:</label>
            <input type="text" class="forms-form-input" id="otherGenderInput"><br><br>
            <submit id="addGender" class="forms-btn">Add</submit>
          </div>
        </div>

        <div class="forms-mb-3">
          <label class="forms-form-label">Are you Differently abled ?
          </label>

          <select class="forms-form-input" name="diff_abled" id="diff_abled">
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>

        <div class="forms-mb-3">
          <label for="blood_grp" class="forms-form-label"> Blood Group </label>
          <input type="text" name="blood_grp" id="blood_grp" placeholder="Blood Group" class="forms-form-input" />
        </div>

        <div class="forms-mb-3">
          <label class="forms-form-label">Marital Status
          </label>

          <select class="forms-form-input" name="martial_status" id="martial_status">
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="widowed">Widowed</option>
            <option value="divorced">Divorced</option>
            <option value="others">Others</option>
          </select>
          <div id="otherMaritalStatus" style="display: none;">
            <label for="otherMaritalStatusInput" class="forms-form-label">Enter your marital status:</label>
            <input type="text" class="forms-form-input" id="otherMaritalStatusInput"><br><br>
            <submit id="addMaritalStatus" class="forms-btn">Add</submit>
          </div>
        </div>

        <div class="forms-mb-3">
          <label for="religion" class="forms-form-label"> Religion </label>
          <input type="text" name="religion" id="religion" placeholder="Religion" class="forms-form-input" />
        </div>

        <div class="forms-mb-3">
          <label class="forms-form-label">Category</label>

          <select class="forms-form-input" name="category" id="category">
            <option value="general">General</option>
            <option value="bc">Backward Class(BC)</option>
            <option value="bcm">Backward Class Muslims(BCM)</option>
            <option value="mbcdnc">Most Backward Classes and Denotified Communities(MBC & DNC)</option>
            <option value="sc">Scheduled Castes(SC)</option>
            <option value="sca">Scheduled Caste - Arunthathiyars(SCA)</option>
            <option value="st">Scheduled Tribes</option>
            <option value="others">Others</option>
          </select>
          <div id="otherCategoryDiv" style="display: none;">
            <label for="otherCategory" class="forms-form-label">Enter your category:</label>
            <input type="text" class="forms-form-input" id="otherCategoryInput"><br><br>
            <submit id="addCategory" class="forms-btn">Add</submit>
          </div>

        </div>

        <div class="forms-mb-3">
          <label class="forms-form-label">Urban or Rural</label>

          <select class="forms-form-input" name="area" id="area">
            <option value="urban">Urban</option>
            <option value="rural">Rural</option>
          </select>
        </div>

        <div class="forms-mb-3">
          <label for="religion" class="forms-form-label"> University/Institution Name </label>
          <input type="text" name="univ_name" id="univ_name" placeholder="University/Institution Name"
            class="forms-form-input" />
        </div>

        <div class="forms-mb-3">
          <label for="reg_num" class="forms-form-label"> College Registration Number / Employee ID</label>
          <input type="text" name="reg_num" id="reg_num" placeholder="College Registration Number / Employee ID"
            class="forms-form-input" />
        </div>

        <div class="forms-mb-3">
          <label for="degree" class="forms-form-label">Degree</label>
          <input type="text" name="degree" id="degree" placeholder="Degree" class="forms-form-input" />
        </div>

        <div class="forms-mb-3">
          <label for="branch" class="forms-form-label">Branch</label>
          <input type="text" name="branch" id="branch" placeholder="Branch" class="forms-form-input" />
        </div>

        <div class="forms-mb-3">
          <label for="semester" class="forms-form-label">Pursuing Semester</label>
          <input type="text" name="semester" id="semester" placeholder="Pursuing Semester" class="forms-form-input" />
        </div>


        <div class="forms-mb-3">
          <label for="upload" class="forms-form-label">
            Upload Photo
          </label>
          <input type="file" name="file" id="upload" class="forms-form-input forms-form-file" />
        </div>

        <div class="forms-mb-3">
          <label for="course_name" class="forms-form-label">Course Name</label>
          <input type="text" name="course_name" id="course_name" placeholder="Course Name" class="forms-form-input" />
        </div>

        <button class="forms-btn" name='submit'>Submit</button>
      </form>
    </div>
  </div>

  <script src="./js/validate.js"></script>
</body>

</html>