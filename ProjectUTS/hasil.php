<?php
$text_align = isset($_COOKIE["text_align"]) ? $_COOKIE["text_align"] : "left";
$font_family = isset($_COOKIE["font_family"]) ? $_COOKIE["font_family"] : "Arial";
$color = isset($_COOKIE["color"]) ? $_COOKIE["color"] : "#000000";

$css_settings = "
    text-align: $text_align;
    font-family: $font_family;
    color: $color;
";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page Hasil</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: rgb(250, 243, 233);
                color: rgb(87, 73, 61);
                margin: 35px;
                padding: 0;
                text-align: left;
            }
            label {
                white-space: nowrap;
            }
            .setting-container {
                display: flex;
                align-items: center;
                gap: 10px;
            }
            .styled-text {
                <?= $css_settings ?>
            }
        </style>
    </head>
    <body>
        <h2 style="margin-left: 278px;">
            Halaman Hasil<br><br><br>
        </h2>
        <p class="setting-container">
            <label>Setting yang tersedia:</label>
            <textarea name="txtArea" rows="5" cols="50">
            text-align: <?= $text_align ?>;
            font-family: <?= $font_family ?>;
            color: <?= $color ?>;
            </textarea><br>
            <a href="setting.php">Ganti Setting</a><br>
        </p>

        <div style="max-width: 42vw; background-color: white; padding: 10px; margin-left: 0; border: 2px solid black;">
            <p class="styled-text">
                Contoh paragraf:<br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed.
            </p>
        </dic>
    </body>
</html>
