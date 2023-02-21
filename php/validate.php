<?php
$name=$age='';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];

    $errors=array('name'=>'','age'=>'');

    if(empty($name))
    {
        $errors['name']="Please enter your name <br>";
    }
    else if(!preg_match('/^[a-zA-z]+$/',$name))
    {
        $errors['name']="plese enter only alphabets";
    }
if(empty($age)){
    $errors['age'] = "Please enter an age!<br>";
}
else if(!preg_match('/^[0-9]{2}+$/',$age)){
$errors['age'] = "Please enter a valid age!<br>";
}
}
?>

<html>
    <head>
        <title>Doc</title>
    </head>
    <body>
        <form method="POST">
            Name: <br>
            <input type="text" name="name" id="name" value="<?php echo $name ?>">
            <br>
            <span><?php echo $errors['name']?></span>
            Age: <br>
            <input type="text" name="age" id="age" value="<?php echo $age ?>">
            <br>
            <span><?php echo $errors['age']?></span>
            <br>
            <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>