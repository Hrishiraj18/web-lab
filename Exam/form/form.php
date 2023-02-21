<?php
if(isset($_POST['submit']))
{
    $conn=mysqli_connect("localhost","root","","schooll");
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    $email=$_POST['email'];
    $address=$_POST['address'];

    if($conn)
    {
        echo"Connection successfull <br>";
        $sql="INSERT INTO student VALUES('$name','$phone','$age','$gender','$course','$email','$address')";
        $result=mysqli_query($conn,$sql);
        
        if($result)
        {
            echo "Successfully added <br>";
        }
        else
        {
            echo "Cannot add data to database";
        }
    }
    else{
        echo "Connection could not be added <br>";
    }
}


?>