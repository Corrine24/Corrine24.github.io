<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apply";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : "";
$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : "";
$guardian = isset($_POST['subject']) ? $_POST['subject'] : "";
$father_name = '';
$husband_name = '';

if ($guardian === 'father') {
    $father_name = isset($_POST['father_name']) ? $_POST['father_name'] : "";
} elseif ($guardian === 'husband') {
    $husband_name = isset($_POST['husband_name']) ? $_POST['husband_name'] : "";
}

$dob_day = isset($_POST['dob_day']) ? $_POST['dob_day'] : "";
$dob_month = isset($_POST['dob_month']) ? $_POST['dob_month'] : "";
$dob_year = isset($_POST['dob_year']) ? $_POST['dob_year'] : "";
$qualification = isset($_POST['qualification']) ? $_POST['qualification'] : "";
$occupation = isset($_POST['occupation']) ? $_POST['occupation'] : "";
$school_name = '';
$company_name = '';

if ($occupation === 'student') {
    $school_name = isset($_POST['school_name']) ? $_POST['school_name'] : "";
} elseif ($occupation === 'employed' || $occupation === 'selfemployed' || $occupation === 'business') {
    $company_name = isset($_POST['company_name']) ? $_POST['company_name'] : "";
}

$address = isset($_POST['address']) ? $_POST['address'] : "";
$area_code = isset($_POST['area_code']) ? $_POST['area_code'] : "";
$phone = isset($_POST['phone']) ? $_POST['phone'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$reference = isset($_POST['reference']) ? $_POST['reference'] : "";
$photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : "";
$application_date = isset($_POST['application_date']) ? $_POST['application_date'] : "";

$sql = "INSERT INTO registration (first_name, last_name, guardian, father_name, husband_name, dob_day, dob_month, dob_year, qualification, occupation, school_name, company_name, address, area_code, phone, email, reference, photo, application_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssssssssss", $first_name, $last_name, $guardian, $father_name, $husband_name, $dob_day, $dob_month, $dob_year, $qualification, $occupation, $school_name, $company_name, $address, $area_code, $phone, $email, $reference, $photo, $application_date);

if ($stmt->execute()) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?> -->




<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apply";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$guardian = $_POST['subject'];
$father_name = '';
$husband_name = '';

if ($guardian === 'father') {
    $father_name = $_POST['father_name'];
} elseif ($guardian === 'husband') {
    $husband_name = $_POST['husband_name'];
}

$dob_day = $_POST['dob_day'];
$dob_month = $_POST['dob_month'];
$dob_year = $_POST['dob_year'];
$qualification = $_POST['qualification'];
$occupation = $_POST['occupation'];
$school_name = '';
$company_name = '';

if ($occupation === 'student') {
    $school_name = $_POST['school_name'];
} elseif ($occupation === 'employed' || $occupation === 'selfemployed' || $occupation === 'business') {
    $company_name = $_POST['company_name'];
}

$address = $_POST['address'];
$area_code = $_POST['area_code'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$reference = $_POST['reference'];
$photo = $_FILES['photo']['name'];
$application_date = $_POST['application_date'];

$sql = "INSERT INTO apply (first_name, last_name, guardian, father_name, husband_name, dob_day, dob_month, dob_year, qualification, occupation, school_name, company_name, address, area_code, phone, email, reference, photo, application_date) VALUES ('$first_name', '$last_name', '$guardian', '$father_name', '$husband_name', '$dob_day', '$dob_month', '$dob_year', '$qualification', '$occupation', '$school_name', '$company_name', '$address', '$area_code', '$phone', '$email', '$reference', '$photo', '$application_date')";

if ($conn->query($sql) === TRUE) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> -->





<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
        .drag-drop-container {
    border: 2px dashed #ccc;
    padding: 20px;
    text-align: center;
}

.image-placeholder {
    width: 150px;
    height: 200px;
    margin-bottom: 10px;
}

.centered-image-upload {
    text-align: center;
}

.centered-image-upload .drag-drop-container {
    display: inline-block;
}

.centered-image-upload .image-placeholder {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
    cursor: pointer;
}



    </style>
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <div class="logo-and-text">
                        <!-- <img src="logo.png" alt="Logo" class="logo" style="max-width: 60px; height: auto;"> -->
                    <div class="text-content">
                        <h2 class="title" style="margin-top: 0;">IUC Computer Education</h2>
                        <h6 class="title" style="font-size: small; margin-top: 0;" >Application for admission to the</h6>
                        <h2 class="title" style="margin-top: 0;" >computer programming course</h2>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Name : </div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-4" type="text" name="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Guardian : </div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject" onchange="handleSubjectChange(this)">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="father">Father Name</option>
                                            <option value="husband">Husband Name</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    
                      <div class="form-row" id="inputFatherName" style="display: none;">
                        <div class="name" style="float: left; ">Father Name : </div>
                        <div class="value" style="float: right; margin-left: 120px;">
                            <div class="input-group" style="margin-top: -30px;">
                                <input class="input--style-5" type="text" name="father_name">
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                            
                    <div class="form-row"  id="inputHusbandName" style="display: none;" >
                        <div class="name" style="float: left;">Husband : </div>
                        <div class="value" style="float: right; margin-left: 120px;">
                            <div class="input-group" style="margin-top: -30px;">
                                    <input class="input--style-5" type="text" name="husband_name">
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>

                    <div class="form-row">
                        <div class="name">Date of Birth : </div>
                        <div class="value">
                            <div class="input-group">
                                <div class="row">
                                    <div class="col-3">
                                        <input class="input--style-5" type="text" name="dob_day" placeholder="Day" maxlength="2">
                                    </div>
                                    <div class="col-3">
                                        <input class="input--style-5" type="text" name="dob_month" placeholder="Month" maxlength="2">
                                    </div>
                                    <div class="col-3">
                                        <input class="input--style-5" type="text" name="dob_year" placeholder="Year" maxlength="4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="form-row">
                            <div class="name">Qualitfication : </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="company">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Occupation : </div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select class="input--style-5" name="occupation" onchange="handleOccupationChange(this)">
                                            <option disabled="disabled" selected="selected">Select an option</option>
                                            <option value="student">Student</option>
                                            <option value="housewife">Housewife</option>
                                            <option value="employed">Employed</option>
                                            <option value="selfemployed">Self Employed</option>
                                            <option value="business">Business</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row" id="schoolNameInput" style="display: none;">
                            <div class="name" style="float: left; ">School Name : </div>
                            <div class="value" style="float: right; margin-left: 120px;">
                                <div class="input-group" style="margin-top: -30px;">
                                    <input class="input--style-5" type="text" name="school_name">
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        
                        <div class="form-row" id="companyNameInput" style="display: none;">
                            <div class="name" style="float: left; ">Company Name : </div>
                            <div class="value" style="float: right; margin-left: 120px;">
                                <div class="input-group" style="margin-top: -30px;">
                                    <input class="input--style-5" type="text" name="company_name">
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                        </div>

                        <div class="form-row">
                            <div class="name">Address : </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="company">
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Phone : </div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code">
                                            <label class="label--desc">Area Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Email : </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Reference : </div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected">Select</option>
                                            <option>Friends</option>
                                            <option>Website</option>
                                            <option>Paper</option>
                                            <option>Media</option>
                                            <option>Others</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                     
                        
                        <div class="form-row p-t-20" style="display: flex; justify-content: center; align-items: center;">
                            <label class="label label--block">Are you an existing customer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-row p-t-20" style="display: flex; justify-content: center; align-items: center;">
                            <label class="label label--block">Upload Photo :</label>
                        <div class="form-group centered-image-upload">
                           
                            <div class="drag-drop-container">
                                <div class="image-placeholder" onclick="document.getElementById('photo-upload').click()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M20 18V6H4v12h16zM4 2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm11 5h2v2h-2V7zM7 7h2v2H7V7zm0 4h2v2H7v-2zm0 4h2v2H7v-2zm4-8h2v2h-2V7zm0 4h2v2h-2v-2zm0 4h2v2h-2v-2z"/>
                                    </svg>
                                
                                </div>
                                <input type="file" name="photo" id="photo-upload" accept="image/*" onchange="handleFileSelect(event)">
                            </div>
                        </div>
                      </div>  
                        
                             
                      <div class="form-row ">
                        <label for="application_date"class="label label--block" style="float: left; ">Register Date :</label>
                        <div class="value" style="float: right; margin-left: 120px;">
                            <div class="input-group" style="margin-top: -30px;">
                                <input type="date" name="application_date" id="application_date" readonly>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>

                      <div style="display: flex; justify-content: center;">
                        <button class="btn btn--radius-2 btn--red" type="submit" style="background-color: #0170c1; color: #fff;">Register</button>
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>



function handleFileSelect(event) {
    const file = event.target.files[0];
    const reader = new FileReader();
    
    reader.onload = function (event) {
        const imagePlaceholder = document.querySelector('.image-placeholder');
        imagePlaceholder.innerHTML = `<img src="${event.target.result}" alt="Uploaded Photo" width="50" height="50">`;
    };
    
    reader.readAsDataURL(file);
}



const applicationDateInput = document.getElementById('application_date');
                          const currentDate = new Date();
                      
                          // Format the date as yyyy-mm-dd
                          const year = currentDate.getFullYear();
                          const month = String(currentDate.getMonth() + 1).padStart(2, '0');
                          const day = String(currentDate.getDate()).padStart(2, '0');
                          const formattedDate = `${year}-${month}-${day}`;
                      
                          applicationDateInput.value = formattedDate;

function handleOccupationChange(selectElement) {
    var selectedOption = selectElement.value;

    var schoolNameInput = document.getElementById('schoolNameInput');
    var companyNameInput = document.getElementById('companyNameInput');

    if (selectedOption === 'student') {
        schoolNameInput.style.display = 'block';
        companyNameInput.style.display = 'none';
    } else if (selectedOption === 'employed' || selectedOption === 'selfemployed' || selectedOption === 'business') {
        schoolNameInput.style.display = 'none';
        companyNameInput.style.display = 'block';
    } else {
        schoolNameInput.style.display = 'none';
        companyNameInput.style.display = 'none';
    }
}




                                    function handleSubjectChange(selectElement) {
                            var selectedOption = selectElement.value;

                            var inputFatherName = document.getElementById('inputFatherName');
                            var inputHusbandName = document.getElementById('inputHusbandName');
                            var fatherNameInput = document.querySelector('input[name="father_name"]');
                            var husbandNameInput = document.querySelector('input[name="husband_name"]');

                            if (selectedOption === 'father') {
                            inputFatherName.style.display = 'block';
                            inputHusbandName.style.display = 'none';
                            fatherNameInput.required = true;
                            husbandNameInput.required = false;
                            } else if (selectedOption === 'husband') {
                            inputFatherName.style.display = 'none';
                            inputHusbandName.style.display = 'block';
                            fatherNameInput.required = false;
                            husbandNameInput.required = true;
                            } else {
                            inputFatherName.style.display = 'none';
                            inputHusbandName.style.display = 'none';
                            fatherNameInput.required = false;
                            husbandNameInput.required = false;
                            }
                            }
     </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <script src="js/global.js"></script>

</body>
</html>
