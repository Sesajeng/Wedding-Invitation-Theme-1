<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme 1</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Playfair Display', serif;
            margin: 0;
            padding: 0;
            background-image: url('/img/bg1.png');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            position: relative;
            min-height: 100px;

        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background-color: #f0e8dd;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

        }

        .header {
            margin-bottom: 20px;
        }

        .decoration {
            max-width: 100%;
            height: auto;
        }

        .wedding-title {
            font-size: 37px;
            font-family: 'Great Vibes', cursive;
            /* Gaya font elegan */
            color: #9c7b66;
            margin-top: 35px;

        }

        .wedding-from {
            font-size: 24px;
            font-weight: bold;
            color: #a57164;
            margin-top: -15px;
        }

        .wedding-ket {
            color: #7c675a;
            margin-top: -10px;
            font-family: 'Familjen Grotesk';

        }

        .wedding-judul {
            color: #7c675a;
            margin-top: -10px;
            font-family: 'Familjen Grotesk';
            font-weight: bold;
        }

        .button-container {
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #b2a190;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #a07e67;
        }

        .icon {
            margin-left: 8px;
        }

        .decoration {
            max-width: 100%;
            height: auto;
            position: absolute;
            top: -100px;
            /* Mulai dari atas viewport */
            left: 50%;
            transform: translateX(-50%);
            max-width: 350px;
            /* Set ukuran gambar */
            height: auto;
            animation: fall 2s ease-out forwards;
            /* Animasi akan berhenti di posisi akhir */
        }

        /* Keyframes untuk animasi jatuh */
        @keyframes fall {
            0% {
                top: -150px;
                /* Mulai di atas layar */
            }

            100% {
                top: 50px;
                /* Berhenti di posisi yang diinginkan */
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="header">
                <img src="/img/flowers 1.png" alt="Flowers Decoration" class="decoration">
            </div>
            <div class="content">
                <p class="wedding-to">Dear</p>
                <h2 class="wedding-from">Sinta Dewi</h2>
                <p class="wedding-ket">We invite you to the wedding of</p>
                <h1 class="wedding-title">Putra & Putri</h1>
                <p class="wedding-judul">Wedding Reception</p>
                <p class="wedding-ket">Tanggal, Bulan, Tahun | Jam</p>
            </div>
            <div class="button-container">
                <a href="halaman1">
                    <button>Open the Invitation <span class="icon"><img src="/img/home.png"></span></button>
            </div>
        </div>
    </div>
</body>

</html>
