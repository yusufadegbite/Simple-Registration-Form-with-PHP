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

  echo 'Registration Succesfull!';

}else{
   echo "no data";
}
 

?>