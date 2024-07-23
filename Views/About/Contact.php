<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลติดต่อ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .contact-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 50px;
            background-color: #fff;
            margin: 10px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 95%;
            margin-bottom: 5%;
        }

        .contact-container>div {
            width: 45%;
            /* ปรับเป็น 50% */
        }

        .contact-container h1 {
            color: #333;
            margin-bottom: 40px;
        }

        .contact-item {
            text-align: left;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            font-size: 18px;
            color: #555;
            display: flex;
            align-items: center;
        }

        .contact-item img {
            margin-right: 15px;
        }

        a {
            color: #0073e6;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .map-container {
            width: 50%;
            /* ปรับเป็น 50% */
            margin-top: 0;
            margin-left: auto;
        }

        .map-container iframe {
            width: 100%;
            height: 400px;
            border: 0;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="contact-container">
        <div>
            <h1>ข้อมูลติดต่อ</h1>
            <div class="contact-item">
                <span>เบอร์โทร: <a href="tel">088-2426632</a></span> &nbsp; <span>เบอร์โทร: <a href="tel">061-4321043</a></span>
            </div>
            <div class="contact-item">
                <span>อีเมล: <a href="mail">644230007@webmail.npru.ac.th</a></span> &nbsp; <span>อีเมล: <a href="mail">644230011@webmail.npru.ac.th</a></span>
            </div>
            <div class="contact-item">
                <span>เฟสบุ๊ค: <a href="https://www.facebook.com/Chutiwat2002/" target="_blank">https://www.facebook.com/Chutiwat2002/</a></span>
            </div>
        </div>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.983930366123!2d100.02378707485762!3d13.840003086561115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2e450ea453cb9%3A0x382d15a4f19e6ab9!2z4Lir4Lit4Lie4Lix4LiB4LmA4Lih4LmJ4LiH4LmA4LiI4Lij4Li04LiN4LmB4Lih4LiZ4LiK4Lix4LmI4LiZ!5e0!3m2!1sth!2sth!4v1720267594351!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>

</html>