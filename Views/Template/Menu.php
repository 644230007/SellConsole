<div class="container-fluid navbar-dark bg-dark" style="padding-top: 7px; padding-bottom: 7px;">
    <a class="navbar-brand" href="<?= base_url(); ?>">
        <span style="font-weight: bold; color: white;">Pond & Nice Console Shop</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menubar" aria-controls="menubar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menubar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>home">
                    <i class="fa fa-home" aria-hidden="true"> HOME</i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>shop">
                    <i class="fa-brands fa-shopify"> SHOP</i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <?php if (session()->get('logged_in')) : ?>
                <?php if (session()->get('role') === 'admin') : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>user">
                            <span style="font-weight: bold; color: white;">จัดการผู้ใช้</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>product">
                            <span style="font-weight: bold; color: white;">จัดการสินค้า</span>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                        <?= $loggedUser['name']; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url(); ?>logout">ออกจากระบบ</a></li>
                    </ul>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>login">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link position-relative" href="<?= base_url('shop/add'); ?>">
                    <i class="fas fa-shopping-cart" style="color: white;"></i>
                    <?php if (isset($itemCount) && $itemCount > 0): ?>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?= $itemCount > 99 ? '99+' : $itemCount; ?>
                            <span class="visually-hidden">สินค้าที่เลือกแล้ว</span>
                        </span>
                    <?php endif; ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>about/contact" style="color: white;">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
