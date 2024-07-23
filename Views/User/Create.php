<style>
    .Cre-container {
        padding: 50px;
        background-color: #fff;
        margin: 10px auto;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 95%;
        margin-bottom: 5%;
    }

    .Cre-container h1 {
        color: #333;
    }

    .Cre-container img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .Cre-content {
        margin-top: 20px;
        text-align: left;
    }

    .Cre-content p {
        color: #555;
        line-height: 1.6;
    }
</style>
<div class="Cre-container">
    <form method="post" action="<?= base_url(); ?>user/create/submit">
        <h3 class="my-3">เพิ่มผู้ใช้งาน</h3>
        <div class="mb-3">
            <label for="username" class="form-label">ชื่อผู้ใช้งาน</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">รหัสผ่าน</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">ชื่อ นามสกุล</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">อีเมล</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">เบอร์โทรศัพท์</label>
            <input type="text" class="form-control" name="phoneNumber" id="phoneNumber">
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">เพิ่มผู้ใช้งาน</button>
            <a class="btn btn-secondary" href="<?= base_url(); ?>user">กลับไปหน้ารายการ</a>
        </div>
    </form>
</div>