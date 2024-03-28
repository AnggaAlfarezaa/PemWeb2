<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* CSS untuk memperkecil ukuran form */
        .hitung-bmi {

            width: 500px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .hasil-bmi {
            position: absolute;
            top: 1px;
            right: 20px;
            width: 700px;
            height: 510px;
            padding: 20px;
            border: 10px solid #ccc;
            border-radius: 5px;
        }

        .data-orang {
            width: 1200px;
            height: 20px;
        }
    </style>
</head>

<body>
    <div class="hitung-bmi">
        <div class="container">
            <h2 class="mt-5">Hitung BMI</h2>
            <form method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                </div>
                <div class="form-group">
                    <label for="beratbadan">Berat Badan (kg)</label>
                    <input type="text" class="form-control" id="beratbadan" name="beratbadan" placeholder="Berat Badan" required>
                </div>
                <div class="form-group">
                    <label for="tinggibadan">Tinggi Badan (cm)</label>
                    <input type="text" class="form-control" id="tinggibadan" name="tinggibadan" placeholder="Tinggi Badan" required>
                </div>
                <div class="form-group">
                    <label for="Umur">Umur</label>
                    <input type="text" class="form-control" id="Umur" name="Umur" placeholder="Umur" required>
                </div>
                <button type="submit" class="btn btn-primary">Hitung</button>
            </form>

            <br>
            <br>
            <br>

            <div class="data-orang">
                <h2>Data Orang</h2>

                <table class="table table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th>Berat Badan (kg)</th>
                        <th>Tinggi Badan (cm)</th>
                        <th>BMI</th>
                        <th>Keterangan</th>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Laki-laki</td>
                        <td>30</td>
                        <td>75</td>
                        <td>180</td>
                        <td>23.15</td>
                        <td>Berat badan normal</td>
                    </tr>
                    <tr>
                        <td>Jane</td>
                        <td>Perempuan</td>
                        <td>25</td>
                        <td>60</td>
                        <td>165</td>
                        <td>22.04</td>
                        <td>Berat badan normal</td>
                    </tr>
                    <tr>
                        <td>Michael</td>
                        <td>Laki-laki</td>
                        <td>35</td>
                        <td>90</td>
                        <td>175</td>
                        <td>29.39</td>
                        <td>Kelebihan berat badan</td>
                    </tr>
                    <tr>
                        <td>Emily</td>
                        <td>Perempuan</td>
                        <td>28</td>
                        <td>55</td>
                        <td>160</td>
                        <td>21.48</td>
                        <td>Berat badan normal</td>
                    </tr>
                    <tr>
                        <td>David</td>
                        <td>Laki-laki</td>
                        <td>40</td>
                        <td>80</td>
                        <td>170</td>
                        <td>27.68</td>
                        <td>Kelebihan berat badan</td>
                    </tr>
                </table>

</body>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan dari form
    $nama = $_POST["nama"];
    $berat_badan = $_POST["beratbadan"];
    $tinggi_badan = $_POST["tinggibadan"];
    $umur = $_POST["Umur"];

    // Konversi tinggi badan dari CM ke M
    $tinggi_badan_m = $tinggi_badan / 100;

    // Hitung BMI
    $bmi = $berat_badan / ($tinggi_badan_m * $tinggi_badan_m);

    // Tentukan keterangan BMI
    if ($bmi < 18.5) {
        $keterangan = "Berat badan kurang";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        $keterangan = "Berat badan normal";
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        $keterangan = "Kelebihan berat badan";
    } else {
        $keterangan = "Obesitas";
    }
?>
    <div class="hasil-bmi">
        <h4>Hasil BMI untuk <?php echo $nama; ?>:</h4>
        <table class="table table-dark">
            <tr>
                <td>Nama</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Berat Badan (kg)</td>
                <td><?php echo $berat_badan; ?></td>
            </tr>
            <tr>
                <td>Tinggi Badan (cm)</td>
                <td><?php echo $tinggi_badan; ?></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><?php echo $umur; ?></td>
            </tr>
            <tr>
                <td>BMI</td>
                <td><?php echo number_format($bmi, 2); ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><?php echo $keterangan; ?></td>
            </tr>
        </table>
    </div>
<?php } ?>
</div>
</div>
</body>

</html>