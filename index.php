<?php include 'db.php'; ?>
<h1 align="center">Patient List </h1>

<table border="1" cellpadding="10" cellspacing="0" width="60%" align="center" bgcolor="#e0f7fa">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM tbl_patient");
    while ($row = $result->fetch_assoc()):
    ?>
    <tr border="1" cellpadding="10" cellspacing="0" width="60%" align="center" bgcolor="#f5f5f5">
        <td><?= $row['patient_id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['address'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['patient_id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['patient_id'] ?>" onclick="return confirm('Delete this patient?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<br>

<div align="center">
<a href="add.php"  style="display: inline-block; padding: 10px 20px; background-color:rgb(68, 77, 207); color: white; text-decoration: none; border-radius: 5px;" >Add New Patient</a>
</div>