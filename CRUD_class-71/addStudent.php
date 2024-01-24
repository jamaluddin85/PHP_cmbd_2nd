<?php 
require_once("./header.php");

if(isset($_POST['ast'])){
    $name = $_POST['name'];
    $city = $_POST['city'];

    $name = $conn->real_escape_string($name); //for protect hacking
    $city = $conn->real_escape_string($city); //for protect hacking

    $sql = "INSERT INTO `students` (`name`, `city`) VALUES ('$name' , '$city')";
    $result = $conn->query($sql);

    if($result){
        echo "Student added successfully";
        echo "<script>setTimeout(()=> location.href='./',2000)</script>";
    }else{
        echo "Student not added successfully";
    }


}
?>

<form action="" method="post">
    <input type="text" placeholder="Student Name" name="name" required minlength="3" >

    <br>

    <input type="text" placeholder="Student City" name="city" required  >
    <br>
    <input type="submit" value="Add Student" name="ast">
</form>

<?php 
require_once("./footer.php");
?>