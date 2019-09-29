<?php session_start();

//Proper Database configuration here
include 'includes/db_connection.php';
include 'includes/functions.php';

if (isset($_POST['signup'])) {
    $firstname_unsafe = $_POST['firstname'];
    $lastname_unsafe = $_POST['lastname'];
    $email_unsafe = $_POST['email'];
    $username_unsafe = $_POST['username'];
    $pass_unsafe = $_POST['password'];

    $firstname = mysqli_real_escape_string($con, $firstname_unsafe);
    $lastname = mysqli_real_escape_string($con, $lastname_unsafe);
    $email = mysqli_real_escape_string($con, $email_unsafe);
    $username = mysqli_real_escape_string($con, $username_unsafe);
    $password = mysqli_real_escape_string($con, $pass_unsafe);
    
    //Validation
    //check if email exists
    $email_query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
    $email_count = mysqli_num_rows($email_query);
    if (!validateEmail($email)) {
        addAlert('error', 'Invalid Email address');
        echo "<script>document.location='signup.html'</script>";
    } else if (strlen($password) < 5) {
        addAlert('error', 'Password must be atleast Five (5) characters');
        echo "<script>document.location='signup.html'</script>";
    } else if ($email_count > 0) {
        addAlert('error', 'Email address already exists!');
        echo "<script>document.location='signup.html'</script>";
    } else {
        $res = mysqli_query($con, "INSERT INTO users SET firstname = '$firstname', lastname = 'lastname', username = '$username', email = '$email', password = '$password',") or die(mysqli_error($con));
        if ($res) {
            addAlert('success', 'Registration Successful! Please Login');
            echo "<script type='text/javascript'>document.location='signup.html'</script>";
        } else {
            addAlert('error', 'Something went wrong!');
            echo "<script type='text/javascript'>document.location='signup.html'</script>";
        }
    }
} else {
    header('Location signup.html');
}
?>
