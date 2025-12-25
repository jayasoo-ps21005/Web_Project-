<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Alliance Heroes</title>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #0a2342, #1c3f77);
      color: #fff;
      font-family: 'Roboto', sans-serif;
      text-align: center;
      margin: 0;
      padding: 0;
    }


   header {
    background: #0e0e0e;
    padding: 15px 40px;
    position: sticky;
    top: 0;
    z-index: 10;
}

.nav-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo img {
    height: 30px;
    margin-right: 10px;
}

.main-menu ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

.main-menu ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
}

.main-menu ul li a:hover {
    color: gold;
}

.actions {
    display: flex;
    gap: 10px;
}

.play-now {
    background: #00BFFF;
    color: #fff;
    border: none;
    padding: 8px 14px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: bold;
}

.search-btn {
    background: none;
    border: none;
    font-size: 18px;
    color: white;
    cursor: pointer;
}

    h2 {
      font-family: 'Cinzel Decorative', cursive;
      font-size: 40px;
      margin-top: 30px;
      color: #ffe57f;
      text-shadow: 2px 2px #000;
    }

    img {
      border: 4px solid #ccc;
      margin-top: 20px;
      max-width: 100%;
      height: auto;
    }

    #info {
      margin: 30px auto;
      width: 80%;
      max-width: 800px;
      background-color: rgba(0, 0, 50, 0.7);
      padding: 20px;
      border-left: 8px solid #42a5f5;
      font-size: 18px;
      border-radius: 10px;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    }

    #info.show {
      opacity: 1;
    }

    area {
      cursor: pointer;
    }

	/* === Footer === */
.site-footer {
    background-color: #111;
    color: #aaa;
    text-align: center;
    padding: 40px 20px;
    font-size: 14px;
    font-family: Arial, sans-serif;
}

.site-footer a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
    font-weight: bold;
    display: inline-block;
    margin-bottom: 10px;
}

.top-links, .bottom-links {
    margin-bottom: 20px;
}

.social-icons {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 16px;
  margin: 20px 0;
}

.social-icons img {
  width: 32px;
  height: 32px;
  transition: transform 0.3s ease;
  cursor: pointer;
}

.social-icons img:hover {
  transform: scale(1.2);
}

.company-info {
    margin: 20px auto;
    max-width: 700px;
    font-size: 13px;
    color: #999;
}

.Blizzard {
    height: 70px;
    margin-bottom: 10px;
}

  </style>
</head>
<body>
	<!-- Header / Navbar -->
    <header>
        <div class="nav-bar">
            <div class="logo">
                <img src="BLIZZARD.png" alt="Blizzard Logo">
                <img src="WOW LOGO.png" alt="WoW Logo">
            </div>
            <nav class="main-menu">
                <ul>
                    <li><a href="https://www.blizzard.com/en-us/games" target="_blank" rel="noreferrer">GAME</a></li>
                    <li><a href="#champion-section">CHAMPIONS</a></li>
                    <li><a href="https://worldofwarcraft.blizzard.com/en-us/news"target="_blank">NEWS</a></li>
                    <li><a href="#Patch-Note">PATCH NOTES</a></li>
                    <li><a href="#esports">ESPORTS</a></li>
                    <li><a href="https://gear.blizzard.com/collections/world-of-warcraft"target="_blank">MERCH</a></li>
                    <li><a href="#support">SUPPORT</a></li>
		    <li><a href="Home.php">Home</a></li>
                </ul>
            </nav>
           <div class="actions">
    <div class="search-box">
        <input type="text" id="searchInput" placeholder="Search...">
        <button class="search-btn" onclick="handleSearch()">🔍</button>
    </div>
    <button class="play-now" onclick="openModal()">Register Now!</button>
</div>

        </div>
    </header>

  <h2>Champions of the Alliance</h2>

  <img src="Untitled design (1).png" usemap="#allianceMap" width="1000" height="250" alt="Alliance Heroes">

  <map name="allianceMap">
    <area shape="rect" coords="0,0,250,250" alt="Lothar" onclick="showInfo(`🗡️ <strong>Anduin Lothar</strong><br><br>
      The Lion of Azeroth. A fearless warrior and tactical genius who led the Alliance in the First and Second Wars. Lothar's sacrifice cemented his place in history as a symbol of honor and valor.`)">
      
    <area shape="rect" coords="250,0,500,250" alt="Calia" onclick="showInfo(`🕊️ <strong>Calia Menethil</strong><br><br>
      A noble of Lordaeron and sister of Arthas. Once thought lost, she now walks a path of redemption. As a Light-forged undead, Calia bridges the gap between life, death, and the Light.`)">
      
    <area shape="rect" coords="500,0,750,250" alt="Khadgar" onclick="showInfo(`📚 <strong>Khadgar</strong><br><br>
      Once Medivh’s apprentice, Khadgar is one of the greatest living mages. Wise, brave, and clever, he helped defeat the Legion and wields magic with unmatched precision and responsibility.`)">
      
    <area shape="rect" coords="750,0,1000,250" alt="Alleria" onclick="showInfo(`🏹 <strong>Alleria Windrunner</strong><br><br>
      Renowned ranger-general of Silvermoon and the first mortal to embrace the Void without succumbing to it. Alleria is both protector and harbinger, fighting with bow and shadow alike.`)">
  </map>

  <div id="info">Click a hero above to discover their story.</div>

  <script>
    function showInfo(text) {
      const infoBox = document.getElementById("info");
      infoBox.innerHTML = text;
      infoBox.classList.add("show");
    }
  </script>

<!-- === Footer=== -->

<footer class="site-footer" id="support">
    <div class="top-links">
	<a href="https://careers.blizzard.com/global/en" target="_blank">Careers</a>
        <a href="https://www.blizzard.com/en-us/company/about/" target="_blank">ABOUT</a>
        <a href="https://us.support.blizzard.com/en/" target="_blank">Support</a>
        <a href="https://www.blizzard.com/en-us/company/contact" target="_blank">Contact Us</a>
        <a href="https://blizzard.gamespress.com/" target="_blank">Press</a>
        <a href="https://develop.battle.net/" target="_blank">API</a>
       
    </div>

    <div class="social-icons">
  <a href="https://www.facebook.com/Warcraft" target="_blank">
    <img src="icons8-facebook-50.png" alt="Facebook" />
  </a>
  <a href="https://www.youtube.com/user/WorldofWarcraft" target="_blank">
    <img src="icons8-youtube-50.png" alt="YouTube" />
  </a>
  <a href="https://x.com/warcraft" target="_blank">
    <img src="icons8-x-50 (1).png" alt="X (Twitter)" />
  </a>
  <a href="https://www.instagram.com/warcraft/#" target="_blank">
    <img src="icons8-instagram-logo-50.png" alt="Instagram" />
  </a>
</div>


    <div class="company-info">
        <img src="BLIZZARD.png" alt="Blizzard Logo" class="Blizzard">
        <p>©2025 Blizzard Entertainment, Inc.
            All trademarks referenced herein are the properties of their respective owners.</p>
    </div>

    <div class="bottom-links">
        <a href="https://www.blizzard.com/en-us/privacy"target="_blank">Privacy</a>
        <a href="https://www.blizzard.com/en-us/legal/"target="_blank">Legal</a>
        <a href="https://www.blizzard.com/en-us/legal/29232b30-6ae1-4d74-b1c5-8bd1df9e0b63/terms-of-use-for-blizzards-websites"target="_blank">Terms</a>
        <a href="https://www.blizzard.com/en-us/cookies"target="_blank">Cookie Policy</a>
        <a href="https://www.blizzard.com/en-us/cookies#settings"target="_blank">Cookie Settings</a>
    </div>

   
</footer>

</body>
</html>
