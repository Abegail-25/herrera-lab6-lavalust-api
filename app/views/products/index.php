<!DOCTYPE html>
<html>
<head>
    <title>Products - Product Management System</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            color: #29412f;

            background:
                radial-gradient(
                    circle at 10% 15%,
                    rgba(74, 105, 75, 0.45),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 90% 85%,
                    rgba(82, 112, 82, 0.35),
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    #496b4d 0%,
                    #aab89b 42%,
                    #eeeade 72%,
                    #dce1d0 100%
                );

            background-attachment: fixed;
        }

        .navbar {
            background: rgba(245, 244, 232, 0.72);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border-bottom: 1px solid rgba(255, 255, 255, 0.55);

            padding: 18px 40px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            box-shadow:
                0 8px 25px rgba(39, 65, 45, 0.12);
        }

        .brand {
            font-size: 20px;
            font-weight: bold;
            color: #29412f;
        }

        .logout {
            color: #405445;
            text-decoration: none;

            padding: 9px 16px;

            border: 1px solid rgba(83, 108, 87, 0.35);

            border-radius: 8px;

            background: rgba(255, 255, 255, 0.35);

            transition: 0.25s;
        }

        .logout:hover {
            background: rgba(255, 255, 255, 0.65);
            transform: translateY(-1px);
        }

        .container {
            max-width: 1100px;

            margin: 45px auto;

            padding: 0 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 25px;
        }

        .header h1 {
            font-size: 30px;
            color: #29412f;
        }

        .header p {
            color: #657366;

            margin-top: 7px;

            font-size: 14px;
        }

        .add-button {
            background: linear-gradient(
                135deg,
                #294d32,
                #52775a
            );

            color: white;

            text-decoration: none;

            padding: 12px 18px;

            border-radius: 9px;

            font-weight: bold;

            box-shadow:
                0 8px 20px rgba(43, 76, 49, 0.22);

            transition: 0.25s;
        }

        .add-button:hover {
            transform: translateY(-2px);

            background: linear-gradient(
                135deg,
                #23442b,
                #46684e
            );
        }

        .table-card {
            background: rgba(245, 244, 232, 0.72);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border: 1px solid rgba(255, 255, 255, 0.65);

            border-radius: 18px;

            overflow: hidden;

            box-shadow:
                0 20px 45px rgba(39, 65, 45, 0.18);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: rgba(52, 88, 59, 0.92);

            color: #f3f1e5;

            text-align: left;

            padding: 16px;

            font-size: 13px;

            letter-spacing: 0.3px;
        }

        td {
            padding: 16px;

            border-top: 1px solid rgba(83, 108, 87, 0.15);

            color: #405445;

            font-size: 14px;
        }

        tr:hover td {
            background: rgba(255, 255, 255, 0.25);
        }

        .price {
            font-weight: bold;

            color: #315f3b;
        }

        .actions {
            white-space: nowrap;
        }

        .edit {
            color: #416d4a;

            text-decoration: none;

            margin-right: 14px;

            font-weight: bold;
        }

        .delete {
            color: #a05252;

            text-decoration: none;

            font-weight: bold;
        }

        .edit:hover,
        .delete:hover {
            text-decoration: underline;
        }

        .empty {
            text-align: center;

            padding: 35px;

            color: #718072;
        }

        @media (max-width: 768px) {

            .navbar {
                padding: 15px 20px;
            }

            .brand {
                font-size: 17px;
            }

            .container {
                margin-top: 30px;
            }

            .header {
                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }

            .table-card {
                overflow-x: auto;
            }

            table {
                min-width: 750px;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">

        <div class="brand">
            Product Management System
        </div>

        <a class="logout" href="<?= base_url('logout') ?>">
            Logout
        </a>

    </div>

    <div class="container">

        <div class="header">

            <div>

                <h1>
                    Product List
                </h1>

                <p>
                    Manage your products and inventory
                </p>

            </div>

            <a
                class="add-button"
                href="<?= base_url('products/create') ?>"
            >
                + Add Product
            </a>

        </div>

        <div class="table-card">

            <table>

                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>

                <?php if (!empty($products)): ?>

                    <?php foreach ($products as $product): ?>

                    <tr>

                        <td>
                            <?= $product['id'] ?>
                        </td>

                        <td>
                            <?= $product['product_name'] ?>
                        </td>

                        <td>
                            <?= $product['description'] ?>
                        </td>

                        <td class="price">
                            ₱<?= $product['price'] ?>
                        </td>

                        <td>
                            <?= $product['quantity'] ?>
                        </td>

                        <td class="actions">

                            <a
                                class="edit"
                                href="<?= base_url('products/edit/' . $product['id']) ?>"
                            >
                                Edit
                            </a>

                            <a
                                class="delete"
                                href="<?= base_url('products/delete/' . $product['id']) ?>"
                            >
                                Delete
                            </a>

                        </td>

                    </tr>

                    <?php endforeach; ?>

                <?php else: ?>

                    <tr>

                        <td colspan="6" class="empty">
                            No products available.
                        </td>

                    </tr>

                <?php endif; ?>

            </table>

        </div>

    </div>

</body>
</html>