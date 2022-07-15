<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Kalkulator Sederhana</title>
</head>
<body>
    <div class="container bg-dark text-white">
        <?php
        $bil1=null;
        $bil2=null;
        if (isset($_GET['bil1'])) {

            $bil1=$_GET['bil1'];
            $bil2=$_GET['bil2'];
            $hasil=0;
            $operasi=$_GET["operasi"];
            switch ($operasi) {
                case 'tambah':
                    $hasil = $bil1+$bil2;
                    break;
                case 'kurang':
                    $hasil = $bil1-$bil2;
                    break;
                case 'kali':
                    $hasil = $bil1*$bil2;
                    break; 
                case 'bagi':
                    $hasil = $bil1/$bil2;
                    break;
                case '%':
                    $hasil = $bil1%$bil2;
                    break;
                case 'kuadrat':
                    $hasil = $bil1**$bil2;
                    break;
            }
        }
        ?>
        <div class="rows">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method = "get">
            <h2>Kalkulator</h2>
            <div class="form group">
                <label>Bilangan 1:</label>
                <input type = "text" name = "bil1" class = "form-control" value="<?php echo $bil1; ?>" required>
            </div>
            <div class="form group">
                <label>Bilangan 2:</label>
                <input type = "text" name = "bil2" class = "form-control" value="<?php echo $bil2; ?>" required>
            </div>
            <div class="form group">
                <select class="form-control" name="operasi">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">/</option>
                    <option value="%">%</option>
                    <option value="kuadrat">**</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
    </form>
    <br>
    <?php
    if (isset($_GET['bil1'])) {
        echo "<h1>$hasil</h1>";
    }
    ?>
    </div>
</div>
</body>
</html>