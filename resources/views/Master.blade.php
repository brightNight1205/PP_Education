<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Programs</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/Master.css">
</head>
<body class="bg-gray-100">
    <div class="container">
        <div class="section-padding">
            <a href="{{ route('home') }}" class="back-button">
                <span style="font-size: 2rem;">&larr;</span>
            </a>
            <h1 class="heading">Master Programs</h1>
            <div class="grid">
                <a href="{{ route('m_rupp') }}" class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/en/a/a2/RUPP_logo.PNG" alt="RUPP Logo">
                    <h2>Royal University of Phnom Penh (RUPP)</h2>
                </a>
               <a href="{{ route('m_rule') }}" class="card">
                    <img src="https://edurank.org/assets/img/uni-logos/royal-university-of-law-and-economics-logo.png" alt="RULE Logo">
                    <h2>Royal University of Law and Economics (RULE)</h2>
                </a>
                <a href="{{ route('m_itc') }}" class="card">
                    <img src="https://upload.wikimedia.org/wikipedia/en/f/f7/Institute_of_Technology_of_Cambodia_logo.png" alt="ITC Logo">
                    <h2>Institute Technology of Cambodia (ITC)</h2>
                </a>
                <a href="{{ route('m_aeu') }}" class="card">
                    <img src=" https://www.aeu.edu.kh/uoe2/images/aeu.png" alt="AEU Logo">
                    <h2>Asia Euro University (AEU)</h2>
                </a>
                 <a href="{{ route('m_cadt') }}" class="card">
                    <img src="https://www.cadt.edu.kh/wp-content/uploads/2023/02/cadt_square_logo_boundary.jpg" alt="CADT Logo">
                    <h2>Cambodia Academy of Digital Technology (CADT)</h2>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
