<!DOCTYPE html>
<html>
<head>
    <title>Form Data Pengguna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Data Pengguna</h2>

    <form method="POST">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama">
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email">
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <select name="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label>Nomor Telepon:</label>
            <input type="text" name="no_hp">
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];

        echo "<div class='result-box'>";
        echo "<h3>Hasil Input:</h3>";
        echo "<p><b>Nama:</b> " . $nama . "</p>";
        echo "<p><b>Email:</b> " . $email . "</p>";
        echo "<p><b>Jenis Kelamin:</b> " . $jenis_kelamin . "</p>";
        echo "<p><b>Alamat:</b> " . $alamat . "</p>";
        echo "<p><b>Nomor Telepon:</b> " . $no_hp . "</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>