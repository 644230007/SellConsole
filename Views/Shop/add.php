<title>ตะกร้า</title>
<style>
    .product-name {
        flex-grow: 1;
        text-align: left;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    h1 {
        margin-top: 5%;
        margin-bottom: 3%;
        font-weight: bold;
    }
</style>

<div class="container">
    <h1>สินค้าที่เลือก</h1>

    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-info">
            <?= session()->getFlashdata('message'); ?>
        </div>
    <?php endif; ?>

    <ul class="list-group mb-4">
        <?php if (empty($products)) : ?>
            <li class="list-group-item">ยังไม่มีสินค้าที่เลือกในตะกร้า</li>
        <?php else : ?>
            <?php foreach ($products as $index => $product) : ?>
                <li class="list-group-item d-flex align-items-center">
                    <img src="<?= base_url($product['image']); ?>" alt="<?= esc($product['name']); ?>" style="width: 50px; height: auto; margin-right: 10px;">
                    <div class="product-name" style="flex-grow: 1; text-align: left; margin-right: 10px;">
                        <?= esc($product['name']); ?>
                    </div>
                    <div class="product-price" style="margin-right: 10px; text-align: right;">
                        <?= esc(number_format($product['price'], 2)); ?> บาท
                    </div>
                    <form method="POST" action="<?= base_url('shop/remove/' . $index); ?>" style="display:inline;">
                        <button type="button" class="btn btn-danger" onclick="confirmRemove(<?= $index; ?>)">ลบ</button>
                    </form>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>

    <a class="btn btn-secondary ml-2" href="<?= base_url(); ?>shop">เลือกสินค้าต่อ</a>
    <button type="button" class="btn btn-primary position-relative">
        <i class="fas fa-shopping-cart" style="color: white;"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            <?= $itemCount > 99 ? '99+' : $itemCount; ?>
            <span class="visually-hidden">สินค้าที่เลือกแล้ว</span>
        </span>
    </button>
</div>

<script>
    function confirmRemove(index) {
        Swal.fire({
            title: 'ยืนยันการลบ?',
            text: "คุณต้องการลบสินค้านี้ออกจากตะกร้า!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'ใช่, ลบ!',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                document.forms[index].submit();
            }
        });
    }
</script>