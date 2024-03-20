<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        table {
            width: 300px;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            border: 3px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .harga-container {
        position: absolute;
        top: 100px; /* Ubah nilai top sesuai dengan preferensi Anda */
        right: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 m-4">
                <div style="width: 500px;">
                    <h4>Form Penjualan</h4>
                    <br>
                    <form>
                        <div class="form-group row">
                            <label for="customer" class="col-4 col-form-label">Customer</label>
                            <div class="col-8">
                                <input id="customer" name="customer" placeholder="Masukkan nama" type="text"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Pilih Produk</label>
                            <div class="col-8">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="produk" id="produk_0" type="checkbox" class="custom-control-input"
                                        value="TV">
                                    <label for="produk_0" class="custom-control-label">TV</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="produk" id="produk_1" type="checkbox" class="custom-control-input"
                                        value="Kulkas">
                                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="produk" id="produk_2" type="checkbox" class="custom-control-input"
                                        value="Mesin Cuci">
                                    <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                            <div class="col-8">
                                <input id="jumlah" name="jumlah" placeholder="Masukkan jumlah" type="text"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="harga-container">
        <table class="table table-dark" style="width: 400px;">
            <thead>
                <tr>
                    <th scope="col">Daftar Harga</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TV</td>
                    <td>=1000.000</td>
                </tr>
                <tr>
                    <td>Kulkas</td>
                    <td>=2000.000</td>
                </tr>
                <tr>
                    <td>Mesin Cuci</td>
                    <td>=3000.000</td>
                </tr>
                <tr>
                    <td>Harga dapat berubah kapanpun</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

<?php 

if (isset($_REQUEST['submit'])) {
    $customer = $_REQUEST['customer'];
    $produk = $_REQUEST['produk'];
    $jumlah = $_REQUEST['jumlah'];

 // Harga masing-masing produk
 $prices = array(
    "TV" => 1000000,
    "Kulkas" => 2000000,
    "Mesin Cuci" => 3000000
 );
 // Menghitung total harga
 $total = $prices[$produk] * $jumlah;

 // Menampilkan ringkasan pembelian
 echo "<h2>Ringkasan Pembelian:</h2>";
 echo "<p>Nama Pelanggan: $customer</p>";
 echo "<p>Produk: $produk</p>";
 echo "<p>Jumlah: $jumlah</p>";
 echo "<p>Total Harga: Rp " . number_format($total, 0, ',', '.') . "</p>";

}
?>
</html>
