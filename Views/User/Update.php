<style>
    .up-container {
        padding: 50px;
        background-color: #fff;
        margin: 10px auto;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 95%;
        margin-bottom: 5%;
    }

    .up-container h1 {
        color: #333;
    }

    .up-container img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .up-content {
        margin-top: 20px;
        text-align: left;
    }

    .up-content p {
        color: #555;
        line-height: 1.6;
    }
</style>
<div class="up-container">
    <form method="post" action="<?= base_url(); ?>user/update/submit">
        <input type="hidden" name="id" value="<?= $rowUser['user_id']; ?>">
        <h3 class="my-3">แก้ไขผู้ใช้งาน</h3>
        <div class="mb-3">
            <label for="username" class="form-label">ชื่อผู้ใช้งาน</label>
            <input type="text" class="form-control" name="username" id="username" value="<?= $rowUser['username']; ?>">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">ชื่อ นามสกุล</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= $rowUser['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">อีเมล</label>
            <input type="email" class="form-control" name="email" id="email" value="<?= $rowUser['email']; ?>">
        </div>
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">เบอร์โทรศัพท์</label>
            <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" value="<?= $rowUser['phone_number']; ?>">
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">แก้ไขผู้ใช้งาน</button>
            <a class="btn btn-secondary" href="<?= base_url(); ?>user">กลับไปหน้ารายการ</a>
        </div>
    </form>
</div>