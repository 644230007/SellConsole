<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <style>
        .shop-container {
            padding: 50px;
            background-color: #fff;
            margin: 10px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 95%;
            margin-bottom: 5%;
        }

        .shop-container h1 {
            color: #333;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        .shop-container .card-img-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px; /* Adjust the height as needed */
            overflow: hidden;
        }

        .shop-container img {
            max-width: 100%;
            max-height: 100%;
            height: auto;
            width: auto;
            border-radius: 8px;
        }

        .shop-content {
            margin-top: 20px;
            text-align: left;
        }

        .shop-content p {
            color: #555;
            line-height: 1.6;
        }

        .card-body {
            position: relative;
        }

        .add-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: greenyellow;
            color: black;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }

        .add-button:hover {
            background-color: green;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            border-top: 1px solid #eaeaea;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="shop-container">
        <h1>สินค้าภายในร้าน Pond & Nice Console Shop V2</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card h-100">
                        <?php if ($product['image'] != '' && file_exists($product['image'])) : ?>
                            <div class="card-img-container">
                                <img src="<?= base_url($product['image']); ?>" class="card-img-top" alt="รูปภาพ">
                            </div>
                        <?php endif ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= $product['name']; ?></h5>
                            <p class="card-text"><?= $product['description']; ?></p>
                        </div>
                        <div class="card-footer">
                            <h5><?= number_to_currency($product['price'], 'THB', 'th-TH'); ?></h5>
                            <form method="POST" action="<?= base_url('shop/add/' . $product['product_id']); ?>" class="add-to-cart-form">
                                <input type="hidden" name="product_id" value="<?= $product['product_id']; ?>">
                                <button type="submit" class="add-button">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.add-to-cart-form').on('submit', function(e) {
                e.preventDefault(); // ป้องกันการรีเฟรชหน้า
                const form = $(this);

                Swal.fire({
                    title: "คุณแน่ใจหรือไม่?",
                    text: "สินค้าจะถูกเพิ่มลงในตะกร้า!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: 'ตกลง',
                    cancelButtonText: 'ยกเลิก'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: form.attr('method'),
                            url: form.attr('action'),
                            data: form.serialize(),
                            success: function(response) {
                                Swal.fire({
                                    title: "เพิ่มสินค้าในตะกร้าเรียบร้อยแล้ว!",
                                    icon: "success"
                                }).then(() => {
                                    location.reload(); // รีเฟรชหน้า
                                    window.scrollTo(0, 0); // เลื่อนหน้าขึ้นไปด้านบน
                                });
                            },
                            error: function() {
                                Swal.fire({
                                    title: "เกิดข้อผิดพลาด!",
                                    text: "ไม่สามารถเพิ่มสินค้าได้.",
                                    icon: "error"
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>
