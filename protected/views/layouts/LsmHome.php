<?php Yii::app()->bootstrap->register(); ?>
<?php /* @var $this Controller */
$page=0;
$admin="Module.widgets.ModuleZoneWidget";
if (isset($_GET['pid'])) {
    $page=$_GET['pid'];
}
if (isset($_GET['admin'])) {
    $admin="Module.widgets.ModuleBoxWidget";
}?>
        <?php
        /* @var $this SiteController */

        $this->pageTitle=Yii::app()->name;
        //  $this->widget($page->PageKeywords);

        ?>




    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 home"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 home"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9 home"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" class="home"> <!--<![endif]-->
<html class=" js flexbox flexboxlegacy canvas canvastext webgl touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><!--<![endif]--><head>
    <meta charset="utf-8">
    <title>LSM</title>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="LSM/Content/font.css" type="text/css">
    <link href="LSM/Content/site.css" rel="stylesheet">

    <!--[if IE 8]>
    <script src="LSM/Scripts/libs/respond.min.js" type="text/javascript"></script>
    <!--<![endif]-->
    <script src="LSM/Scripts/modernizr-2.6.2.js"></script>

</head>
<body class="home" style="zoom: 1;">
<div class="orientation">
    <div class="device">
    </div>
    <div class="message">
        <h1>LSM.COM</h1>
        <p>The site is best viewed<br>on a tablet device or<br>desktop computer</p>
    </div>
    <div class="address">
        <p>1212 Banks NW <br>Washington, DC 20007 <br>Tel +1 202 295 4800</p>
    </div>
</div>
<div>
    <header class="header" style="height: 60px; top: 0px; overflow: hidden;">
        <h1 class="logo">
            <a href="/">
                <img src="LSM/Images/common/lehman-smith-mcLeish-logo.png" alt="Lehman Smith McLeish" width="68" height="29">
            </a>
        </h1>
        <nav class="nav" role="navigation">
            <ul>
                <li class="projects li-parent" data-height="222">
                    <a class="first" href="#" onclick="return false;">Projects</a>
                    <ul class="sub-nav" style="opacity: 0.01; display: block; height: 7px;">
                        <!-- <li><a href="/case-studies/">Show All</a></li> -->
                        <li><a href="/case-studies/62-buckingham-gate/#/overview/1">62 Buckingham Gate</a></li>
                        <li><a href="/case-studies/gannett-usa-today/#/overview/1">Gannett / USA Today</a></li>
                        <!-- 	          				<li><a href="/case-studies/brookfield/#/overview/1">Brookfield</a></li> -->
                        <li><a href="/case-studies/general-dynamics/#/overview/1">General Dynamics</a></li>
                        <li><a href="/case-studies/gulfstream/#/overview/1">Gulfstream</a></li>
                        <li><a href="/case-studies/k-and-l-gates/#/overview/1">K&amp;L Gates</a></li>
                        <li><a href="/case-studies/tishman-speyer/#/overview/1">Tishman Speyer</a></li>
                    </ul>
                </li>
                <li class="collaborations li-parent" data-height="222">
                    <a href="/home/collaborations/">Collaborations</a>
                    <ul class="sub-nav" style="opacity: 0.01; display: block; height: 7px;">
                        <li><a href="/home/collaborations/#/art/1">Art</a></li>
                        <li><a href="/home/collaborations/#/buildings/1">Buildings</a></li>
                        <li><a href="/home/collaborations/#/furniture/1">Furniture</a></li>
                        <!-- 	          				<li><a href="/home/collaborations/#/knoll-furniture/1">Knoll Furniture</a></li> -->
                        <li><a href="/home/collaborations/#/lighting/1">Lighting</a></li>
                        <!-- <li><a href="/home/collaborations/#/experience/1">Experience</a></li> -->
                        <li><a href="/home/collaborations/#/workspace/1">Workspace</a></li>
                    </ul>
                </li>
                <li class="about li-parent" data-height="222">
                    <a href="/home/about/">About</a>
                    <ul class="sub-nav" style="opacity: 0.01; display: block; height: 7px;">
                        <li><a href="/home/about/#/the-studio/1">LSM Studio</a></li>
                        <li><a href="/home/about/#/approach/1">Approach</a></li>
                        <li><a href="/home/about/#/clients/1">Clients</a></li>
                        <li><a href="/home/about/#/awards-and-honors/1">Awards &amp; Honors</a></li>
                        <li><a href="/home/about/#/publications/1">Publications</a></li>
                        <li><a href="/home/about/#/news/1">News</a></li>
                    </ul>
                </li>
                <li class="contact li-parent" data-height="454">
                    <a href="/home/contact">Contact</a>
                    <div class="sub-nav contact-info-box" style="opacity: 0.01; display: block; height: 7px;">
                        <p class="address">
                            <a href="/home/contact">
                                LSM<br>
                                <span>1212 Banks Street NW<br>
                                Washington, DC 20007
                                </span>
                            </a>
                        </p>
                        <p>
                            TEL<br>
                            <span>+1 (202) 295-4800</span>
                        </p>
                        <p>
                            EMAIL<br>
                            <a class="contact-link" href="mailto:info@lsm.com">info@lsm.com</a>
                        </p>
                        <p>
                            BUSINESS ENQUIRIES<br>
                            <a class="contact-link" href="mailto:marketing@lsm.com">marketing@lsm.com</a>
                        </p>
                        <p>
                            CAREER OPPORTUNITIES<br>
                            <a class="contact-link" href="mailto:careers@lsm.com">careers@lsm.com</a>
                        </p>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div class="main" role="main">

        <div class="lsm" style="display: none;">
        </div>
        <div class="aia" style="display: none;">
        </div>
        <div class="img-viewer" style="height: 667px;">
            <button class="arrow arrow-left" style="left: 0px;"></button>
            <div class="img-scroller">


                <div class="aia-viewer" style="height: 667px; width: 1349px; left: -1349px;"></div>
                <section id="home-1" style="height: 667px; left: 0px;">
                    <div class="row" data-count="8" style="width: 10792px; left: -4047px;">
                        <div class="slide" style="width: 1349px;">
                            <div class="img" data-url="LSM/images/home/Home_6.jpg" style="width: 1349px; background-image: url(LSM/images/home/Home_6.jpg);"></div>
                        </div>
                        <div class="slide" style="width: 1349px;">
                            <div class="img" data-url="LSM/images/home/Home_4.jpg" style="width: 1349px; background-image: url(LSM/images/home/Home_4.jpg);"></div>
                        </div>
                        <div class="slide" style="width: 1349px;">
                            <div class="img" data-url="LSM/images/home/Home_5.jpg" style="width: 1349px; background-image: url(LSM/images/home/Home_5.jpg);"></div>
                        </div>
                        <div class="slide current" style="width: 1349px;">
                            <div class="img" data-url="LSM/images/home/Home_2.jpg" style="width: 1349px; background-image: url(LSM/images/home/Home_2.jpg);"></div>
                        </div>
                        <div class="slide" style="width: 1349px;">
                            <div class="img" data-url="LSM/images/home/Home_1.jpg" style="width: 1349px; background-image: url(LSM/images/home/Home_1.jpg);"></div>
                        </div>
                        <div class="slide" style="width: 1349px;">
                            <div class="img" data-url="LSM/images/home/Home_3.jpg" style="width: 1349px; background-image: url(LSM/images/home/Home_3.jpg);"></div>
                        </div>
                        <!-- repeated element -->
                        <div class="slide" style="width: 1349px;">
                            <div class="img" data-url="LSM/images/home/Home_6.jpg" style="width: 1349px; background-image: url(LSM/images/home/Home_6.jpg);"></div>
                        </div>
                    </div>
                </section>




                <div class="info wide" style="width: 604px; height: 172px;">
                    <div style="position: absolute; visibility: visible; bottom: 0px; display: none;">
                        <h2>62 BUCKINGHAM GATE <br>VICTORIA, LONDON</h2>
                        <!-- <p>How do you design a standout public space that also assists natural circulation? <a href="/case-studies/62-buckingham-gate/#/overview/1">View case study</a> -->
                        <a href="/case-studies/62-buckingham-gate/#/overview/1">View Case Study</a>
                    </div>
                    <div style="position: absolute; visibility: visible; bottom: 0px; display: none;">
                        <h2>GANNETT/USA TODAY HEADQUARTERS <br>WASHINGTON, DC</h2>
                        <!-- <p>How do you create a workplace that promotes collaboration between two global companies while allowing them to advance in their own way? <a href="/case-studies/gannett-usa-today/#/overview/1">View case study</a> -->
                        <a href="/case-studies/gannett-usa-today/#/overview/1">View Case Study</a>
                    </div>
                    <div style="position: absolute; visibility: visible; bottom: 0px; display: none;">
                        <h2>GENERAL DYNAMICS HEADQUARTERS <br>WASHINGTON, DC</h2>
                        <!-- <p>How can you craft an office that nurtures collaboration in a vast hollow space? <a href="/case-studies/general-dynamics/#/overview/1">View case study</a> -->
                        <a href="/case-studies/general-dynamics/#/overview/1">View Case Study</a>
                    </div>
                    <div style="position: absolute; visibility: visible; bottom: 0px; display: block;">
                        <h2>GULFSTREAM SALES AND DESIGN CENTER <br>MAYFAIR, LONDON</h2>
                        <!-- <p>What is the best way to market and showcase a business jet in London when the jet itself is over 4000 miles away in Savannah, Georgia? <a href="/case-studies/gulfstream/#/overview/1">View case study</a> -->
                        <a href="/case-studies/gulfstream/#/overview/1">View Case Study</a>
                    </div>
                    <div style="position: absolute; visibility: visible; bottom: 0px; display: none;">
                        <h2>K&amp;L GATES <br>ONE NEW CHANGE, LONDON</h2>
                        <!-- <p>Can you create incredible interiors while the building is still under development? <a href="/case-studies/k-and-l-gates/#/overview/1">View case study</a> -->
                        <a href="/case-studies/k-and-l-gates/#/overview/1">View Case Study</a>
                    </div>

                    <div style="position: absolute; visibility: visible; bottom: 0px; display: none;">
                        <h2>TISHMAN SPEYER <br>ROCKEFELLER CENTER, NEW YORK</h2>
                        <!-- <p>How do you create an effective, modern space within one of the world’s most iconic, historic sites? <a href="/case-studies/tishman-speyer/#/overview/1">View case study</a> -->
                        <a href="/case-studies/tishman-speyer/#/overview/1">View Case Study</a>
                    </div>
                    <div style="position: absolute; visibility: visible; bottom: 0px; display: none;">
                        <h2>62 BUCKINGHAM GATE <br>VICTORIA, LONDON</h2>
                        <!-- <p>How do you design a standout public space that also assists natural circulation? <a href="/case-studies/62-buckingham-gate/#/overview/1">View case study</a> -->
                        <a href="/case-studies/62-buckingham-gate/#/overview/1">View Case Study</a>
                    </div>

                </div>

                <div class="actions hide">
                    <nav class="nav-section">
                        <h1>Home:</h1>
                        <ul>
                            <li><a href="#/home/1" class="">Home 1</a></li>
                            <li><a href="#/home/2" class="">Home 2</a></li>
                            <li><a href="#/home/3" class="">Home 3</a></li>
                            <li><a href="#/home/4" class="">Home 4</a></li>
                            <li><a href="#/home/5" class="">Home 5</a></li>
                            <li><a href="#/home/6" class="current">Home 6</a></li>
                        </ul>
                    </nav>

                </div>

            </div>
        </div>
        <button class="arrow arrow-right" style="right: 0px;"></button>

    </div>
    <footer class="footer" style="bottom: 0px;">
        <small class="copyright">
            ©LSM 2014
        </small>
        <small>
            <a href="http://www.madebysix.com" target="_blank">Site design by Six</a>
        </small>
    </footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="LSM/Scripts/libs/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="LSM/Scripts/libs/jquery.hashchange.min.js" type="text/javascript"></script>
<script src="LSM/Scripts/libs/jquery.touchSwipe.min.js" type="text/javascript"></script>
<script src="LSM/Scripts/main.js" type="text/javascript"></script>
<script type="text/javascript">
    var siteUrl = 'http://www.lsm.com/';
</script>
<script src="LSM/Scripts/jquery.cookie.js" type="text/javascript"></script>

<script src="LSM/Scripts/case-study.js?v=0.3" type="text/javascript"></script>



</body></html>

