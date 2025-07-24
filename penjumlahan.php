<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Dark Mode</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-color: #1e1e1e;
            color: #ffffff;
        }
        .calculator {
            display: inline-block;
            padding: 20px;
            border-radius: 10px;
            background-color: #2c2c2c;
            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.1);
        }
        input, select, button {
            margin: 8px;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #555;
            background-color: #444;
            color: white;
        }
        select {
            cursor: pointer;
        }
        input::placeholder {
            color: #bbb;
        }
        button {
            background-color: #ff9800;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #e68900;
        }
        .result {
            margin-top: 15px;
            font-weight: bold;
            color: #ffcc00;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Kalkulator Sederhana</h2>
    
    <form method="POST">
        <input type="number" name="angka1" placeholder="Masukkan angka pertama" required>
        
        <select name="operator">
            <option value="tambah">+</option>
            <option value="kurang">−</option>
            <option value="kali">×</option>
            <option value="bagi">÷</option>
        </select>
        
        <input type="number" name="angka2" placeholder="Masukkan angka kedua" required>
        
        <button type="submit">Hitung</button>
    </form>

    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka1 = $_POST['angka1'];
            $angka2 = p$_POST['angka2'];
            $operator = $_POST['operator'];
            $hasil = 0;

            switch ($operator) {
                case "tambah":
                    $hasil = $angka1 + $angka2;
                    echo "Hasil: $angka1 + $angka2 = $hasil";
                    break;
                case "kurang":
                    $hasil = $angka1 - $angka2;
                    echo "Hasil: $angka1 − $angka2 = $hasil";
                    break;
                case "kali":
                    $hasil = $angka1 * $angka2;
                    echo "Hasil: $angka1 × $angka2 = $hasil";
                    break;
                case "bagi":
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2;
                        echo "Hasil: $angka1 ÷ $angka2 = $hasil";
                    } else {
                        echo "Error: Tidak bisa membagi dengan nol!";
                    }
                    break;
                default:
                    echo "Operasi tidak valid!";
            }
        }
        ?>
    </div>
</div>

</body>
</html>