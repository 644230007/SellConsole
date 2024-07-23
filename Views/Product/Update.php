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
    }

    .shop-container img {
        max-width: 100%;
        height: auto;
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
</style>
<div class="shop-container">
    <form method="post" action="<?= base_url(); ?>product/update/submit" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $rowProduct['product_id']; ?>">
        <h3 class="my-3">แก้ไขสินค้า</h3>
        <div class="mb-3">
            <label for="name" class="form-label">ชื่อสินค้า</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= $rowProduct['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">รายละเอียดสินค้า</label>
            <textarea class="form-control" name="description" id="description"><?= $rowProduct['description']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">ราคา</label>
            <input type="number" class="form-control" name="price" id="price" min="0" step="1" value="<?= $rowProduct['price']; ?>">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">อัปโหลดรูปภาพ</label>
            <input class="form-control" type="file" name="image" id="image">
        </div>
        <?php if ($rowProduct['image'] != '' && file_exists($rowProduct['image'])) : ?>
            <div class="mb-3">
                <img src="<?= base_url() . $rowProduct['image']; ?>" alt="รูปภาพ" width="180">
            </div>
        <?php endif ?>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">แก้ไขสินค้า</button>
            <a class="btn btn-secondary" href="<?= base_url(); ?>product">กลับไปหน้ารายการ</a>
        </div>
    </form>
</div>