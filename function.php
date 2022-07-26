<?php
    if(isset($_POST['get'])){

  
   $server = 'localhost';

   $username ="root";
   $password ="athulcoder1234"; 
   $database = "info";

    $conn = mysqli_connect($server,$username,$password,$database);

    if (!$conn){
        die ("connection failed");
    }
    $regno = $_POST['regno'];
    $dob = $_POST['dob'];
    $dob = date("Y-m-d",strtotime($dob));
    $dob = strval($dob);
   
    $data = "SELECT * FROM `result` where `Register No`=$regno and `Date of Birth`='$dob'";
    $result = mysqli_query($conn,$data);
    
    while($row  = mysqli_fetch_assoc($result)){
        $name = $row['Name'];
        $father =$row['Name of Guardian'];
        $m1 =$row['Lang I'];
        $m2 =$row['Lang II'];
        $m3 =$row['English'];
        $m4 =$row['Hindi'];
        $m5 =$row['Social Science'];
        $m6 =$row['Physics'];
        $m7 =$row['Chemistry'];
        $m8 =$row['Biology'];
        $m9 =$row['Mathematics'];
        $m10 =$row['IT'];
        $status =$row['Status'];
        if ($row['Register No']==true&&$row["Register No"]){
          $reg_db = $row['Register No'];
          $dob_d = $row["Date of Birth"];
        }
        else {
            $reg_db = 0;
        }
    }
    error_reporting(E_ERROR | E_PARSE);
    if ($reg_db==$regno&&$dob_d=$dob){
        include 'result.php';
    }
  
else{
    include_once  "index.php";
    echo "<script> alert('Invaild Data Entered! No data found with this data. Check the entered data once more and try again...') </script>";
}   
    }
?>