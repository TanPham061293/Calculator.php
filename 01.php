
<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset = utf-8" http-equiv="content-Type">
<meta charset="ISO-8859-1">
<title>Mô phỏng máy tính điện tử</title>
<link type="text/css" href="Đinhang.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
$check = false;
if (! isset($_POST["number1"]) && ! isset($_POST["number2"]) && ! isset($_POST["caculation"])) {
    $n1 = "";
    $n2 = "";
    $tinh = "";   
    echo "aaaa";
} else {
    $flag = true;
    $check = true;
    $n1 = $_POST["number1"];
    $n2 = $_POST["number2"];
    $tinh = $_POST["caculation"];
    if (is_numeric($n1) && is_numeric($n2)) {
        switch ($tinh) {
            case "+":
                $ketqua = $n1 + $n2;
                break;
            case "-":
                $ketqua = $n1 - $n2;
                break;
            case "*":
                $ketqua = $n1 * $n2;
                break;
            case "/":
                if ($n2 == 0) {
                    $ketqua ="Mẫu số không được bằng 0.";
                    $flag = false;
                }else {
                    $ketqua = $n1 / $n2;
                }     
                break;
            default:
                $ketqua = $n1 + $n2;
                $tinh = "+";
                break;
        }  
    }else {
        $ketqua ="Không thực hiện được phép tinh.";
        $flag = false;
    }
}
?>
	<div class="content">
		<h1>Mô phỏng máy tính điện tử</h1>
		<form action="#" method="post" name="main-form">
			<div class="row">
				<span>số thứ nhất</span> <input type="text" name="number1"
					value="<?php echo $n1?>" />
			</div>
			<div class="row">
				<span>Phép tính:</span> <input type="text" name="caculation"
					value="<?php echo $tinh?>" />
			</div>
			<div class="row">
				<span>số thứ hai</span> <input type="text" name="number2"
					value="<?php echo $n2?>" />
			</div>
			<div class="row">
				<input type="submit" name="ketqua" />
			</div>
			<div class="row">
				<p> 
				<?php 
				if ($check) {
				    if ($flag == true) {
				        echo "kết quả phép tính:" . $n1 . " " . $tinh . " " . $n2 . " = " . $ketqua   ;
				    }else
				    {
				        echo $ketqua;
				    }
				}
				
				?></p>
			</div>
		</form>
	</div>
</body>
</html>