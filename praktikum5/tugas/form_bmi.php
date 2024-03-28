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
        .form-group {
            top: 20px;
            left: 20px;
            width: 500px;
            padding: 20px;
            border: 5px solid #ccc;
            border-radius: 5px;
        }
        
        .form-group {
            margin-bottom: 3px;
        }

        label {
            margin-bottom: 1px;
        }
    </style>
</head>

<body>
    <form method="post" action="hitung_bmi.php">
    <div class="form-group">
            <h4 style="font-weight: bold;">FORM BMI</h4>
            <br>
            <input id="nama" name="nama" placeholder="Nama" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="beratbadan">Berat Badan</label>
            <div class="input-group">
                <input id="beratbadan" name="beratbadan" placeholder="Berat Badan" type="text" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text">KG</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="tinggibadan">Tinggi Badan</label>
            <div class="input-group">
                <input id="tinggibadan" name="tinggibadan" placeholder="Tinggi Badan" type="text" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text">CM</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="Umur">Umur</label>
            <input id="Umur" name="Umur" placeholder="Umur" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jeniskelamin" id="jeniskelamin_0" type="radio" class="custom-control-input" value="pria">
                <label for="jeniskelamin_0" class="custom-control-label">Pria</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jeniskelamin" id="jeniskelamin_1" type="radio" class="custom-control-input" value="wanita">
                <label for="jeniskelamin_1" class="custom-control-label">Wanita</label>
            </div>
        </div>
        <div class="form-group">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>

    
</body>

</html>
