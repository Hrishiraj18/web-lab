<?php

$conn = mysqli_connect("localhost", "root", "", "volvo");
if(isset($_POST['sub']))
{
    if($conn)
    {
        $sql = "SELECT * from booking";
        $data = mysqli_query($conn, $sql);
        if(mysqli_num_rows($data)>0)
        {
            while($row=mysqli_fetch_assoc($data))
            {
                echo "name:" . $row['name'] . "contact:" . $row['contact'] .  "Boarding:" . $row['boarding'] . "email:" . $row['email'] . "seat:" . $row['seat'] ."<br>";
            }
        }
        else{
            $var = array("name" => "amal", "age" => "22");
        }
    }
}
