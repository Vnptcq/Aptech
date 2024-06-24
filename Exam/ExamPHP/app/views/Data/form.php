<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<?php 
    $item = $data["item"] ;
?>
<body>
    <form action="http://localhost/ExamPHP_VuDinhQuy_T2401E/Data/execute" method="POST">
        <input type="hidden" name="id" value='<?php echo ($item)  ? $item->id : "" ?>'>
        <input type="text" name="item_code" value='<?php echo ($item) ? $item->item_code : "" ?>' placeholder="input item_code">
        <input type="text" name="item_name" value='<?php echo ($item) ? $item->item_name : "" ?>' placeholder="input item_name">
        <input type="text" name="quantity" value='<?php echo ($item) ? $item->quantity : "" ?>' placeholder="input quantity">
        <input type="text" name="expired_date" value='<?php echo ($item) ? $item->expired_date : "" ?>' placeholder="input expired_date">
        <input type="text" name="note" value='<?php echo ($item) ? $item->note : "" ?>' placeholder="input note">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>