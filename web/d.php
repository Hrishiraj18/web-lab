<?php

$conn = mysqli_connect("localhost", "root", "", "school");
if(isset($_POST['sub']))
{
    if($conn)
    {
        $sql = "SELECT * from student";
        $data = mysqli_query($conn, $sql);
        if(mysqli_num_rows($data)>0)
        {
            while($row=mysqli_fetch_assoc($data))
            {
                echo "email:" . $row['email'] . "password:" . $row['password'] . "<br>";
            }
        }
        else{
            $var = array("name" => "amal", "age" => "22");
        }
    }
}
