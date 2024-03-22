<!DOCTYPE html>
<html>

<head>
    <title>PHP Object Oriented Programming</title>
    <!-- Unicode Vietnamese -->
    <meta charset="utf-8">
    <meta name="author" content="HuynhThaiHung.com" />
    <!-- css definition file -->
    <link href="../lap1/style.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <div class="row">
            <?php
            require_once("thanhvien.php");
            // Tạo đối tượng mới cho thành viên
            $sv = new member("Nguyen Van A", "email1@gmail.com");
            // Xuất thông tin thành viên
            echo "<h2>-- Thông tin Thành viên --</h2>";
            echo "Mã: " . $sv->get_id() . "<br/>";
            echo "Họ và tên: " . $sv->get_fullname() . "<br/>";
            echo "Email: " . $sv->get_email() . "<br/>";
            ?>

            <?php
            $sv2 = new member("Tran Van B", "email2@gmail.com");
            echo "<h2>--- Thêm thông tin --</h2>";
            echo "Mã: " . $sv2->get_id() . "<br/>";
            echo "Họ và tên: " . $sv2->get_fullname() . "<br/>";
            echo "Email: " . $sv2->get_email() . "<br/>";
            ?>

            <?php
            // Thêm mã PHP OOP
            include("staff.php");
            require_once("character.php");
            // Tạo đối tượng nhân vật
            $nhanvat = new character("Nguyen Van A", 5678);
            echo "<h2>--- Thêm: PHP Hướng đối tượng --</h2>";
            echo "Họ và tên: " . $nhanvat->get_fullname() . "<br/>";
            echo "Mã quốc gia: " . $nhanvat->get_countrycode() . "<br/>";
            ?>

            <?php
            $staff = new staff("Nguyen Van B", 1234, "Guard");
            echo "<h2>---Nhân viên---</h2>";
            echo "Mã nhân viên: " . $staff->get_staffcode() . "<br/>";
            echo "Họ và tên: " . $staff->get_fullname() . "<br/>";
            echo "Mã quốc gia: " . $staff->get_countrycode() . "<br/>";
            echo "Bộ phận: " . $staff->get_part() . "<br/>";
            ?>
        </div>
        <footer>
            <p>Trendemy: <a href="trendemy.com">trendemy@gmail.com</a>.</p>
        </footer>
    </div>
</body>

</html>
