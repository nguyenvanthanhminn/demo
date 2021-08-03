<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>signupdemo</title>
</head>
<body>
	<div class="header">
        <h1>Trang thử nghiệm</h1>
    </div>
    <div class="contain">
        <form class="form" id="form" action="xulyform.php" method="post">
            <label>Tên của bạn:</label><br>
            <input type="text" name="name" placeholder="Nguyễn Văn A" required="required"/><br>
            <label>Email của bạn:</label><br>
            <input type="email" name="email" placeholder="nguyenvana@gmail.com"/><br>
            <label>Ngày sinh: </label><br>
            <input type="date" id="birthday" value="2002-01-01" name="birthday"
             min="1981-12-31" max="2002-01-01"><br>
            <label>Tình trạng quan hệ: </label><br>
                <select name="status">
                    <option>Độc thân</option>
                    <option>Hẹn hò</option>
                    <option>Mối quan hệ phức tạp</option>
                    <option>Đã có chủ</option>
                    <option>Khác</option>
                </select><br>
            <label>Giới tính: </label><br>
                <select name="sex">
                    <option>Nam</option>
                    <option>Nữ</option>
                    <option>Gay</option>
                    <option>Lesbian</option>
                    <option>Bisexual</option>
                    <option>Transgender</option>
                    <option>Không muốn nói</option>
                </select><br>
			<label>Mật khẩu: </label><br>
			<input type="password" id="password" name="password" required="required"/><br>
			<label>Nhập lại mật khẩu: </label><br>
			<input type="password" id="password1" name="password1" required="required"/><br><br>
			<input type="submit" name="submit">
        </form>
    </div>
</body>
</html>
