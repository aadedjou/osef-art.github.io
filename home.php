<html>
    <head>
        <title>welcome.</title>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
        <link rel="stylesheet" type="text/css"  href="style.css">
        <link rel="icon"       type="image/png" href="assets/favicons/fav_home.png"/>
    </head>  

    <body>        
        <div class="top-panel">
            <a href="artwork.php">
                <div class=" icon-container artwork">
                    <img src="assets/icons/artwork.png" class="icon">
                </div>
            </a>
            <a href="games.php">
                <div class=" icon-container games">
                    <img src="assets/icons/games.png" class="icon">
                </div>
            </a>

            <div class="spacer"></div>
            <a href="home.php">
                <div class="logo-container">    
                    <div><h1 class="osef">osef</h1></div>
                    <div><h1 class="dot">.</h1></div>
                </div>
            </a>
            <div class="spacer"></div>
            
            <a href="anims.php">
                <div class=" icon-container anims">
                    <img src="assets/icons/anims.png" class="icon">
                </div>
            </a>
            <a href="music.php">
                <div class=" icon-container music">
                    <img src="assets/icons/music.png" class="icon">
                </div>
            </a>
        </div>  

        <div class="title-box">
            <span class="title shadow">welcøme.</span>
            <div>
                <span class="title">welcøme.</span>
            </div>
        </div>

        <div class="flex">
            <div class="spacer"></div>
            <div class="text-content">
                <p>
                   <span class="bright"> glad you got there. </span> feel free to check my 
                   latest works in 
                   <a  href="games.php" class="games-shadow">game developping</a>,
                   <a  href="music.php" class="music-shadow">producing</a>,
                   <a  href="artwork.php" class="artwork-shadow">designing</a> or
                   <a  href="anims.php" class="anims-shadow">animating</a> !
                </p>

                <p>
                    <span class="bright"> hi ! </span><br>
                    my name is <span class="bright">adam</span>, i'm <span class="bright">20</span> and fond of gamedev and graphism.
                </p>
            </div>
            <div class="spacer"></div>
        </div>
        <p id="discord-link" style="visibility: hidden;">osef#7387</p>

        <footer class="footer">
            <div class="line flex">
                <div class="spacer"></div>
                <div class="link-box">
                    <a href="https://github.com/aadedjou" target="blank">
                        <img class="link" src="http://thomas-blondel.fr/img/github-logo.png">
                    </a>
                </div>
                <div class="link-box tooltip" onclick="copy(this)" onmouseout="resetTip(this)">
                    <img class="link" src="https://magenoir.com/img/mage-noir/pictograms/discord-white-icon-13.jpg">
                    <span id="copytip" class="tooltip-text"> Coming soon! <br> <span class="thin">(click to <b>copy</b> my id)</span> </span>
                </div>
                <div class="spacer"></div>
            </div>      
            <div class="line flex">
                <div class="spacer"></div>
                    <span class="signature">
                        osef. <span class="thin">© 2021</span> 
                    </span>
                <div class="spacer"></div>
            </div>        
        </footer>
    </body>
</html>