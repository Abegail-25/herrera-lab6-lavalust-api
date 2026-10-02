<!DOCTYPE html>
<html>
<head>
    <title>Edit Product - Product Management System</title>

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

            box-shadow:
                0 8px 25px rgba(39, 65, 45, 0.12);
        }

        .brand {
            font-size: 20px;
            font-weight: bold;
            color: #29412f;
        }

        .container {
            max-width: 650px;

            margin: 45px auto;

            padding: 0 20px;
        }

        .page-title {
            margin-bottom: 25px;
        }

        .page-title h1 {
            font-size: 30px;
            color: #29412f;
        }

        .page-title p {
            color: #657366;

            margin-top: 7px;

            font-size: 14px;
        }

        .form-card {
            background: rgba(245, 244, 232, 0.72);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border: 1px solid rgba(255, 255, 255, 0.65);

            border-radius: 18px;

            padding: 35px;

            box-shadow:
                0 20px 45px rgba(39, 65, 45, 0.18);
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;

            margin-bottom: 8px;

            color: #405445;

            font-size: 14px;

            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;

            padding: 14px 15px;

            background: rgba(255, 255, 255, 0.65);

            color: #29412f;

            border: 1px solid rgba(83, 108, 87, 0.35);

            border-radius: 10px;

            font-size: 15px;

            outline: none;

            transition: 0.25s;
        }

        textarea {
            min-height: 120px;

            resize: vertical;
        }

        input:focus,
        textarea:focus {
            background: rgba(255, 255, 255, 0.85);

            border-color: #52745a;

            box-shadow:
                0 0 0 3px rgba(82, 116, 90, 0.15);
        }

        .button-group {
            display: flex;

            gap: 12px;

            margin-top: 10px;
        }

        .update-button {
            flex: 1;

            padding: 14px;

            background: linear-gradient(
                135deg,
                #294d32,
                #52775a
            );

            color: white;

            border: none;

            border-radius: 10px;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            box-shadow:
                0 8px 20px rgba(43, 76, 49, 0.22);

            transition: 0.25s;
        }

        .update-button:hover {
            transform: translateY(-2px);

            background: linear-gradient(
                135deg,
                #23442b,
                #46684e
            );
        }

        .back-button {
            flex: 1;

            padding: 14px;

            background: rgba(255, 255, 255, 0.45);

            color: #405445;

            border: 1px solid rgba(83, 108, 87, 0.3);

            text-decoration: none;

            text-align: center;

            border-radius: 10px;

            font-size: 15px;

            transition: 0.25s;
        }

        .back-button:hover {
            background: rgba(255, 255, 255, 0.7);

            transform: translateY(-1px);
        }

        @media (max-width: 600px) {

            .navbar {
                padding: 15px 20px;
            }

            .container {
                margin-top: 30px;
            }

            .form-card {
                padding: 25px;
            }

            .button-group {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">

        <div class="brand">
            Product Management System
        </div>

    </div>

    <div class="container">

        <div class="page-title">

            <h1>
                Edit Product
            </h1>

            <p>
                Update the information of your product
            </p>

        </div>

        <div class="form-card">

            <form
                action="<?= base_url('products/update/' . $product['id']) ?>"
                method="POST"
            >

                <div class="form-group">

                    <label>
                        Product Name
                    </label>

                    <input
                        type="text"
                        name="product_name"
                        value="<?= $product['product_name'] ?>"
                        required
                    >

                </div>

                <div class="form-group">

                    <label>
                        Description
                    </label>

                    <textarea
                        name="description"
                    ><?= $product['description'] ?></textarea>

                </div>

                <div class="form-group">

                    <label>
                        Price
                    </label>

                    <input
                        type="number"
                        name="price"
                        value="<?= $product['price'] ?>"
                        step="0.01"
                        required
                    >

                </div>

                <div class="form-group">

                    <label>
                        Quantity
                    </label>

                    <input
                        type="number"
                        name="quantity"
                        value="<?= $product['quantity'] ?>"
                        required
                    >

                </div>

                <div class="button-group">

                    <button
                        type="submit"
                        class="update-button"
                    >
                        Update Product
                    </button>

                    <a
                        href="<?= base_url('products') ?>"
                        class="back-button"
                    >
                        Back to Products
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>