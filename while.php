<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบคำนวณสูตรคูณ (While Loop)</title>

    <style>
        /* จัดวางองค์ประกอบให้อยู่กึ่งกลางหน้าจอ */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #faf8f5;
            color: #333;
            margin: 0;
            padding: 50px 20px;
            display: flex;
            justify-content: center;
        }

        /* กล่องการ์ดเนื้อหาหลัก */
        .main-card {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            border: 1px solid #eaeaea;
            width: 100%;
            max-width: 400px;
        }

        /* หัวข้อสีม่วง */
        .header-title {
            color: purple;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            margin-top: 0;
            margin-bottom: 8px;
        }

        /* ปุ่มลิงก์สลับหน้า */
        .btn-link {
            display: block;
            text-align: center;
            margin-bottom: 25px;
            color: #666;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-link:hover {
            color: purple;
            text-decoration: underline;
        }

        /* ฟอร์ม */
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 25px;
        }

        label {
            font-weight: 600;
            font-size: 14px;
            color: #444;
        }

        input[type="number"] {
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.2s;
        }

        input[type="number"]:focus {
            border-color: purple;
        }

        input[type="submit"] {
            background-color: purple;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #c59ae3;
        }

        /* กล่องแสดงผลลัพธ์ */
        .result-container {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px dashed #eee;
            line-height: 1.8;
            font-size: 16px;
            text-align: center;
        }

        .result-header {
            font-weight: bold;
            color: purple;
            font-size: 18px;
            margin-bottom: 12px;
        }
    </style>
</head>

<body>

    <div class="main-card">

        <?php
        echo "<h1 class='header-title'>งานที่ 1 นันทพงศ์ ม่วงทุ่ง BIT2/4 เลขที่ 29</h1>";
        ?>

        <a href="index.php" class="btn-link">Go to For Loop</a>

        <form action="" method="get">
            <label for="num">เลขแม่สูตรคูณ (While Loop)</label>

            <input
                type="number"
                name="num"
                id="num"
                required
                value="<?php echo isset($_GET['num']) ? htmlspecialchars($_GET['num']) : ''; ?>"
            >

            <input type="submit" value="คำนวณ">
        </form>

        <?php
        if (isset($_GET["num"])) {

            $num = $_GET["num"];

            echo "<div class='result-container'>";
            echo "<div class='result-header'>สูตรคูณแม่ $num</div>";

            // โครงสร้าง While Loop
            $i = 1;

            while ($i <= 12) {
                echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
                $i++;
            }

            echo "</div>";
        }
        ?>

    </div>

</body>
</html>
