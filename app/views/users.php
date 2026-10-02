<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #4f46e5;
            color: white;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #ddd;
            color: #444;
        }

        tr:hover {
            background-color: #f1f5ff;
        }

        .id {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">

        <h2>Users List</h2>

        <div class="table-wrapper">

            <table>

                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>

                <?php foreach ($users as $user): ?>

                    <tr>
                        <td class="id"><?= $user['id']; ?></td>
                        <td><?= $user['firstname']; ?></td>
                        <td><?= $user['lastname']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td><?= $user['username']; ?></td>
                    </tr>

                <?php endforeach; ?>

            </table>

        </div>

    </div>

</body>
</html>