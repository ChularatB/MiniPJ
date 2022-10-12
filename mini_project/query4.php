<?php
	$pdo = new PDO("mysql:host=localhost;dbname=funtasy;charset=utf8","root","");
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>
<html>
<head><meta charset="utf-8">
<style>
           td,th{
             padding: 10px;
             text-align: center;
           }
        </style></head>
<body>

	<?php
	$stmt = $pdo->prepare("SELECT 
    `การบันทึกข้อมูล`.`รหัสคนไข้`,
    `ใบนัด`.`รหัสใบนัด`,
    `คนไข้`.`Username`,
    `คนไข้`.`รหัสบัตรประชาชนคนไข้`,
    `คนไข้`.`ชื่อ-สกุลคนไข้`,
    `คนไข้`.`วันเดือนปีเกิด`,
    `คนไข้`.`เบอร์โทรคนไข้`,
    `คนไข้`.`Email`
	FROM
    `การบันทึกข้อมูล`
	JOIN `ใบนัด` ON `ใบนัด`.`รหัสใบนัด` = `การบันทึกข้อมูล`.`รหัสใบนัด`
	JOIN `คนไข้` ON `คนไข้`.`Username` = `ใบนัด`.`Username`");

	$stmt->execute();
	?>

	<table border = "1"> 
		<tr>
			<th>รหัสคนไข้</th>
			<th>รหัสใบนัด</th>
			<th>Username</th>
			<th>รหัสบัตรประชาชนคนไข้</th>
			<th>ชื่อ-สกุลคนไข้</th>
			<th>วันเดือนปีเกิด</th>
			<th>เบอร์โทรคนไข้</th>
			<th>Email</th>

		</tr>
		<?php 
		while ($row = $stmt->fetch()) {
			?>
			<tr>
				<td>
					<?php echo $row["รหัสคนไข้"] ?>
				</td>
				<td>
					<?php echo $row["รหัสใบนัด"] ?>
				</td>
				<td>
					<?php echo $row["Username"] ?>
				</td>
				<td>
					<?php echo $row["รหัสบัตรประชาชนคนไข้"] ?>
				</td>
				<td>
					<?php echo $row["ชื่อ-สกุลคนไข้"] ?>
				</td>
				<td>
					<?php echo $row["วันเดือนปีเกิด"] ?>
				</td>
				<td>
					<?php echo $row["เบอร์โทรคนไข้"] ?>
				</td>
				<td>
					<?php echo $row["Email"] ?>
				</td>

			</tr>
		<?php } ?>
	</table>


</body>
</html>