<!DOCTYPE html>
<html>
    <head>
        <title>Main Page</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: rgb(250, 243, 233);
                color: rgb(87, 73, 61);
                margin: 0;
                padding: 0;
                text-align: center;
            }
            .panel {
                background-color: rgb(255, 230, 204);
                width: 50%;
                margin: 50px auto;
                padding: 20px;
                border-radius: 15px;
                box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            }
            h1 {
                font-size: 24px;
                color: rgb(105, 89, 77);
                margin-bottom: 20px;
            }
            .allButton {
                padding: 10px 20px;
                margin: 10px;
                font-size: 14px;
                font-weight: bold;
                color: white;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                transition: background-color 0.3s, transform 0.2s;
            }
            .allButton a {
                text-decoration: none;
                color: rgb(255, 255, 255);
            }
            .button-primary {
                background-color: rgb(255, 140, 105);
            }
            .button-primary:hover {
                background-color: rgb(255, 112, 77);
                transform: scale(1.05);
            }
            .styled-text {
                background-color: rgb(255, 245, 230);
                padding: 10px;
                border-radius: 8px;
                text-align: left;
                font-size: 16px;
                line-height: 1.6;
            }
        </style>
    </head>
    <body>
    <div class="panel">
            <h1>Halaman Utama</h1>
            <a href="hasil.php">
                <button class="allButton button-primary">Lihat Hasil</button>
            </a>
            <a href="setting.php">
                <button class="allButton button-primary">Lihat Setting</button>
            </a>
        </div>
    </body>
</html>