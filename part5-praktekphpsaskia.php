<!DOCTYPE html>
<html>
<head>
    <title>Login Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: red;
            margin: 0;
            padding: 0;
        }

        #container {
            max-width: 400px;
            margin: 0 auto;
            background-color: cyan;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            border: none;
            border-radius: 5px;
            padding: 12px;
        }

        label {
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="container">
        <h2>Data Siswa</h2>
        <form method="post" action="proses.php">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>

            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" id="kelas" required>

            <label for="absen">Absen:</label>
            <input type="text" name="absen" id="absen" required>

            <label for="nilaiuh">Nilai UH:</label>
            <input type="number" name="nilaiuh" id="nilaiuh" required>

            <label for="nilaipts">Nilai PTS:</label>
            <input type="number" name="nilaipts" id="nilaipts" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
