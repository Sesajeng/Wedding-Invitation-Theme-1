<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;family=Open+Sans:wght@300;400;600&amp;display=swap"
        rel="stylesheet" />
    <title>Wedding Invitation</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Arial', sans-serif;
            text-align: center;
        }

        .background1 {
            background-image: url('/img/prewed1.png');
            background-size: cover;
            background-position: center;
            height: 100%;
            position: relative;
        }

        .background2 {
            background-image: url('/img/bg1.png');
            background-size: cover;
            background-position: center;
            height: 100%;
            position: relative;
        }

        .content {
            position: absolute;
            top: 50px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: black;

        }

        .wedding-name {
            font-size: 50px;
            font-family: 'Great Vibes', cursive;
            color: #9c7b66;
            margin-top: 35px;
            font-weight: 200;
            margin: 10px auto 20px;
        }

        .wedding-name::after {
            content: '';
            display: block;
            width: 60px;
            /* Fixed width for a smaller line */
            height: 2px;
            background-color: #9c7b66;
            margin: 10px auto 2px;
            /* Margin for space between line and text */
        }

        .wedding-title {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            color: #8c7a66;
            text-align: center;
            margin-bottom: 5px;
            font-weight: 200;
        }

        .wedding-date {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            color: #8c7a66;
            text-align: center;
            margin-bottom: 5px;
            font-weight: 200;
            margin: -5px auto 20px;
        }

        .container {
            position: relative;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            width: 500px;
            padding: 30px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Text Styles */
        .title {
            font-size: 24px;
            margin: 0;
            color: #6a5d53;
        }

        .subtitle {
            font-size: 20px;
            font-style: italic;
            margin: 5px 0 20px 0;
            color: #a39283;
        }

        .verse-reference {
            font-size: 18px;
            font-style: italic;
            color: #d7b9a5;
            margin-bottom: 20px;
        }

        .verse-text {
            font-size: 16px;
            line-height: 1.6;
            color: #6a5d53;
            text-align: justify;
        }

        /* Flower Decorations */
        .flower {
            position: absolute;
            width: 50px;
            height: 50px;
            background-image: url('flower.png');
            /* Replace with your flower image URL */
            background-size: cover;
        }

        .flower-top-left {
            top: -15px;
            left: -15px;
        }

        .flower-bottom-right {
            bottom: -15px;
            right: -15px;
        }

        /* Media query untuk tampilan mobile */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .title {
                font-size: 1.5rem;
            }

            .subtitle {
                font-size: 1.2rem;
            }

            .verse-reference {
                font-size: 1rem;
            }

            .verse-text {
                font-size: 0.9rem;
            }
        }

        .floral-left,
        .floral-right {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 150px;
        }

        .floral-left {
            left: 0;
        }

        .floral-right {
            right: 0;
        }

        .flowers3,
        .flowers4 {
            position: absolute;
            animation: float 6s ease-in-out infinite;
        }

        /* Flowers position */
        .flowers4 {
            top: -5%;
            left: 0%;
            animation-delay: 1s;
        }

        .flowers3 {
            bottom: -10%;
            right: 0%;
        }

        /* Animation for floating effect */
        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(30px);
            }

            100% {
                transform: translateY(0);
            }
        }



        .background2 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .container3 {
            text-align: center;
            padding: 50px;
            font-family: 'Open Sans', sans-serif;
            background: url('/img/bg1.png');
            background-size: cover;
            color: #5e5e5e;
        }

        .header {
            font-family: 'Great Vibes', cursive;
            font-size: 48px;
            color: #7a6e6e;
        }

        .subheader {
            font-size: 18px;
            color: #7a6e6e;
            margin: 20px 0;
        }

        .profiles {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-top: 30px;
        }

        .profile {
            text-align: center;
        }

        .profile img {
            width: 300px;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        .name {
            font-family: 'Great Vibes', cursive;
            font-size: 24px;
            margin-top: 10px;
        }

        .details {
            font-size: 16px;
            margin-top: 10px;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: #7a6e6e;
            margin: 0 10px;
            font-size: 24px;
            text-decoration: none;
        }

        .container4 {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            top: 50%;
            transform: translateY(50%);
            
        }

        .header {
            font-family: 'Great Vibes', cursive;
            font-size: 36px;
            color: #6B6B6B;
            margin-bottom: 10px;
        }

        .subheader {
            font-size: 24px;
            color: #6B6B6B;
            margin-bottom: 20px;
        }

        .content {
            font-size: 18px;
            color: #6B6B6B;
            margin-bottom: 20px;
        }

        .location {
            font-size: 18px;
            color: #6B6B6B;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #6B6B6B;
            background-color: #E0D7D7;
            border-radius: 20px;
            text-decoration: none;
        }

        .footer {
            margin-top: 20px;
        }

        .footer img {
            width: 100%;
            border-radius: 0 0 15px 15px;
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/img/bg1.png');
            background-size: cover;
            background-position: center;
            z-index: -1;
            /* Ensure it's behind the content */
        }
    </style>
</head>

<body>
    <div class="background1">
        <div class="content">
            <h2 class="wedding-title">Our Wedding</h2>
            <h1 class="wedding-name">Putra & Putri</h1>
            <p class="wedding-date">19 Agustus 2024</p>
        </div>
    </div>
    <div class="background2">
        <div class="container gradient-container">
            <div class="text-box">
                <h2 class="title">AYAT SUCI</h2>
                <h3 class="subtitle">Al-Qur'an</h3>
                <p class="verse-reference">Q.S Ar-Rum : 21</p>
                <p class="verse-text">
                    "Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan pasangan-pasangan untukmu dari
                    (jenis) dirimu sendiri agar kamu merasa tenteram kepadanya. Dia menjadikan di antaramu rasa cinta
                    dan kasih sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran
                    Allah) bagi kaum yang berpikir."
                </p>
            </div>
            <img src="/img/Vector.png" alt="Flower Top Left" class="flower flower-top-left">
            <img src="/img/Vector 1.png" alt="Flower Bottom Right" class="flower flower-bottom-right">
        </div>
    </div>
    <div class="container3">
        <div class="header">
            Bride &amp; Groom
        </div>
        <div class="subheader">
            We're getting hitched! We would be delighted if you could celebrate our wedding with us!
        </div>
        <div class="profiles">
            <div class="profile">
                <img alt="Bride holding a bouquet of flowers" height="400"
                    src="https://storage.googleapis.com/a1aa/image/ZpAWbNaEeKyRY6sSTzRU3v9rtefBhFJ7zIGOCqhWASPYYKFnA.jpg"
                    width="300" />
                <div class="name">
                    Riska
                </div>
                <div class="details">
                    Angelina Mariska, S.Kom
                    <br />
                    Putri Kedua dari
                    <br />
                    Bapak Ahmad Syahputra
                    <br />
                    &amp; Ibu Riyatna Kusumaningrum
                </div>
                <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-instagram">
                        </i>
                    </a>
                    <a href="#">
                        <i class="fab fa-facebook">
                        </i>
                    </a>
                </div>
            </div>
            <div class="profile">
                <img alt="Groom in a suit" height="400"
                    src="https://storage.googleapis.com/a1aa/image/40Dn2EnLhw6pDNuNwbR0eA0I1eV9GsmQdak8lZokmhOLMliTA.jpg"
                    width="300" />
                <div class="name">
                    Graha
                </div>
                <div class="details">
                    Fakih Prasetya Nugraha, S.T
                    <br />
                    Putra Pertama dari
                    <br />
                    Bapak Bakhri Suhendar
                    <br />
                    &amp; Ibu Maylina Oktisetya
                </div>
                <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-instagram">
                        </i>
                    </a>
                    <a href="#">
                        <i class="fab fa-facebook">
                        </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="background2">
    <div class="container4">
        <div class="header">
            Akad
        </div>
        <div class="subheader">
            Pernikahan
        </div>
        <div class="content">
            Minggu, 17 Oktober 2024
            <br />
            Pukul 07.00 s/d 09.00 WIB
        </div>
        <div class="location">
            Puri Ardhya Garini, Halim Perdana Kusuma
            <br />
            Jl. Halim Perdana Kusuma,
            <br />
            Halim Perdana Kusumah, Kec. Makasar
            <br />
            Kota Jakarta Timur. DKI Jakarta
        </div>
        <a class="button" href="#">
            (icon)Lihat Lokasi
        </a>
        <div class="footer">
            <img alt="Floral decoration at the bottom of the invitation" height="200"
                src="https://storage.googleapis.com/a1aa/image/0SedNzvcBYx7K6BSlyBB7sQsbkiMXueSKfhZ7xK6uzgwlKFnA.jpg"
                width="600" />
        </div>
    </div>
    
</body>

</html>
