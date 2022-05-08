
<?php include 'database/connection.php'?>

<section class="register" id="register">

<h1 class="heading">Inquire now</h1>

<form method="post">

    <div class="inputBox">
        <input type="text" placeholder="first name" required id="fname" name="first_name">
        <input type="text" placeholder="last name"required id="lname" name="last_name">
    </div>

    <div class="inputBox">
        <input type="email" placeholder="your email" required id="email" name="email">
        <input type="number" placeholder="your number" required id="number" name="number">
    </div>

    <textarea name="message" id="" cols="30" rows="10" placeholder="message" id="message" ></textarea>

    <input type="submit" name="submit" class="btn" value="Inquire">

</form>

</section>

<?php

if(isset($_POST['submit']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    
    $sql = "INSERT into client (Firstname,Lastname,Email,Number,Message) VALUES ('$first_name', '$last_name', '$email', '$number', '$message')";
    
    $result =mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('successfully Send');</script>";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

    $conn->close();

}
?>