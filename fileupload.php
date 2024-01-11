<?php

    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];

        //validation
        $allowedFile = ['jpg', 'jpeg', 'png', 'pdf'];
        $fileExt = explode('.', $fileName);
        $fileExtName = strtolower(end($fileExt));
       

        if(empty($fileName)){
            $error_message = 'please select a file!';
        }elseif(!in_array($fileExtName, $allowedFile)){
            $error_message = 'please select a right file ext.!';
        }else{
            if(!is_dir('uploads')){//for check directory.have it or not
                mkdir('uploads'); // for make a directory
            }

            //for create file new name
            $fileNewNmae = str_shuffle(date('hisAFdYDyl')). uniqid('',true).'.'.$fileExtName;
            
            //for file upload 
            $fileUpload = move_uploaded_file($fileTmpName, 'uploads/' . $fileNewNmae);

            if($fileUpload){
                echo 'File upload successfully! ';
            }else{
                echo 'File do not upload successfully! ';
            }        
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File upload system</title>
</head>
<body>
    
    <H3>Please upload your file</H3>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"> <br> <br>
        <span style="color: red;"><?=$error_message ?? null ?></span> <br>
        <input type="submit" value="Upload/Save" name="submit">
    </form>

</body>
</html>

<?php
    if(isset($_POST['submit'])){
        echo 'File name is : '. $fileName ?? null;
        echo '<br>';
        echo 'File Ext. name is : '. $fileExtName ?? null;
    }


?>