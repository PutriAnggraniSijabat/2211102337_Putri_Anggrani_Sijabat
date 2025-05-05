<?php
// Include database connection file
include_once("config.php");
 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $publisher = $_POST['publisher'];
    $count = $_POST['count'];
 
    // Upload gambar
    $target_dir = "picture/";
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);
    move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
 
    $picture = $_FILES['picture']['name'];
 
    // Insert data ke database
    $result = mysqli_query($mysqli, "INSERT INTO library(picture, name, category, publisher, count) VALUES('$picture', '$name', '$category', '$publisher', '$count')");
 
    // Redirect ke index.php setelah berhasil tambah data
    header("Location: index.php");
}
?>
 
<html>
<head>
    <title>Add New User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
 
<body>
    <br>
    <div class="container">
        <a href="index.php" class="btn btn-secondary">Home</a>
        <br /><br />
 
        <form action="add.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" class="form-control-file" id="picture" name="picture" required>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" name="category" required>
            </div>
            <div class="form-group">
                <label>Publisher</label>
                <input type="text" class="form-control" name="publisher" required>
            </div>
            <div class="form-group">
                <label>Count</label>
                <input type="number" class="form-control" name="count" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Add User</button>
        </form>
    </div>
</body>
</html>
 

5. Membuat file edit.php
edit.phpPHP
<?php
// Include database connection file
include_once("config.php");
 
// Check if form is submitted for update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $publisher = $_POST['publisher'];
    $count = $_POST['count'];
 
    // Ambil gambar lama dari input hidden
    $old_picture = $_POST['old_picture'];
 
    // Periksa apakah pengguna mengunggah gambar baru
    if ($_FILES['picture']['name']) {
        $picture = $_FILES['picture']['name'];
        $target_dir = "picture/";
        $target_file = $target_dir . basename($_FILES["picture"]["name"]);
 
        // Pindahkan gambar baru ke folder
        move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
    } else {
        // Jika tidak ada gambar baru, gunakan gambar lama
        $picture = $old_picture;
    }
 
    // Update data ke database
    $result = mysqli_query($mysqli, "UPDATE library SET picture='$picture', name='$name', category='$category', publisher='$publisher', count='$count' WHERE id=$id");
 
    // Redirect ke homepage setelah update
    header("Location: index.php");
}
 
// Ambil data berdasarkan ID
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM library WHERE id=$id");
 
while ($user_data = mysqli_fetch_array($result)) {
    $picture = $user_data['picture'];
    $name = $user_data['name'];
    $category = $user_data['category'];
    $publisher = $user_data['publisher'];
    $count = $user_data['count'];
}
?>
 
<html>
<head>  
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
 
<body>
    <br>
    <div class="container">
        <a href="index.php" class="btn btn-secondary">Home</a>
        <br/><br/>
 
        <form name="update_user" method="post" action="edit.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="old_picture" value="<?php echo $picture; ?>">
 
            <div class="form-group">
                <label>Current Picture</label><br>
                <img src="picture/<?php echo $picture; ?>" width="150">
            </div>
 
            <div class="form-group">
                <label>Change Picture</label>
                <input type="file" class="form-control-file" name="picture">
            </div>
 
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" required>
            </div>
 
            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" name="category" value="<?php echo $category; ?>" required>
            </div>
 
            <div class="form-group">
                <label>Publisher</label>
                <input type="text" class="form-control" name="publisher" value="<?php echo $publisher; ?>" required>
            </div>
 
            <div class="form-group">
                <label>Count</label>
                <input type="number" class="form-control" name="count" value="<?php echo $count; ?>" required>
            </div>
 
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>