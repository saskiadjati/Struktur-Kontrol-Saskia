<!DOCTYPE html>
<html>
<head>
    <title>Hasil Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        #container {
            max-width: 400px;
            margin: 0 auto;
            background-color: pink;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        p {
            color: #333;
        }

        .result {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div id="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $namasiswa = $_POST["nama"];
            $kelas = $_POST["kelas"];
            $absen = $_POST["absen"];
            $nilaiuh = $_POST["nilaiuh"];
            $nilaipts = $_POST["nilaipts"];

            $ratarata = ($nilaiuh + $nilaipts) / 2;
        ?>
        <h2>Hasil Data Siswa</h2>
        <img src="https://7glitz.com/wp-content/uploads/2023/06/hanni-newjeans-peace.jpg" alt="Foto Siswa">
        <p>Nama: <?php echo $namasiswa; ?></p>
        <p>Kelas: <?php echo $kelas; ?></p>
        <p>Absen: <?php echo $absen; ?></p>
        <p>Nilai UH: <?php echo $nilaiuh; ?></p>
        <p>Nilai PTS: <?php echo $nilaipts; ?></p>
        <p>Rata-rata: <?php echo $ratarata; ?></p>

        <div class="result">
            <?php
            if ($nilaipts > $ratarata) {
                echo "Siswa tidak perlu remedial PTS.";
            } elseif ($nilaipts < $ratarata) {
                echo "Siswa perlu remedial PTS.";
            } else {
                echo "Siswa dinyatakan tidak lulus PTS.";
            }

            echo "<br>";

            if ($nilaiuh > $ratarata) {
                echo "Siswa tidak perlu remedial UH.";
            } elseif ($nilaiuh < $ratarata) {
                echo "Siswa perlu remedial UH.";
            } else {
                echo "Siswa dinyatakan tidak lulus UH.";
            }
            ?>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>
