<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 14.05.17
 * Time: 18:34
 */
/**@var $this yii\web\View*/

use app\assets\MainAsset;

MainAsset::register($this);
$imagePath = Yii::getAlias("@web/images/");
?>
<?php $this->beginPage() ?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>Helios by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <?=\yii\helpers\Html::csrfMetaTags()?>
        <?$this->head()?>
    </head>
    <body class="homepage">
    <?$this->beginBody()?>
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Inner -->
            <div class="inner">
                <header>
                    <h1><a href="/" id="logo">Helios</a></h1>
                    <hr />
                    <p>Another fine freebie by HTML5 UP</p>
                </header>
                <footer>
                    <a href="#banner" class="button circled scrolly">Start</a>
                </footer>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>
                        <a href="#">Dropdown</a>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Magna phasellus</a></li>
                            <li><a href="#">Etiam dolore nisl</a></li>
                            <li>
                                <a href="#">And a submenu &hellip;</a>
                                <ul>
                                    <li><a href="#">Lorem ipsum dolor</a></li>
                                    <li><a href="#">Phasellus consequat</a></li>
                                    <li><a href="#">Magna phasellus</a></li>
                                    <li><a href="#">Etiam dolore nisl</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Veroeros feugiat</a></li>
                        </ul>
                    </li>
                    <li><a href="left-sidebar.html">Left Sidebar</a></li>
                    <li><a href="right-sidebar.html">Right Sidebar</a></li>
                    <li><a href="no-sidebar.html">No Sidebar</a></li>
                </ul>
            </nav>

        </div>

        <!-- Banner -->
        <section id="banner">
            <header>
                <h2>Hi. You're looking at <strong>Helios</strong>.</h2>
                <p>
                    A (free) responsive site template by <a href="http://html5up.net">HTML5 UP</a>.
                    Built on <strong>skel</strong> and released under the <a href="http://html5up.net/license">CCA</a> license.
                </p>
            </header>
        </section>

        <!-- Carousel -->
        <section class="carousel">
            <div class="reel">

                <?php for($i = 0; $i < 10; $i++): ?>
                <article>
                    <a href="#" class="image featured"><img src="<?=$imagePath."pic0".(($i+1)%5?($i+1)%5:5).".jpg"?>" alt="" /></a>
                    <header>
                        <h3><a href="#">Pulvinar sagittis congue</a></h3>
                    </header>
                    <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                </article>
                <?php endfor; ?>

            </div>
        </section>

        <!-- Main -->
        <div class="wrapper style2">

            <article id="main" class="container special">
                <a href="#" class="image featured"><img src="<?=$imagePath."pic06.jpg"?>" alt="" /></a>
                <header>
                    <h2><a href="#">Sed massa imperdiet magnis</a></h2>
                    <p>
                        Sociis aenean eu aenean mollis mollis facilisis primis ornare penatibus aenean. Cursus ac enim
                        pulvinar curabitur morbi convallis. Lectus malesuada sed fermentum dolore amet.
                    </p>
                </header>
                <p>
                    Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
                    posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
                    sit arcu sociis. Nunc fermentum adipiscing tempor cursus nascetur adipiscing adipiscing. Primis aliquam
                    mus lacinia lobortis phasellus suscipit. Fermentum lobortis non tristique ante proin sociis accumsan
                    lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
                    consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
                    interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
                    natoque aenean scelerisque.
                </p>
                <footer>
                    <a href="#" class="button">Continue Reading</a>
                </footer>
            </article>

        </div>

        <!-- Features -->
        <div class="wrapper style1">

            <section id="features" class="container special">
                <header>
                    <h2>Morbi ullamcorper et varius leo lacus</h2>
                    <p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
                </header>
                <div class="row">
                    <article class="4u 12u(mobile) special">
                        <a href="#" class="image featured"><img src="<?=$imagePath."pic07.jpg"?>" alt="" /></a>
                        <header>
                            <h3><a href="#">Gravida aliquam penatibus</a></h3>
                        </header>
                        <p>
                            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                        </p>
                    </article>
                    <article class="4u 12u(mobile) special">
                        <a href="#" class="image featured"><img src="<?=$imagePath."pic08.jpg"?>" alt="" /></a>
                        <header>
                            <h3><a href="#">Sed quis rhoncus placerat</a></h3>
                        </header>
                        <p>
                            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                        </p>
                    </article>
                    <article class="4u 12u(mobile) special">
                        <a href="#" class="image featured"><img src="<?=$imagePath."pic09.jpg"?>" alt="" /></a>
                        <header>
                            <h3><a href="#">Magna laoreet et aliquam</a></h3>
                        </header>
                        <p>
                            Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                            porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer interdum.
                        </p>
                    </article>
                </div>
            </section>

        </div>

        <!-- Footer -->
        <div id="footer">
            <div class="container">
                <div class="row">

                    <!-- Tweets -->
                    <section class="4u 12u(mobile)">
                        <header>
                            <h2 class="icon fa-twitter circled"><span class="label">Tweets</span></h2>
                        </header>
                        <ul class="divided">
                            <li>
                                <article class="tweet">
                                    Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
                                    <span class="timestamp">5 minutes ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Hendrerit rutrum quisque.
                                    <span class="timestamp">30 minutes ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
                                    <span class="timestamp">3 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="tweet">
                                    Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
                                    <span class="timestamp">5 hours ago</span>
                                </article>
                            </li>
                        </ul>
                    </section>

                    <!-- Posts -->
                    <section class="4u 12u(mobile)">
                        <header>
                            <h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
                        </header>
                        <ul class="divided">
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Nisl fermentum integer</a></h3>
                                    </header>
                                    <span class="timestamp">3 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Phasellus portitor lorem</a></h3>
                                    </header>
                                    <span class="timestamp">6 hours ago</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Magna tempus consequat</a></h3>
                                    </header>
                                    <span class="timestamp">Yesterday</span>
                                </article>
                            </li>
                            <li>
                                <article class="post stub">
                                    <header>
                                        <h3><a href="#">Feugiat lorem ipsum</a></h3>
                                    </header>
                                    <span class="timestamp">2 days ago</span>
                                </article>
                            </li>
                        </ul>
                    </section>

                    <!-- Photos -->
                    <section class="4u 12u(mobile)">
                        <header>
                            <h2 class="icon fa-camera circled"><span class="label">Photos</span></h2>
                        </header>
                        <div class="row 25%">
                            <div class="6u">
                                <a href="#" class="image fit"><img src="<?=$imagePath."pic10.jpg"?>" alt="" /></a>
                            </div>
                            <div class="6u$">
                                <a href="#" class="image fit"><img src="<?=$imagePath."pic11.jpg"?>" alt="" /></a>
                            </div>
                            <div class="6u">
                                <a href="#" class="image fit"><img src="<?=$imagePath."pic12.jpg"?>" alt="" /></a>
                            </div>
                            <div class="6u$">
                                <a href="#" class="image fit"><img src="<?=$imagePath."pic13.jpg"?>" alt="" /></a>
                            </div>
                            <div class="6u">
                                <a href="#" class="image fit"><img src="<?=$imagePath."pic14.jpg"?>" alt="" /></a>
                            </div>
                            <div class="6u$">
                                <a href="#" class="image fit"><img src="<?=$imagePath."pic15.jpg"?>" alt="" /></a>
                            </div>
                        </div>
                    </section>

                </div>
                <hr />
                <div class="row">
                    <div class="12u">

                        <!-- Contact -->
                        <section class="contact">
                            <header>
                                <h3>Nisl turpis nascetur interdum?</h3>
                            </header>
                            <p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
                            <ul class="icons">
                                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                                <li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
                            </ul>
                        </section>

                        <!-- Copyright -->
                        <div class="copyright">
                            <ul class="menu">
                                <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->

    <?$this->endBody()?>
    </body>
    </html>
<?$this->endPage()?>