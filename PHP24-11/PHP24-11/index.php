<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Buổi 1 </title>
</head>
<body>
    <?php 
        // 1. Cú pháp in ra màn hình
        echo "Hello World! <br>"; 

        echo "PHP";

        // 2. Biến trong PHP
        // Cú pháp khai báo biến: $ten_bien = gia_tri;
        $name = "Quang Minh";
        $age = 24;

        echo "<br> Tên của tôi là: " . $name . ", tôi năm nay " . $age . " tuổi.";

        //3. Hằng số trong PHP
        define("PI", 3.14);
        echo "<br> Giá trị của hằng số PI là: " . PI;
        // Khi nào dùng hằng, khi nào dùng biến?

        // ✔ Dùng hằng khi giá trị không đổi
            //PI
            //VAT = 0.1
            //Tốc độ ánh sáng
            //Chuỗi cố định
            //Key config, version app

        // ✔ Dùng biến khi giá trị sẽ thay đổi
            //Tuổi
            //Điểm số
            //Số lượng sản phẩm
            //Giá trị ô input nhập từ người dùng

        //4. Phân biệt ' ' và "  "
        echo '<br> Tên của tôi là: $name, tôi năm nay $age tuổi.'; //Không hiểu biến
        echo "<br> Tên của tôi là: $name, tôi năm nay $age tuổi."; //Hiểu biến

        //5. Chuỗi trong PHP
        #5.1 Kiểm tra độ dài chuỗi
        echo strlen($name) . "<br>" ;//10 ký tự "Quang Minh";
        #5.2 Đếm số từ trong chuỗi
        echo str_word_count($name) . "<br>"; //2 từ "Quang Minh";
        #5.3 Tìm kiếm ký tự trong chuỗi
        echo strpos($name, "M") . "<br>"; //6 - Vị trí của ký tự M trong chuỗi "Quang Minh";
        #5.4 Thay thế ký tự trong chuỗi
        echo str_replace("Minh", "Phát", $name) . "<br>" ;//Quang Phát;

        //6. Toán Tử
        $a = 10;
        $b = 3;

        //+ - * / %
        echo $a + $b; //13
        echo "<br>";
        # += -= *= /= %=
        $a += 5; // $a = $a + 5;
        # so sánh == != > < >= <= ===
        echo $a == $b; // false

        //7. Cấu trúc điều kiện
        // if (điều kiện) {
            //logic
        // }
        // else {
            //logic
        // }

        // Kiểm tra tổng của 2 số a và b
        // Nếu < 15 in ra "Tổng nhỏ hơn 15"
        // Nếu = 15 in ra "Tổng bằng 15"
        // Nếu > 15 in ra "Tổng lớn hơn 15"
        $tong = $a + $b;
        if ($tong < 15) {
            echo "<br> Tổng nhỏ hơn 15";
        }               
        else if ($tong == 15) {
            echo "<br> Tổng bằng 15";
        }
        else {
            echo "<br> Tổng lớn hơn 15";
        }              

        // 8. Switch case "thanh điều hướng"
        $color = "red";
        switch ($color) {   
            case "red":
                echo "<br> Màu đỏ";
                break;
            case "blue":
                echo "<br> Màu xanh dương";
                break;
            case "green":
                echo "<br> Màu xanh lá";
                break;
            default:
                echo "<br> Màu khác";
                break;
        }

        //9.For "vòng lặp"
        for ($i = 1; $i <= 5; $i++) {
            echo "<br> Lần lặp thứ: " . $i;
        }
            
       

    ?>
</body>
</html>