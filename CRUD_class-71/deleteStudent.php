
<?php 
require_once("./header.php");

$id = $_GET['id'] ?? header("location:./");
$id = $conn->real_escape_string($id);
$sql = "SELECT * FROM `students` WHERE `id`= '$id' ";
$result = $conn->query($sql);
$result->num_rows== 0 ? header("location:./"): null;

if(isset($_POST['dst'])){
    $result = $conn->query("DELETE FROM `students` WHERE `id`= $id ");
    if($result){
        echo "Student deleted successfully";
        echo "<script>setTimeout(()=>location.href='./', 2000)</script>";
    }else{
        echo "Student not deleted";
    }
}

?>
<form action="" method="post">
    <h3>Are you sure to delete this student?</h3>
    <input type="submit" value="Yes" name="dst">
    <a href="./"><button type="button">No</button></a>
</form>

<?php 
require_once("./footer.php");
?>