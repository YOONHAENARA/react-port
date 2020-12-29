    <header id="header">
        <div class="container">
            <div class="header_top">
                <h1 class="logo"><a href="http://haenara.dothome.co.kr/port/main/index4.html">Portfolio</a></h1>
            </div>
            <nav class="nav">
                <div class="subMenu">
                    <div class="hamburger" id="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <ul class="navList">
                    <div class="row">
                        <li><a href="http://haenara.dothome.co.kr/port/main/index4.html#section3">About</a></li>
                        <li><a href="http://haenara.dothome.co.kr/port/main/index4.html#section4">Site</a></li>
                        <li><a href="http://haenara.dothome.co.kr/port/main/index4.html#section5">Script</a></li>
                        <li><a href="http://haenara.dothome.co.kr/port/main/index4.html#section6">Animation</a></li>
                        <li><a href="http://haenara.dothome.co.kr/port/php/board/listBoard.php">Notice</a></li>
                        <li><a href="http://haenara.dothome.co.kr/port/main/index4.html#section7">Contact</a></li>
                        <li><a href="https://haenaray.github.io/reactPort/#/" target="_blank">React</a></li>
                    </div>
                </ul>
                <ul class="AccountCont">
                    <?php if(!isset($_SESSION['memberID'])) { ?>
                    <li class="usePhp"><a href="http://haenara.dothome.co.kr/port/php/sign/logIn.php">Login</a></li>
                    <?php }else { ?>
                    <li>Welcome,<a href="#" class="memberName"><?=$_SESSION['youName']?></a>!</li>
                    <li class="logout_txt"><a href="http://haenara.dothome.co.kr/port/php/sign/logOut.php">Logout</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
        <div class="hammenu_wrap">
            <div class="wrap">
                <ul>
                    <li><a href="http://haenara.dothome.co.kr/port/main/index4.html#section3" class="nav_link">about</a></li>
                    <li><a href="http://haenara.dothome.co.kr/port/main/index4.html#section4" class="nav_link">site</a></li>
                    <li><a href="http://haenara.dothome.co.kr/port/main/index4.html#section5" class="nav_link">script</a></li>
                    <li><a href="http://haenara.dothome.co.kr/port/main/index4.html#section6" class="nav_link">animation</a></li>
                    <li><a href="http://haenara.dothome.co.kr/port/php/board/listBoard.php" class="nav_link">notice</a></li>
                    <li><a href="http://haenara.dothome.co.kr/port/main/index4.html#section7" class="nav_link">contact</a></li>
                    <li><a href="https://haenaray.github.io/reactPort/#/">React</a></li>
                </ul>
            </div>
        </div>
    </header>
