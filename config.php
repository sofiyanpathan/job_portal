<?php 

    $server="localhost";
    $username="root";
    $password="";
    $database="newjob";

    $conn=mysqli_connect($server,$username,$password,$database);

    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);

    }

    echo"";
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['phone_no'];
        $password=$_POST['password'];

        $sql="INSERT INTO `users`( `name`, `email`, `password`,`phone_no`) VALUES ('$name','$email','$password','$number')";
        if(mysqli_query($conn,$sql))
        {
            echo"Records inserted succesfully.";
        }
        else{
            echo"Error:Could not able to execute $sql".mysqli_error($conn);
        }
    }

session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE `email`='$email' and `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");

    }
    else{
        $error='email or password is incorrect';
    }
}
if(isset($_POST['job'])){
    $cname=$_POST['company_name'];
    $pos=$_POST['position'];
    $jdesc=$_POST['job_desc'];
    $skills=$_POST['skills'];
    $ctc=$_POST['ctc'];

    $sql="INSERT INTO `user_info`( `company_name`, `Position`, `job_Desc`, `Skills`, `CTC`) VALUES ('$cname','$pos','$jdesc','$skills','$ctc')";

    if(mysqli_query($conn,$sql)){
        echo"New job posted";
    }
    else{
        echo"Failed to post $sql".mysqli_error($conn);;
    }
}
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];

    $sql="INSERT INTO `candidate`( `name`, `qual`, `apply`, `year`) VALUES ('$name','$qual','$apply','$year')";

    mysqli_query($conn,$sql);
}

?>
