<style>
        .col-id {
            width: 5%;
        }

        .col-image {
            width: 20%;
        }

        .col-name {
            width: 20%;
        }

        .col-price {
            width: 5%;
        }

        .col-desc {
            width: 40%;
        }

        .col-edit,
        .col-delete {
            width: 5%;
        }
    .product-container {
        padding: 50px;
        background-color: #fff;
        margin: 10px auto;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 95%;
        margin-bottom: 5%;
    }

    .product-container h1 {
        color: #333;
    }

    .product-container img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .product-content {
        margin-top: 20px;
        text-align: left;
    }

    .product-content p {
        color: #555;
        line-height: 1.6;
    }
</style>
<div class="product-container">
    <a href="<?= base_url() . 'product/create'; ?>" class="btn btn-primary my-3">เพิ่มสินค้า</a>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center col-id">ลำดับ</th>
                <th scope="col" class="col-image" width="150">รูปภาพ</th>
                <th scope="col" class="col-name">ชื่อสินค้า</th>
                <th scope="col" class="col-desc">คำอธิบายสินค้า</th>
                <th scope="col" class="col-price" width="80">ราคา</th>
                <th scope="col" class="text-center col-edit" width="60">แก้ไข</th>
                <th scope="col" class="text-center col-delete" width="60">ลบ</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $index => $row) : ?>
                <tr>
                    <th class="text-center" scope="row"><?= ($index + 1); ?></th>
                    <td>
                        <img src="<?= base_url() . $row['image']; ?>" width="100" alt="<?= $row['name']; ?>">
                    </td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['description']; ?></td>
                    <td><?= $row['price']; ?></td>
                    <td class="text-center">
                        <a href="<?= base_url() . 'product/update/' . $row['product_id']; ?>" class="btn btn-warning">แก้ไข</a>
                    </td>
                    <td class="text-center">
                        <button action="delete" data-id="<?= $row['product_id']; ?>" class="btn btn-danger">ลบ</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script>
    document.addEventListener('click', function(event) {
        var target = event.target;
        if (target.matches('button[action="delete"]')) {
            event.preventDefault();
            Swal.fire({
                title: "ยืนยันการลบ?",
                text: "ต้องการที่จะลบข้อมูลหรือไม่",
                icon: "question",
                showCancelButton: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = '<?= base_url() . 'product/delete/' ?>' + target.dataset.id;
                }
            });
        }
    });
</script>
</div>