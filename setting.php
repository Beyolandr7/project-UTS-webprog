<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Save valuenya ke cookie, durasi 30 hari
    setcookie("text_align", $_POST["text_align"], time() + (30 * 24 * 60 * 60), "/");
    setcookie("font_family", $_POST["font_family"], time() + (30 * 24 * 60 * 60), "/");
    setcookie("color", $_POST["color"], time() + (30 * 24 * 60 * 60), "/");

    //Redirect ke halaman index.php
    header("Location: index.php");
    exit();
}

//Ambil value dari cookie
$text_align = isset($_COOKIE["text_align"]) ? $_COOKIE["text_align"] : "Left";
$font_family = isset($_COOKIE["font_family"]) ? $_COOKIE["font_family"] : "Arial";
$color = isset($_COOKIE["color"]) ? $_COOKIE["color"] : "#000000";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Tampilan</title>
    <style>
            body {
                font-family: Arial, sans-serif;
                background-color: rgb(250, 243, 233);
                color: rgb(87, 73, 61);
                margin: 35px;
                padding: 0;
                text-align: left;
            }
            form {
                background-color: rgb(255, 225, 200);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
            }
            label {
                font-weight: bold;
                color: rgb(90, 70, 50);
            }
            select, input[type="color"] {
                margin-top: 5px;
                padding: 5px;
                border-radius: 5px;
                border: 1px solid rgb(200, 170, 150);
            }
            button {
                background-color: rgb(255, 160, 122);
                padding: 10px 15px;
                border-radius: 5px;
                color: white;
                font-weight: bold;
                border: none;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            button:hover {
                background-color: rgb(255, 130, 100);
            }
    </style>
</head>
<body>
    <h2>Page Pengaturan Tampilan Hasil</h2>
    <form method="POST">
        <label for="text_align">Text Align:</label>
        <select name="text_align">
            <option value="Left" <?= ($text_align == "Left") ? "selected" : "" ?>>Left</option>
            <option value="Right" <?= ($text_align == "Right") ? "selected" : "" ?>>Right</option>
            <option value="Center" <?= ($text_align == "Center") ? "selected" : "" ?>>Center</option>
            <option value="Justify" <?= ($text_align == "Justify") ? "selected" : "" ?>>Justify</option>
        </select>
        <br><br>

        <label for="font_family">Font Family:</label>
        <select name="font_family">
            <option value="Arial" <?= ($font_family == "Arial") ? "selected" : "" ?>>Arial</option>
            <option value="Tahoma" <?= ($font_family == "Tahoma") ? "selected" : "" ?>>Tahoma</option>
            <option value="Calibri" <?= ($font_family == "Calibri") ? "selected" : "" ?>>Calibri</option>
        </select>
        <br><br>

        <label for="color">Warna Teks:</label>
        <input type="color" name="color" value="<?= $color ?>">
        <br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
