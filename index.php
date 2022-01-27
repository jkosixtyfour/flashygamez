<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="core.css">
    <title>Homepage - </title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<?php include 'meta.php'; ?>
<meta name="theme-color" content="#FF0000">

<!-- Include this to make the og:image larger -->
<meta name="twitter:card" content="summary_large_image">
</head>

<body>
    <!-- begin page -->
    <?php include 'masthead.php'; ?>
        <div id="content-container">
            <!-- begin sidebar -->
            <?php include 'sidebar.php'; ?>
                </div>
             <!--   <div class="window">
                    <div class="window-titlebar">
                        <div class="window-titlebar-text">
                            <span>Gallery</span> <a href="javascript:alert('how about NO')" class="nav-more"><span>(more...)</span></a>
                            <div class="gallery-date">
                                <p>Jan 25, 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="window-content">
                        <div class="mini-gallery">
                            <div class="nav-image">
                                <img src="img/amog.png" alt="among baka">
                            </div>
                            <div class="nav-title">
                                <span>amogus</span>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
            <!-- end sidebar -->
            <!-- begin content -->
            <div id="content">
                <div class="window">
                    <div class="window-titlebar">
                        <div class="window-titlebar-text">
                            Ultimate Flash Sonic &bull; <a class="window-titlebar-text" href="games/ufs.php">Play</a>
                            <div class="gallery-date">
                                <p>Added: January 27, 2022</p>
                            </div>
                        </div>
                    </div>
                  <!--  <div class="window-content-padding">
                        <span>test</span>
                    </div>-->
                </div>
                <div class="window">
                    <div class="window-titlebar">
                        <div class="window-titlebar-text">
                            Windows RG &bull; <a class="window-titlebar-text" href="games/winrg.php">Play</a>
                            <div class="gallery-date">
                                <p>Added: January 26, 2022</p>
                            </div>
                        </div>
                    </div>
                  <!--  <div class="window-content-padding">
                        <span>test</span>
                    </div>-->
                </div>
            </div>
            <!-- end content -->
        </div>
        <?php include 'footer.php'; ?>
    </div>
    <!-- end page -->
<script>document.title += " flashygamez";</script>
<script>var textArray = [
  "Latest Added Game: Ultimate Flash Sonic",
  "Join our Discord! (link in the footer)",
  "Site under construction!",
  "More games soon...."
];
var randomNumber = Math.floor(Math.random() * textArray.length);
document.getElementById("announce").innerHTML = textArray[randomNumber];</script>
<script>
  fetch('https://thefunny.i7zz.repl.co/')
    .then(response => response.json())
    .then(data => {console.log(data)})
        .then(response => response.json())
            .then(data => {console.log(data)})
  </script>
</body>
</html>