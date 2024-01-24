
<?php 
require_once("./header.php");

$id = $_GET['id'] ?? header("location:./");
$id = $conn->real_escape_string($id);
$sql = "SELECT * FROM `students` WHERE `id`= '$id' ";
$result = $conn->query($sql);
$result->num_rows== 0 ? header("location:./"): null;
$row = $result->fetch_object();

if(isset($_POST['ust'])){
    $name = $_POST['name'];
    $city = $_POST['city'];

    $name = $conn->real_escape_string($name); //for sicurity
    $city = $conn->real_escape_string($city); //for sicurity

    $sql = "UPDATE `students` SET `name`='$name', `city`='$city' WHERE `id`='$id' ";
    $result = $conn->query($sql);

    if($result){
        echo "Student update successfully";
        echo "<script>setTimeout(()=>location.href='./', 2000)</script>";
    }else{
        echo "Don't update";
    }

}
?>

<h2>Edit Student</h2>
<form action="" method="post">
    <input type="text" placeholder="Student Name" name="name" required minlength="3" value="<?=$row->name ?>">

    <br>

    <input type="text" placeholder="Student City" name="city" required value="<?=$row->city ?>" >
    <br>
    <input type="submit" value="Update Student" name="ust">
</form>

<?php 
require_once("./footer.php");
?>