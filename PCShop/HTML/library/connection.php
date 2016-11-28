
<?php
// Kết nối CSDL và lưu vào biến kết nối
// Các tham số gồm:
// - localhost: là tên server, thường mặc định là localhost luôn
// - root: là tên đăng nhập vào database
// - vertrigo: là mật khẩu đăng nhập vào database
// - demo: Là database sẽ xử lý
						$user="root";
						$pass="";
						$conn=mysql_connect("localhost",$user,$pass);
						mysql_select_db("vatlieunhakhoa",$conn);
						mysql_query("SET NAMES 'UTF8'");

?>