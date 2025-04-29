<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM tbl_patient WHERE patient_id = $id");
$row = $result->fetch_assoc();
?>
<h2>Edit Patient</h2>
<form method="post">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>" required><br>
    Address: <textarea name="address" required><?= $row['address'] ?></textarea><br>
    <input type="submit" name="update" value="Update Patient">
</form>

<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $conn->query("UPDATE tbl_patient SET name='$name', address='$address' WHERE patient_id=$id");
    header("Location: index.php");
}
?>
