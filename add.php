<?php include 'db.php'; ?>
<h2>Add Patient</h2>
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Address: <textarea name="address" required></textarea><br><br>
    <input type="submit" name="submit" value="Add Patient">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $conn->query("INSERT INTO tbl_patient (name, address) VALUES ('$name', '$address')");
    header("Location: index.php");
}
?>
