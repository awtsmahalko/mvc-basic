<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
</head>

<body>
    <h1>User List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?= $user['id']; ?>
                </td>
                <td>
                    <?= $user['name']; ?>
                </td>
                <td>
                    <?= $user['email']; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>