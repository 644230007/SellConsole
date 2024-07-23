<style>
    .user-container {
        padding: 50px;
        background-color: #fff;
        margin: 10px auto;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 95%;
        margin-bottom: 5%;
    }

    .user-container h1 {
        color: #333;
    }

    .user-container img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .user-content {
        margin-top: 20px;
        text-align: left;
    }

    .user-content p {
        color: #555;
        line-height: 1.6;
    }
</style>
<div class="user-container">
    <a href="<?= base_url() . 'user/create'; ?>" class="btn btn-primary my-3">เพิ่มผู้ใช้งาน</a>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">ลำดับ</th>
                <th scope="col">ชื่อผู้ใช้งาน</th>
                <th scope="col">ชื่อ นามสกุล</th>
                <th scope="col">อีเมล</th>
                <th scope="col" class="text-center" width="60">แก้ไข</th>
                <th scope="col" class="text-center" width="60">ลบ</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $index => $row) : ?>
                <tr>
                    <th class="text-center" scope="row"><?= ($index + 1); ?></th>
                    <td><?= $row['username']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td class="text-center">
                        <a href="<?= base_url() . 'user/update/' . $row['user_id']; ?>" class="btn btn-warning">แก้ไข</a>
                    </td>
                    <td class="text-center">
                        <button action="delete" data-id="<?= $row['user_id']; ?>" class="btn btn-danger">ลบ</button>
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
                    location.href = '<?= base_url() . 'user/delete/' ?>' + target.dataset.id;
                }
            });
        }
    });
</script>
</div>