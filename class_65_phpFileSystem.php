<?php
// php File system

// basename() **
$path = $_SERVER['PHP_SELF'];
echo $path;

echo '<br>';
echo basename($path);

echo '<br>';
// dirname()

echo dirname($path);

echo '<br>';
// copy() .  to make a copy of file

// copy('class_64.php', 'class_64c.php' );

echo '<br>';
// file()

$file_copy = file('class_64.php');

echo "<pre>";
// print_r($file_copy);
echo "</pre>";

echo '<br>';
// file_exists() . to find the file have or not.
if(file_exists('class_64.php')){
    	echo 'file exists';
}else{
    echo 'file not exists';
}

// file_get_contents() . to get data from another file
$getData = file_get_contents('class_64.php');
// echo $getData;
echo '<br>';
// file_put_contents(). to put/add data to another file but all delete from existing file
file_put_contents('index.html', 'write what we want to write');

echo '<br>';

// filesize() to get file size and give in byte
echo filesize('index.html');

echo '<br>';
// filetype()
echo filetype('index.html');

echo '<br>';
// is_dir()
if(is_dir('upload')){
    echo 'it is a directory';
}else{
    echo 'it is not a directory';
}

echo '<br>';
// is_file()
if(is_file('index.html')){
    echo 'it is a file';
}else{
    echo 'it is not a file';
}

echo '<br>';
// link() . to make a copy of a file
// link('style.css', 'cus_style.css');
echo '<br>';
// unlink() . to delete a file
// unlink('cus_style.css');

echo '<br>';
// mkdir(). to make a directory **
// mkdir('test');

echo '<br>';
// rmdir(). to delete a directory
// rmdir('test');

echo '<br>';
// move_uploaded_file() . for file upload **

echo '<br>';
// pathinfo() . give a array of a path
echo "<pre>";
print_r(pathinfo($path)) ;
echo "</pre>";

echo pathinfo($path)['basename'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File system</title>
</head>
<body>
    
</body>
</html>

<!-- php File system

i. basename()
ii. dirname()
iii. copy()
iv. file()
v. file_exists()
vi. file_get_contents() 
vii. file_put_contents()
viii. filesize()
ix. filetype()
x. is_dir()
xi. is_file()
xii. link()
xiii. unlink()
xiv. mkdir()
xv. rmdir()
xvi. move_uploaded_file()
xvii.pathinfo() -->