<html>
    <head>
        <title>welcome.</title>
        <link rel="icon"       type="image/png" href="assets/favicons/fav_home.png"/>
    </head>  

    <body>        
        <?php include("top-panel.php"); ?>

        <div class="title-box">
            <span class="title-shadow-home">welcøme.</span>
            <div>
                <span class="title">welcøme.</span>
            </div>
            <svg class="wave"
                xmlns="http://www.w3.org/2000/svg"
                width="80px" height="60px" viewBox="10 0 65 60">
                
                <path id="wave"
                        fill="none"
                        stroke="rgba(245, 235, 255, 0.25)"
                        stroke-linecap="round"
                        stroke-width="7">
                    <script>
                        buildWave(60, 60);
                    </script>
                </path>
            </svg>
            <svg class="wheel"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="100px" height="100px" >
                <circle fill="none"
                        stroke="rgba(245, 235, 255, 0.15)"
                        stroke-linecap="round"
                        stroke-width="2"
                        stroke-miterlimit="4"
                        stroke-dasharray="12,12"
                        cx="50" cy="50" r="40">
                    <animateTransform 
                        attributeName="transform"
                        attributeType="XML"
                        type="rotate"
                        dur="30s"
                        from="0 50 50"
                        to="360 50 50"
                        repeatCount="indefinite" />
                </circle>
            </svg>
        </div>

        <div class="flex">
            <div class="spacer"></div>
            <div class="text-content">
                <p>
                <span class="bright"> Glad you got there. </span> 
                Feel free to check my latest works in 
                <a href="games.php" class="games-link">game developping</a>,
                <a href="artwork.php" class="art-link">designing</a>,
                <a href="music.php" class="music-link">producing</a> or
                <a href="anims.php" class="anims-link">animating</a> !
                </p>
            </div>
            <div class="spacer"></div>
        </div>

        <div style="height: 50px;"></div>

        <div class="game-article">
            <div class="thumbnail">
                <div id="ministick-carousel">
                    <figure id="ministick-slider">
                        <img src="assets/thumbnails/ministick-clip-1.gif">
                        <img src="assets/thumbnails/ministick-clip-2.gif">
                        <img src="assets/thumbnails/ministick-clip-3.gif">
                    </figure>
                    <script>slide("ministick-slider", 5, 0.75)</script>
                </div> 
            </div>
            <div>
                <div class="new-stamp" >
                    <div class="spin"></div>
                    <div class="spin2"></div> 
                    <span>NEW</span>
                </div>
            </div>
            <div class="article-content">
                <h2>my latest game: <span class="shadow">ministick</span></h2>
                
                <div class="date">26/03/2021</div>
                
                <p>
                    One of the projects I'm the most proud of. <br>
                    Chain <span class="bright">combos</span>  and smash innocent guys in this 
                    <span class="bright">colorful</span> and <span class="bright">addicting</span> beat-them all. <br>
                    <span class="bright">How far</span>  can you get ? 💨
                </p>
                
                <a href="artwork.php">
                    <div class="game-button">
                        <span> PLAY !</span>
                        <div class="inner-btn">
                            <img src="assets/icons/play-icon.png">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="flex line">
            <div>
                <div class="art-panel">
                    <h2 class="shadow"> graphism </h2>
                    <div id="art-carousel">
                        <figure id="art-slider">
                            <img src="assets/wallpapers/canyon.jpg">
                            <img src="assets/wallpapers/mountains2.jpg">
                            <img src="assets/wallpapers/smoke.jpg">
                            <img src="assets/wallpapers/padami1.png">
                        </figure>
                        <script>slide("art-slider", 2.5, 1.25)</script>
                    </div> 
                    <div id="art-dots">
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <a href="artwork.php">
                        <div class="art-button">
                            <span> PEEK </span>
                            <div class="inner-btn">
                                <img src="assets/icons/eye-icon.png">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="vertical-spacer"></div>

            <div class="game-article">
                <div class="article-content">
                    <div class="featured">FEATURED <div class="glide"></div></div>
                    <h2>
                        my collab with 
                        <a href="http://ecgs.fr/" target="blank" class="shadow"> @eChoGames</a> ! 
                    </h2>
                    <div class="date">20/03/2021</div>

                    <p>
                        Recently I've been drawing <span class="bright">sprites</span>  for a game brought by <span class="bright">@eCho</span> on the 
                        occasion of the <a href="https://gamejam.com/jam/scorejam12/submissions" target="blank" class="bright">ScoreSpace Jam #12</a>. <br>
                    </p>
                    <p class="read-more">
                        Read more...
                    </p>

                    <img class="thumbnail" src="assets/thumbnails/potsdealer.png">
                    <p style="display: none;">
                        The jam's theme was <span class="bright">"COMBINING"</span>, so we've crafted a cute little game absed on <span class="bright">merging</span> and <span class="bright">selling</span> potions in town ! <br>
                        We reached the <span class="bright">4th position</span>  (among 94 participants !) and we keep polishing the game to make it something <span class="bright">bigger</span>. 🧐 <br>
                        We hope you'll enjoy playing it as we enjoyed cooking it.
                    </p>

                    <div class="flex" style="margin-top: 15px;">
                        <div class="flex spacer center">
                            <a target="blank" href="https://gamejam.com/game/potsdealer">
                                <div class=" game-button">
                                    <span> PLAY !</span>
                                    <div class="inner-btn">
                                        <img src="assets/icons/play-icon.png">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="spacer"></div>
                        <div class="spacer follow-box">
                            <u> Follow @eCho ! </u>  

                            <div class="links">
                                <div class="link-box">
                                    <a target="blank" href="https://ecgs.fr/"><img src="assets/icons/web-icon.png" class="link"></a>
                                    WEBSITE
                                </div>
                                <div class="link-box">
                                    <a target="blank" href="https://twitter.com/eChoGames_"><img src="assets/icons/twitter-icon.png" class="link"></a>
                                    TWITTER
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="game-article">
            <div class="article-content">
                <h2>working on... <span class="shadow">ministick 2</span> ! </h2>
                <div class="date">01/04/2021</div>
                
                <p>
                    Since the game had a lot of success among my friends,
                    I have started to upgrade it to a <span class="bright">next level</span>. <br>
                    I'm planning to make the game more <span class="bright">clever</span> and implement
                    more precise <span class="bright">fighting</span>/<span class="bright">combo</span> mecanics. <br>
                    I've already <span class="bright">smoothen</span> the animation and added a bunch of
                    <span class="bright">new moves</span> ! <br>
                    Stay tuned 👀
                </p>
            </div>

            <div class="thumbnail">
                <div id="ministick2-carousel">
                    <figure id="ministick2-slider">
                        <img src="assets/thumbnails/ministick2-clip-1.gif">
                        <img src="assets/thumbnails/ministick2-clip-2.gif">
                        <img src="assets/thumbnails/ministick2-clip-3.gif">
                    </figure>
                    <script>slide("ministick2-slider", 4, 0.5)</script>
                </div> 
            </div>
        </div>

        <?php include("footer.php"); ?>
    </body>

</html>