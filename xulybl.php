<?php
// Kết nối đến cơ sở dữ liệu
$conn=mysqli_connect("localhost","root","")
    or die("Cannot connect to the database");
    mysqli_select_db($conn,"booknowcsdl")
    or die("Cannot connect to the database");
    mysqli_query($conn,"SET NAMES 'UTF8'");

// Lấy dữ liệu từ form
$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$comment = $_POST['comment'];
$idsp=$_POST['idsp'];

// Chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO comments (name, email, comment, website, idsp) VALUES ('$name', '$email', '$comment', '$website', '$idsp')";

if ($conn->query($sql) === TRUE) {
    /* header("Location: index.php?content=chitietsp&idsp=<?php echo $rows['idsp'] ?>");*/
    header("Location: index.php?content=chitietsp&idsp=$idsp");

    exit();
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
