<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-5">
    <div class="navbar navbar-default yamm">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse-2"><span
                class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="#">All Departments</a>
                <div class="left-menu-custom">
                    <ul class="list-menu">
                        <li>
                            <span class="icon-left"><i class="far fa-star"></i></span><a href="#"
                                class="menu-item">Destop</a>
                        </li>
                        <li>
                            <p><strong>></strong></p>
                            <span class="icon-left"><i class="fas fa-mobile-alt"></i></span><a href="#"
                                class="menu-item">Lamps</a>
                            <div class="menu-to-right">
                                <div class="row">
                                    <div class="br"></div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="name">Product Types</li>
                                            <li><a class="cool-link" href="#">Smartphones</a></li>
                                            <li><a class="cool-link" href="#">Android Phones</a></li>
                                            <li><a class="cool-link" href="#">iPhones</a></li>
                                            <li><a class="cool-link" href="#">Windows Mobiles</a></li>
                                            <li><a class="cool-link" href="#">Refurbished Mobiles</a></li>
                                            <li><a class="cool-link" href="#">Pre Owned Mobiles</a></li>
                                            <br>
                                            <br>
                                            <li><a class="limit">Limited Offer up to <strong>50%</strong> off</a></li>
                                            <li><a class="shop" href="#">Shop now</a></li>
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="name">Mobile Accessories</li>
                                            <li><a class="cool-link" href="#">All Mobile Accessories</a></li>
                                            <li><a class="cool-link" href="#">Cases & Covers</a></li>
                                            <li><a class="cool-link" href="#">Screen Protectors</a></li>
                                            <li><a class="cool-link" href="#">Power Banks</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>

                            <p><strong>></strong></p>
                            <span class="icon-left"><i class="fas fa-desktop"></i></span><a href="#"
                                class="menu-item">MP3 Player</a>
                            <div class="computers">
                                <div class="row">
                                    <div class="br"></div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="name">Computers & Accessories</li>
                                            <li><a class="cool-link" href="#">All Computers</a></li>
                                            <li><a class="cool-link" href="#">Hard Drives</a></li>
                                            <li><a class="cool-link" href="#">Memory Cards</a></li>
                                            <li><a class="cool-link" href="#">Software</a></li>
                                            <li><a class="cool-link" href="#">Network Systems</a></li>
                                            <li><a class="cool-link" href="#">Components</a></li>
                                            <br>
                                            <br>
                                            <li><a class="limit">Limited Offer up to <strong>50%</strong> off</a></li>
                                            <li><a class="shop" href="#">Shop now</a></li>
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="name">Office & Stationery</li>
                                            <li><a class="cool-link" href="#">Accessories</a></li>
                                            <li><a class="cool-link" href="#">Pens & Writing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="icon-left"><i class="far fa-lightbulb"></i></span><a href="#"
                                class="menu-item">Componant</a>
                        </li>
                        <li>
                            <span class="icon-left"><i class="fas fa-camera"></i></span><a href="#"
                                class="menu-item">Cameras & Video</a>
                        </li>
                        <li>
                            <p><strong>></strong></p>
                            <span class="icon-left"><i class="fas fa-adjust"></i></span><a href="#"
                                class="menu-item">Tablet</a>
                            <div class="headphones">
                                <div class="row">
                                    <div class="br"></div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="name">Computers & Accessories</li>
                                            <li><a class="cool-link" href="#">All Computers</a></li>
                                            <li><a class="cool-link" href="#">Hard Drives</a></li>
                                            <li><a class="cool-link" href="#">Memory Cards</a></li>
                                            <li><a class="cool-link" href="#">Software</a></li>
                                            <li><a class="cool-link" href="#">Network Systems</a></li>
                                            <li><a class="cool-link" href="#">Components</a></li>
                                            <br>
                                            <br>
                                            <li><a class="limit">Limited Offer up to <strong>50%</strong> off</a></li>
                                            <li><a class="shop" href="#">Shop now</a></li>
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="name">Office & Stationery</li>
                                            <li><a class="cool-link" href="#">Accessories</a></li>
                                            <li><a class="cool-link" href="#">Pens & Writing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="icon-left"><i class="fas fa-book"></i></span><a href="#"
                                class="menu-item">Software</a>
                        </li>
                        <li>
                            <span class="icon-left"><i class="fas fa-print"></i></span><a href="#"
                                class="menu-item">Phone</a>
                        </li>
                        <li>
                            <p><strong>></strong></p>
                            <span class="icon-left"><i class="fas fa-mobile-alt"></i></span><a href="#"
                                class="menu-item">Cameras</a>
                            <div class="laptops">
                                <div class="row">
                                    <div class="br"></div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="name">Computers & Accessories</li>
                                            <li><a class="cool-link" href="#">All Computers</a></li>
                                            <li><a class="cool-link" href="#">Hard Drives</a></li>
                                            <li><a class="cool-link" href="#">Memory Cards</a></li>
                                            <li><a class="cool-link" href="#">Software</a></li>
                                            <li><a class="cool-link" href="#">Network Systems</a></li>
                                            <li><a class="cool-link" href="#">Components</a></li>
                                            <br>
                                            <br>
                                            <li><a class="limit">Limited Offer up to <strong>50%</strong> off</a></li>
                                            <li><a class="shop" href="#">Shop now</a></li>
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="name">Office & Stationery</li>
                                            <li><a class="cool-link" href="#">Accessories</a></li>
                                            <li><a class="cool-link" href="#">Pens & Writing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <p><strong>></strong></p>
                            <span class="icon-left"><i class="fas fa-power-off"></i></span><a href="#"
                                class="menu-item">More</a>
                            <div class="home">
                                <div class="row">
                                    <div class="br"></div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="name">Computers & Accessories</li>
                                            <li><a class="cool-link" href="#">All Computers</a></li>
                                            <li><a class="cool-link" href="#">Hard Drives</a></li>
                                            <li><a class="cool-link" href="#">Memory Cards</a></li>
                                            <li><a class="cool-link" href="#">Software</a></li>
                                            <li><a class="cool-link" href="#">Network Systems</a></li>
                                            <li><a class="cool-link" href="#">Components</a></li>
                                            <br>
                                            <br>
                                            <li><a class="limit">Limited Offer up to <strong>50%</strong> off</a></li>
                                            <li><a class="shop" href="#">Shop now</a></li>
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="name">Office & Stationery</li>
                                            <li><a class="cool-link" href="#">Accessories</a></li>
                                            <li><a class="cool-link" href="#">Pens & Writing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <a class="navbar-brand" id="nav-brand-2" href="#"><img class="img-responsive" src="images/logo.png"
                    style="height: 26px;"></a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="adudu-123">
                    <img src="images/1.jpg" alt="img1" class="adudu-myimg">
                    <h4>Nguyen Nguyen Hoa</h4>
                    <p>Nguyen Nguyen Hoa</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="adudu-123">
                    <img src="images/1.jpg" alt="img1" class="adudu-myimg">
                    <div class="adu">
                        <h4>Nguyen Nguyen Hoa</h4>
                        <p>Nguyen Nguyen Hoa</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="adudu-123">
                    <img src="images/3.jpg" alt="img1" class="adudu-myimg">
                    <h4>Nguyen Nguyen Hoa</h4>
                    <p>Nguyen Nguyen Hoa</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="adudu-123">
                    <img src="images/2.jpg" alt="img1" class="adudu-myimg">
                    <h4>Nguyen Nguyen Hoa</h4>
                    <p>Nguyen Nguyen Hoa</p>
                </div>
            </div>
            <div class="col-md-4 imgbgr1">
                <div class="adudu-conten">
                    <h5 class="adudu-h3">Up to 40%</h5>
                    <h3 class="adudu-h4">New AriVal 2019</h3>
                    <h5 class="adudu-h3">Shopnow -></h5>
                </div>
            </div>
            <div class="col-md-4 imgbgr2">
                <div class="adudu-conten">
                    <h5 class="adudu-h3">Up to 40%</h5>
                    <h3 class="adudu-h4">New AriVal 2019</h3>
                    <h5 class="adudu-h3">Shopnow -></h5>
                </div>
            </div>
            <div class="col-md-4 imgbgr3">
                <div class="adudu-conten">
                    <h5 class="adudu-h3">Up to 40%</h5>
                    <h3 class="adudu-h4">New AriVal 2019</h3>
                    <h5 class="adudu-h3">Shopnow -></h5>
                </div>
            </div>
        </div>
    </div>
</div>