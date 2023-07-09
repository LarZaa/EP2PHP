<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_4_1</title>
    <style>
        footer {
        background-color: #ffb4b4;
        padding: 5px;
        text-align: center;
        }
    </style>
</head>
<body>
    <h1>4.1 แสดงชื่อ-นามสกุล ชื่อเล่น ด้วยตัวแปร</h1>
    <h2><?php
    echo "Hello PHP";
     ?></h2>
    <?php
    echo "Mr.Nattakorn Somsrichai";
    echo "<br>";
    $nickname="Lar";
    $age = 38;
    echo "Nickname : ".$nickname;
    echo "<br>Age : ".$age."ปี";
     ?>
     <h3><a href="index.html">Home</a></h3>
     <!-- <a href="index.html"><input type="Buton"value="Home"></a> -->
    
</body>
<footer>
      <p>Copyright &copy; by Thonburi University </p>
</footer>
</html>