<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        label, input {
            display: block;
        }

        .button-group {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <form action="proses-tambah.php" method="post">
        <div class="input-group">
            <label for="name">Nama Barang</label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama barang" required>
        </div>
        
        <div class="input-group">
            <label for="stock">Stok</label>
            <input type="number" name="stock" id="stock" placeholder="Masukkan jumlah stok barang" required>
        </div>
        
        <div class="input-group">
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" placeholder="Masukkan harga barang" required>
        </div>
        
        <div class="button-group">
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>