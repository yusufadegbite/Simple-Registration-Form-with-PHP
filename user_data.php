<?php
        
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $date = $_POST['date'];
 $gender = $_POST['gender'];

 $data = [$name, $email, $date, $gender];

 //writing to a file
 $file = fopen('userdata.csv', 'a');
 fputcsv($file, $data);
 fclose($file);

  echo 'Registration Succesfull!' . "<br>";
  print_r($name);
  echo '<br>';
  print_r($email);
  echo '<br>';
  print_r($date);
  echo '<br>';
  print_r($gender);


}else{
   echo "no data";
}
 

?>