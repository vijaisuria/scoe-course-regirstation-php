<?php
include('connection.php');

$alert = '';

$folder = "uploads/";

if(isset($_POST["submit"])){

    #file handling
    $fileName = basename($_FILES["file"]["name"]);
    $targetPath = $folder . $fileName;
    $fileType = pathinfo($targetPath,PATHINFO_EXTENSION);
    $allowed = array('jpg','png','jpeg','gif','pdf');

    #form inputs
    $full_name = $_POST['full_name'];
    $initial = $_POST['initial'];
    $father_name = $_POST['father_name']; 
    $mother_name = $_POST['mother_name'];
    $dob = $_POST['dob'];
    $phone_num = $_POST['phone_num'];
    $aadhar_num = $_POST['aadhar_num'];
    $email = $_POST['email'];
    $addr = $_POST['address'];
    $gender = $_POST['gender'];
    $diff_abled = $_POST['diff_abled'];
    $blood_grp = $_POST['blood_grp'];
    $martial_status = $_POST['martial_status'];
    $religion  = $_POST['religion'];
    $category = $_POST['category'];
    $area = $_POST['area'];
    $univ_name = $_POST['univ_name'];
    $reg_num = $_POST['reg_num'];
    $degree = $_POST['degree'];
    $branch = $_POST['branch'];
    $semester = $_POST['semester'];
    $course_name = $_POST['course_name'];
    $training_centre = "Siemens Center of Excellence - MIT Campus, Anna University";

    $sql1 = "select * from students where email = '$email' ";  
    $result = mysqli_query($conn, $sql1);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count1 = mysqli_num_rows($result);  

    $sql2 = "select * from students where aadhar_num = '$aadhar_num' ";  
    $result = mysqli_query($conn, $sql2);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count2 = mysqli_num_rows($result);  

    $sql3 = "select * from students where phone_num = '$phone_num' ";  
    $result = mysqli_query($conn, $sql3);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count3 = mysqli_num_rows($result); 

    $repeat_error ="";
    if($count1!=0)
        $repeat_error .= "Email ";
    if($count2!=0)
        $repeat_error .= "Adhaar ";
    if($count3!=0)
        $repeat_error .= "Mobile ";

    if($count1 == 0 && $count2==0 && $count3 == 0){
        #file upload error checking
        if(!empty($_FILES["file"]["name"])){
            if(in_array($fileType, $allowed)){
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)){

                    $sql= "INSERT INTO students ( full_name ,initial, father_name ,mother_name  ,dob ,phone_num ,aadhar_num ,email ,addr ,gender ,diff_abled ,blood_grp ,martial_status ,religion  ,category ,area ,univ_name ,reg_num ,degree ,branch ,semester ,photo ,course_name ,training_centre,upload_date) VALUES ('$full_name', '$initial', '$father_name', '$mother_name', '$dob', '$phone_num', '$aadhar_num', '$email', '$addr', '$gender', '$diff_abled', '$blood_grp', '$martial_status', '$religion', '$category', '$area', '$univ_name', '$reg_num', '$degree', '$branch', '$semester', '$fileName', '$course_name', '$training_centre',NOW());";

                    $insert = $conn->query($sql);

                    if($insert){
                        $alert = 1;
                    }else{
                        $alert = "Sorry, please try again.";
                    } 
                }else{
                    $alert = "Sorry, there was an error uploading your details.";
                }
            }else{
                $alert = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
            }
        }
        else{
            $alert = 'Please upload your file';
        }
    }
    else{
        echo "<div id='snackbar' style='background-color: blue' >
                <i class='fi fi-rr-exclamation d-flex'></i> Form already filled with given ".$repeat_error."
            </div>";
        echo '<script>var x = document.getElementById("snackbar");
                    x.className = "show";
                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)</script>';
    }


}



?>