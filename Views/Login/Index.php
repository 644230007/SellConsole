<style>
    .log-container {
        padding: 50px;
        background-color: #fff;
        margin: 50px auto;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 95%;
    }

    .log-container h1 {
        color: #333;
    }

    .log-container img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .log-content {
        margin-top: 20px;
        text-align: left;
    }

    .log-content p {
        color: #555;
        line-height: 1.6;
    }
</style>
<div class="log-container">
    <form class="row my-5" method="post" action="<?= base_url() ?>login/check">
        <div class="col col-12 col-md-10 col-lg-4 m-auto">
            <h3 class="mb-3">เข้าสู่ระบบ</h3>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary mb-2" type="submit">เข้าสู่ระบบ</button>
            </div>
        </div>
    </form>
</div>