<?php
if(isset($_POST['submit']))
{
    $metno=$_POST['number'];
    $unit=$_POST['unit'];
    $tariff=$_POST['category'];
    $extra=0;
    $price=0;

    switch($tariff)
    {
        case "rural" :
        { 
            if($unit>0 && $unit<50)
            {
                $extra=1;
                $price=(($unit*1)+$extra);

            }
            break;

        }

        case "residential":
            {
                if($unit>0 && $unit<50)
            {
                $extra=2;
                $price=(($unit*2)+$extra);

            }
            break;

        }
        case "commercial":
            {
                if($unit>0 && $unit<50)
                {
                    $extra=4;
                    $price=(($unit*5)+$extra);
    
                }
                break; 
            }


    }
}

echo "<br><br><h2>Bill</h2>";
echo "Meter number : ".$metno."<br>";
echo "Usage : ".$unit."  units<br>";
echo "Extra charges : ".$extra."<br>";
echo "Total : ".$price." ₹<br>"

?>



<html >
<head>
    <title>Electiricty Bill</title>
</head>
<body>
    <h2>Electricity Bill</h2>
    <form method="POST">
        <label for="number">Enter Meter Number</label><br>
        <input type="text" name="number" ><br>

        <label for="unit">Enter Number of Units</label><br>
        <input type="text" name="unit" ><br>

        <label for="category">Select Category</label><br>
        <select name="category" >
            <option value="rural">Rural</option>
             <option value="residential">Residential</option>
              <option value="commercial">Commercial</option>
        </select>

        <input type="submit" value="submit" name="submit">

        <div>
            <?php
		
		echo "<br><br><h2>Bill</h2>";
                echo "Meter number : ".$metno."<br>";
                echo "Usage : ".$unit."  units<br>";
                echo "Extra charges : ".$extra."<br>";
                echo "Total : ".$price." ₹<br>"
            ?>
        </div>
    </form>
</body>
</html>
