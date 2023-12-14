<?php
    session_start();
    if(isset($_POST['register'])){
        include 'db_connection.php';

        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $mobilenumber = $_POST['mobilenumber'];
        $altnumber = $_POST['altnumber'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $adhar = $_POST['adhar'];
        $gender = $_POST['gender'];
        $rel = $_POST['rel'];
        $category = $_POST['category'];
        $vill = $_POST['vill'];
        $post = $_POST['post'];
        $police = $_POST['police'];
        $dist = $_POST['dist'];
        $state = $_POST['state'];
        $pin = $_POST['pin'];
        $class = $_POST['class'];
        $sec = $_POST['sec'];
        $reg = $_POST['reg'];
        $adate = $_POST['adate'];

        $simage = $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], "imagemove/".$_FILES['photo']['name']);

        $sql = "INSERT INTO student_add(name,fname,mname,mobilenumber,altnumber,email,dob,adhar,gender,rel,category,vill,post,police,dist,state,pin,class,sec,reg,adate,photo)VALUES('$name','$fname', '$mname', '$mobilenumber', '$altnumber', '$email','$dob','$adhar','$gender','$rel','$category', '$vill', '$post', '$police', '$dist', '$state', '$pin', '$class', '$sec', '$reg', '$adate', '$simage')";

        if(mysqli_query($conn,$sql)){
            $_SESSION['name'] = "Data Successfully Inserted";
            header("location:http://localhost/admin66/Student_Add.php");
        }else{
            echo "error" .mysqli_error($conn);
        }
        

    }




?>

