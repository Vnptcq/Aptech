<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/mvc/app/asset/css/i.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <?php 
        $this->view("layouts/header");
        
        $this->view($data["content"]);
        $this->view("layouts/footer");
    ?>
</body>
</html>