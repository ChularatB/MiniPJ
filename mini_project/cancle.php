<?php
$pdo = new PDO("mysql:host=localhost; dbname=funtasy; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <?php
    $stmt = $pdo->prepare("SELECT
    `การบันทึกข้อมูล`.`รหัสใบนัด`,
    `การบันทึกข้อมูล`.`รหัสคนไข้`,
    `การบันทึกข้อมูล`.`รหัสประเภททันตกรรม`,
    `ใบนัด`.`วันที่นัด`,
    `ตารางนัดทันตแพทย์`.`วันที่ทันตแพทย์เข้าเวร`,
    `ตารางนัดทันตแพทย์`.`เวลาที่ทันตแพทย์เข้าเวร`,
    `การตรวจสอบ`.`รหัสทันตแพทย์`
FROM
    `การบันทึกข้อมูล`
JOIN `ใบนัด` ON `ใบนัด`.`รหัสใบนัด` = `การบันทึกข้อมูล`.`รหัสใบนัด`
JOIN `ตารางนัดทันตแพทย์` ON `การบันทึกข้อมูล`.`รหัสคนไข้` = `ตารางนัดทันตแพทย์`.`รหัสคนไข้`
JOIN `การตรวจสอบ` ON `ตารางนัดทันตแพทย์`.`รหัสคนไข้` = `การตรวจสอบ`.`รหัสคนไข้`
ORDER BY `การบันทึกข้อมูล`.`รหัสคนไข้`;
");
    $stmt->execute();
    $row = $stmt->fetch();
?>
    <form action="confirm.php?`รหัสใบนัด`=<?=$row["รหัสใบนัด"]?>">
        <label for="รหัสใบนัด">รหัสใบนัด</label>
        <input type="text" name="รหัสใบนัด">
        <input type="submit" value="cancle" >
    </form>

</body>

</html>