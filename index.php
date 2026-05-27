<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Melodifestivalen Sida</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <button onclick="visaAllaDeltavlingar()">Se alla deltävlingar</button>
        <button onclick="visaAllaArtister()">Se alla artister</button>
        
        <h1>MELODIFESTIVALEN</h1>
    </div>

    <div class="main">
        <h2 id="rubrik">Välkommen till Mello</h2>

        <div id="deltavlinglista"></div>

        <div id="grid" class="bidraggrid"></div>
    </div>

    <script src="app.js"></script>
</body>
</html>