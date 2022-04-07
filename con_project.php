

<?php
$name_baby = $_POST['input_name1'];
$name_father = $_POST['namefather'];
$name_mather = $_POST["input_name2"];
$input_data = $_POST['input_data'];
$input_spacebaby = $_POST['in_space'];
$gender_baby = $_POST['genderbaby'];
$input_stu = $_POST['input_stu'];
$input_wei = $_POST['input_wei'];
$input_stady = $_POST['input_stady'];

  // Database connection
  $conn = mysqli_connect('localhost','root','','project');
  mysqli_query($conn,"INSERT INTO `form_info`( `name1`,`namefather`, `name2`, `date`,`in_space`,`genderbaby`, `stu`, `wei`, `stady`) VALUES (
     '".$name_baby ."',
     '".$name_father."' ,
     '".$name_mather."',
     '".$input_data ."',
     '".$input_spacebaby ."',
     '".$gender_baby ."',
     '".$input_stu ."',
     '".$input_wei ."',
     '".$input_stady ."'
          );");
  if($conn){
    header("location:http://localhost/project");
  }
 
  
?> 

