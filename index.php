<?php
include "function.php";

$students = getAllUsers("data.json");
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<a href="view/add.php">Them moi</a>
<table border="1">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
        <th>Adress</th>
        <th colspan="2">Function</th>
    </tr>

        <?php foreach ($students as $index => $student): ?>
            <tr>
                <td width="40px"><?php echo $index ?></td>
                <td width="50px"><?php echo $student->name ?></td>
                <td><?php echo $student->age ?></td>
                <td><?php echo $student->address ?></td>
                <td><a onclick="return confirm('Ban chac chan muon xoa?')"
                       href="action/delete.php?index=<?php echo $index ?>">delete</a></td>
                <td width="50px"><a href="view/edit.php?index=<?php echo $index ?>">edit</a>
                </td>
            </tr>

        <?php endforeach; ?>

</table>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
