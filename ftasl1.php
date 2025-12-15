<!DOCTYPE html>
<html>
<head>
  <title>PHP form validation</title>
</head>
<body>
<h1>PHP Form Validation Lab</h1>

<?php
$name = "";
$nameError = "";
$email="";
$emailError= "";
$gender="";
$genderError="";
$degree="";
$degreeError="";
$blood="";
$bloodError="";
$dob="";
$dobError="";
$dd = $mm = $yy="";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z][a-zA-Z.\- ]*$/", $name)) {
      $nameError = "Must start with a letter and contain only letters, period, dash or space";
    } elseif (str_word_count($name) < 2) {
      $nameError = "Must contain at least two words";
    }
  }
   if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
    }
  $dd = $_POST["dd"];
  $mm = $_POST["mm"];
  $yy = $_POST["yy"];
  if (empty($dd) || empty($mm) || empty($yy)) {
    $dobError = "All date fields required";
  } elseif ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yy < 1953 || $yy > 1998) {
    $dobError = "Invalid date range";
  }

    }
    if (empty($_POST["gender"])) {
    $genderError = "Select a gender";
  } else {
    $gender = $_POST["gender"];
  }
  if (empty($_POST["degree"])) {
    $degreeError = "Select at least two degrees";
  } elseif (count($_POST["degree"]) < 2) {
    $degreeError = "At least two selections required";
  }
  if (empty($_POST["blood"])) {
    $bloodError = "Select your blood group";
  } else {
    $blood = $_POST["blood"];
  }

}

?>

<form method="post" action="">
  <h3>1. Name:</h3>
  <input type="text" name="name" value="<?php echo $name; ?>">
  <?php echo $nameError; ?>
  <br><br>
  <h3>2. Email:</h3>
  <input type="text" name="email" value="<?php echo $email; ?>">
  <?php echo $emailError; ?>
  <br><br>
    <h3>3. Date of Birth:</h3>
  <input type="text" name="dd" size="2" placeholder="DD" value="<?php echo $dd; ?>"> /
  <input type="text" name="mm" size="2" placeholder="MM" value="<?php echo $mm; ?>"> /
  <input type="text" name="yy" size="4" placeholder="YYYY" value="<?php echo $yy; ?>">
  <?php echo $dobError; ?>
  <br><br>
  <h3>4. Gender:</h3>
  <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked";?>> Male
  <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked";?>> Female
  <input type="radio" name="gender" value="Other" <?php if($gender=="Other") echo "checked";?>> Other
  <?php echo $genderError; ?>
  <br><br>

  <h3>5. Degree:</h3>
  <input type="checkbox" name="degree[]" value="SSC"> SSC
  <input type="checkbox" name="degree[]" value="HSC"> HSC
  <input type="checkbox" name="degree[]" value="BSc"> BSc
  <input type="checkbox" name="degree[]" value="MSc"> MSc
  <?php echo $degreeError; ?>
  <br><br>
  <h3>6. Blood Group:</h3>
  <select name="blood">
    <option value="">Select</option>
    <option <?php if($blood=="A+") echo "selected";?>>A+</option>
    <option <?php if($blood=="A-") echo "selected";?>>A-</option>
    <option <?php if($blood=="B+") echo "selected";?>>B+</option>
    <option <?php if($blood=="B-") echo "selected";?>>B-</option>
    <option <?php if($blood=="O+") echo "selected";?>>O+</option>
    <option <?php if($blood=="O-") echo "selected";?>>O-</option>
    <option <?php if($blood=="AB+") echo "selected";?>>AB+</option>
    <option <?php if($blood=="AB-") echo "selected";?>>AB-</option>
  </select>
  <?php echo $bloodError; ?>
  <br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
