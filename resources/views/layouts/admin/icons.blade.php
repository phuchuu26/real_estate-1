<!-- light-blue - v4.0.1 - 2018-10-31 -->

<!DOCTYPE html>
<html>
<head>
    <title>Light Blue - Responsive Admin Dashboard Template</title>

        <link href="css/application.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body>
    <div class="logo">
        <h4><a href="index.html">Light <strong>Blue</strong></a></h4>
    </div>
        <nav id="sidebar" class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <li class="">
                    <a href="index.html"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
                </li>
                <li class="">
                    <a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                </li>
                <li class="">
                    <a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
                </li>
                <li class="">
                    <a href="notifications.html"><i class="fa fa-bell"></i> Notifications</a></li>
                </li>
                <li class="panel ">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#elements-collapse"><i class="fa fa-magic"></i> <span class="name">Elements</span></a>
                    <ul id="elements-collapse" class="panel-collapse collapse ">
                        <li class=""><a href="charts.html">Charts</a></li>
                        <li class="active"><a href="icons.html">Icons</a></li>
                        <li class=""><a href="maps.html" data-no-pjax>Maps</a></li>
                    </ul>
                </li>
            </ul>
        
            <h5 class="sidebar-nav-title">Labels <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>
            <!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->
            <ul class="sidebar-labels">
                <li>
                    <a href="#">
                        <!-- yep, .circle again -->
                        <i class="fa fa-circle text-warning"></i>
                        <span class="label-name">My Recent</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle text-gray"></i>
                        <span class="label-name">Starred</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-circle text-danger"></i>
                        <span class="label-name">Background</span>
                    </a>
                </li>
            </ul>
        
            <h5 class="sidebar-nav-title">Projects</h5>
            <!-- A place for sidebar notifications & alerts -->
            <div class="sidebar-alerts">
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">Sales Report</span> <br>
                    <div class="progress progress-xs mt-xs mb-0">
                        <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>
                    </div>
                    <small>Calculating x-axis bias... 65%</small>
                </div>
                <div class="alert fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                    <span class="text-white fw-semi-bold">Personal Responsibility</span> <br>
                    <div class="progress progress-xs mt-xs mb-0">
                        <div class="progress-bar progress-bar-danger" style="width: 23%"></div>
                    </div>
                    <small>Provide required notes</small>
                </div>
            </div>
        </nav>    <div class="wrap">
        <header class="page-header">
            <div class="navbar">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="Messages" id="messages"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="glyphicon glyphicon-comment"></i>
                        </a>
                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/1.png" alt="">
                                    <div class="details">
                                        <div class="sender">Jane Hew</div>
                                        <div class="text">
                                            Hey, John! How is it going? ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/2.png" alt="">
                                    <div class="details">
                                        <div class="sender">Alies Rumiancaŭ</div>
                                        <div class="text">
                                            I'll definitely buy this template
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                    <img src="img/3.png" alt="">
                                    <div class="details">
                                        <div class="sender">Michał Rumiancaŭ</div>
                                        <div class="text">
                                            Is it really Lore ipsum? Lore ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all messages <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="8 support tickets"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="glyphicon glyphicon-globe"></i>
                            <span class="count">8</span>
                        </a>
                        <ul id="support-menu" class="dropdown-menu support" role="menu">
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                    </div>
                                    <div class="details">
                                        Check out this awesome ticket
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        "What is the best way to get ...
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-success"><i class="fa fa-tag"></i></span>
                                    </div>
                                    <div class="details">
                                        This is just a simple notification
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        12 new orders has arrived today
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="details">
                                        One more thing that just happened
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all tickets <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="hidden-xs">
                        <a href="#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="glyphicon glyphicon-cog"></i>
                        </a>
                    </li>
                    <li class="hidden-xs dropdown">
                        <a href="#" title="Account" id="account"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <img src="img/2.png" alt="">
                                Philip Daineka
                            </li>
                            <li role="presentation">
                                <a href="form_account.html" class="link">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="login.html"><i class="glyphicon glyphicon-off"></i></a></li>
                </ul>
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="form-control search-query" placeholder="Search...">
                </form>
                <div class="notifications pull-right">
                    <div class="alert pull-right">
                        <a href="#" class="close ml-xs" data-dismiss="alert">&times;</a>
                        <i class="fa fa-info-circle mr-xs"></i> Check out Light Blue <a id="notification-link" href="#">settings</a> on the right!
                    </div>
                </div>
            </div>
        </header>        <div class="content container">
        <h2 class="page-title">Icons <small>Large set of built-in icons</small></h2>
        <section class="widget widget-tabs">
            <header>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Glypicons</a></li>
                    <li class=""><a href="#tab2" data-toggle="tab">FA 4.4 <span class="label label-danger mt-n-xs">new</span></a></li>
                    <li class=""><a href="#tab3" data-toggle="tab">Web Application</a></li>
                    <li class=""><a href="#tab4" data-toggle="tab">Spinner</a></li>
                    <li class=""><a href="#tab5" data-toggle="tab">Text Editor</a></li>
                    <li class=""><a href="#tab6" data-toggle="tab">Brand</a></li>
                    <li class=""><a href="#tab7" data-toggle="tab">Other</a></li>
                </ul>
            </header>
            <div id="tabs1c" class="body tab-content">
                <div class="tab-pane active" id="tab1">
                    <h3>Built-in <span class="fw-semi-bold">Glyphicons</span></h3>
                    <div class="row icon-list">
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-asterisk"></span>asterisk</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-plus"></span>plus</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-euro"></span>euro</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-minus"></span>minus</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-cloud"></span>cloud</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-envelope"></span>envelope</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-pencil"></span>pencil</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-glass"></span>glass</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-music"></span>music</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-search"></span>search</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-heart"></span>heart</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-star"></span>star</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-star-empty"></span>star-empty</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-user"></span>user</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-film"></span>film</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-th-large"></span>th-large</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-th"></span>th</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-th-list"></span>th-list</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-ok"></span>ok</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-remove"></span>remove</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-zoom-in"></span>zoom-in</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-zoom-out"></span>zoom-out</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-off"></span>off</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-signal"></span>signal</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-cog"></span>cog</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-trash"></span>trash</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-home"></span>home</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-file"></span>file</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-time"></span>time</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-road"></span>road</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-download-alt"></span>download-alt</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-download"></span>download</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-upload"></span>upload</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-inbox"></span>inbox</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-play-circle"></span>play-circle</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-repeat"></span>repeat</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-refresh"></span>refresh</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-list-alt"></span>list-alt</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-lock"></span>lock</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-flag"></span>flag</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-headphones"></span>headphones</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-volume-off"></span>volume-off</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-volume-down"></span>volume-down</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-volume-up"></span>volume-up</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-qrcode"></span>qrcode</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-barcode"></span>barcode</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-tag"></span>tag</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-tags"></span>tags</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-book"></span>book</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-bookmark"></span>bookmark</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-print"></span>print</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-camera"></span>camera</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-font"></span>font</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-bold"></span>bold</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-italic"></span>italic</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-text-height"></span>text-height</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-text-width"></span>text-width</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-align-left"></span>align-left</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-align-center"></span>align-center</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-align-right"></span>align-right</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-align-justify"></span>align-justify</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-list"></span>list</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-indent-left"></span>indent-left</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-indent-right"></span>indent-right</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-facetime-video"></span>facetime-video</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-picture"></span>picture</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-map-marker"></span>map-marker</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-adjust"></span>adjust</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-tint"></span>tint</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-edit"></span>edit</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-share"></span>share</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-check"></span>check</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-move"></span>move</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-step-backward"></span>step-backward</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-fast-backward"></span>fast-backward</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-backward"></span>backward</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-play"></span>play</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-pause"></span>pause</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-stop"></span>stop</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-forward"></span>forward</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-fast-forward"></span>fast-forward</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-step-forward"></span>step-forward</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-eject"></span>eject</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-chevron-left"></span>chevron-left</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-chevron-right"></span>chevron-right</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-plus-sign"></span>plus-sign</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-minus-sign"></span>minus-sign</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-remove-sign"></span>remove-sign</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-ok-sign"></span>ok-sign</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-question-sign"></span>question-sign</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-info-sign"></span>info-sign</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-screenshot"></span>screenshot</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-remove-circle"></span>remove-circle</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-ok-circle"></span>ok-circle</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-ban-circle"></span>ban-circle</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-arrow-left"></span>arrow-left</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-arrow-right"></span>arrow-right</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-arrow-up"></span>arrow-up</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-arrow-down"></span>arrow-down</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-share-alt"></span>share-alt</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-resize-full"></span>resize-full</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-resize-small"></span>resize-small</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-exclamation-sign"></span>exclamation-sign</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-gift"></span>gift</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-leaf"></span>leaf</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-fire"></span>fire</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-eye-open"></span>eye-open</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-eye-close"></span>eye-close</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-warning-sign"></span>warning-sign</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-plane"></span>plane</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-calendar"></span>calendar</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-random"></span>random</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-comment"></span>comment</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-magnet"></span>magnet</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-chevron-up"></span>chevron-up</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-chevron-down"></span>chevron-down</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-retweet"></span>retweet</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-shopping-cart"></span>shopping-cart</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-folder-close"></span>folder-close</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-folder-open"></span>folder-open</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-resize-vertical"></span>resize-vertical</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-resize-horizontal"></span>resize-horizontal</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-hdd"></span>hdd</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-bullhorn"></span>bullhorn</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-bell"></span>bell</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-certificate"></span>certificate</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-thumbs-up"></span>thumbs-up</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-thumbs-down"></span>thumbs-down</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-hand-right"></span>hand-right</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-hand-left"></span>hand-left</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-hand-up"></span>hand-up</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-hand-down"></span>hand-down</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-circle-arrow-right"></span>circle-arrow-right</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-circle-arrow-left"></span>circle-arrow-left</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-circle-arrow-up"></span>circle-arrow-up</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-circle-arrow-down"></span>circle-arrow-down</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-globe"></span>globe</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-wrench"></span>wrench</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-tasks"></span>tasks</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-filter"></span>filter</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-briefcase"></span>briefcase</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-fullscreen"></span>fullscreen</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-dashboard"></span>dashboard</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-paperclip"></span>paperclip</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-heart-empty"></span>heart-empty</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-link"></span>link</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-phone"></span>phone</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-pushpin"></span>pushpin</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-usd"></span>usd</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-gbp"></span>gbp</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-sort"></span>sort</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-sort-by-alphabet"></span>sort-by-alphabet</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>sort-by-alphabet-alt</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-sort-by-order"></span>sort-by-order</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-sort-by-order-alt"></span>sort-by-order-alt</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-sort-by-attributes"></span>sort-by-attributes</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-sort-by-attributes-alt"></span>sort-by-attributes-alt</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-unchecked"></span>unchecked</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-expand"></span>expand</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-collapse-down"></span>collapse-down</div>
                        <div class="icon-list-item col-md-3 col-sm-4"><span class="glyphicon glyphicon-collapse-up"></span>collapse-up</div>
                    </div>
                </div>
                <div class="tab-pane" id="tab2">
                    <h3>Awesome <span class="fw-semi-bold">Font Awesome</span></h3>
                    <div class="row icon-list">
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/car"><i class="fa fa-automobile"></i> automobile <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/university"><i class="fa fa-bank"></i> bank <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/behance"><i class="fa fa-behance"></i> behance</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/behance-square"><i class="fa fa-behance-square"></i> behance-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bomb"><i class="fa fa-bomb"></i> bomb</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/building"><i class="fa fa-building"></i> building</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/taxi"><i class="fa fa-cab"></i> cab <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/car"><i class="fa fa-car"></i> car</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/child"><i class="fa fa-child"></i> child</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-o-notch"><i class="fa fa-circle-o-notch"></i> circle-o-notch</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-thin"><i class="fa fa-circle-thin"></i> circle-thin</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/codepen"><i class="fa fa-codepen"></i> codepen</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cube"><i class="fa fa-cube"></i> cube</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cubes"><i class="fa fa-cubes"></i> cubes</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/database"><i class="fa fa-database"></i> database</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/delicious"><i class="fa fa-delicious"></i> delicious</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/deviantart"><i class="fa fa-deviantart"></i> deviantart</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/digg"><i class="fa fa-digg"></i> digg</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/drupal"><i class="fa fa-drupal"></i> drupal</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/empire"><i class="fa fa-empire"></i> empire</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/envelope-square"><i class="fa fa-envelope-square"></i> envelope-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fax"><i class="fa fa-fax"></i> fax</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-archive-o"><i class="fa fa-file-archive-o"></i> file-archive-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-audio-o"><i class="fa fa-file-audio-o"></i> file-audio-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-code-o"><i class="fa fa-file-code-o"></i> file-code-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-excel-o"><i class="fa fa-file-excel-o"></i> file-excel-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i class="fa fa-file-image-o"></i> file-image-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-video-o"><i class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-pdf-o"><i class="fa fa-file-pdf-o"></i> file-pdf-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-powerpoint-o"><i class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-audio-o"><i class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-video-o"><i class="fa fa-file-video-o"></i> file-video-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-word-o"><i class="fa fa-file-word-o"></i> file-word-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-archive-o"><i class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/empire"><i class="fa fa-ge"></i> ge <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/git"><i class="fa fa-git"></i> git</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/git-square"><i class="fa fa-git-square"></i> git-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/google"><i class="fa fa-google"></i> google</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/graduation-cap"><i class="fa fa-graduation-cap"></i> graduation-cap</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/hacker-news"><i class="fa fa-hacker-news"></i> hacker-news</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/header"><i class="fa fa-header"></i> header</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/history"><i class="fa fa-history"></i> history</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/university"><i class="fa fa-institution"></i> institution <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/joomla"><i class="fa fa-joomla"></i> joomla</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/jsfiddle"><i class="fa fa-jsfiddle"></i> jsfiddle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/language"><i class="fa fa-language"></i> language</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i class="fa fa-life-bouy"></i> life-bouy <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i class="fa fa-life-ring"></i> life-ring</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i class="fa fa-life-saver"></i> life-saver <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/graduation-cap"><i class="fa fa-mortar-board"></i> mortar-board <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/openid"><i class="fa fa-openid"></i> openid</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane"><i class="fa fa-paper-plane"></i> paper-plane</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane-o"><i class="fa fa-paper-plane-o"></i> paper-plane-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paragraph"><i class="fa fa-paragraph"></i> paragraph</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paw"><i class="fa fa-paw"></i> paw</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pied-piper"><i class="fa fa-pied-piper"></i> pied-piper</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pied-piper-alt"><i class="fa fa-pied-piper-alt"></i> pied-piper-alt</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pied-piper"><i class="fa fa-pied-piper-square"></i> pied-piper-square <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/qq"><i class="fa fa-qq"></i> qq</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rebel"><i class="fa fa-ra"></i> ra <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rebel"><i class="fa fa-rebel"></i> rebel</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/recycle"><i class="fa fa-recycle"></i> recycle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reddit"><i class="fa fa-reddit"></i> reddit</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reddit-square"><i class="fa fa-reddit-square"></i> reddit-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane"><i class="fa fa-send"></i> send <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane-o"><i class="fa fa-send-o"></i> send-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-alt"><i class="fa fa-share-alt"></i> share-alt</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-alt-square"><i class="fa fa-share-alt-square"></i> share-alt-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/slack"><i class="fa fa-slack"></i> slack</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sliders"><i class="fa fa-sliders"></i> sliders</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/soundcloud"><i class="fa fa-soundcloud"></i> soundcloud</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/space-shuttle"><i class="fa fa-space-shuttle"></i> space-shuttle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/spoon"><i class="fa fa-spoon"></i> spoon</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/spotify"><i class="fa fa-spotify"></i> spotify</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/steam"><i class="fa fa-steam"></i> steam</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/steam-square"><i class="fa fa-steam-square"></i> steam-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stumbleupon"><i class="fa fa-stumbleupon"></i> stumbleupon</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stumbleupon-circle"><i class="fa fa-stumbleupon-circle"></i> stumbleupon-circle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i class="fa fa-support"></i> support <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/taxi"><i class="fa fa-taxi"></i> taxi</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tencent-weibo"><i class="fa fa-tencent-weibo"></i> tencent-weibo</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tree"><i class="fa fa-tree"></i> tree</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/university"><i class="fa fa-university"></i> university</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/vine"><i class="fa fa-vine"></i> vine</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/weixin"><i class="fa fa-wechat"></i> wechat <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/weixin"><i class="fa fa-weixin"></i> weixin</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/wordpress"><i class="fa fa-wordpress"></i> wordpress</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/yahoo"><i class="fa fa-yahoo"></i> yahoo</a></div>

                    </div>
                </div>
                <div class="tab-pane" id="tab3">
                    <div class="row icon-list">
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/adjust"><i class="fa fa-adjust"></i> adjust</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/anchor"><i class="fa fa-anchor"></i> anchor</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/archive"><i class="fa fa-archive"></i> archive</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/arrows"><i class="fa fa-arrows"></i> arrows</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/arrows-h"><i class="fa fa-arrows-h"></i> arrows-h</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/arrows-v"><i class="fa fa-arrows-v"></i> arrows-v</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/asterisk"><i class="fa fa-asterisk"></i> asterisk</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/car"><i class="fa fa-automobile"></i> automobile <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/ban"><i class="fa fa-ban"></i> ban</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/university"><i class="fa fa-bank"></i> bank <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bar-chart-o"><i class="fa fa-bar-chart-o"></i> bar-chart-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/barcode"><i class="fa fa-barcode"></i> barcode</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bars"><i class="fa fa-bars"></i> bars</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/beer"><i class="fa fa-beer"></i> beer</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bell"><i class="fa fa-bell"></i> bell</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bell-o"><i class="fa fa-bell-o"></i> bell-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bolt"><i class="fa fa-bolt"></i> bolt</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bomb"><i class="fa fa-bomb"></i> bomb</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/book"><i class="fa fa-book"></i> book</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bookmark"><i class="fa fa-bookmark"></i> bookmark</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bookmark-o"><i class="fa fa-bookmark-o"></i> bookmark-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/briefcase"><i class="fa fa-briefcase"></i> briefcase</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bug"><i class="fa fa-bug"></i> bug</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/building"><i class="fa fa-building"></i> building</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/building-o"><i class="fa fa-building-o"></i> building-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bullhorn"><i class="fa fa-bullhorn"></i> bullhorn</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bullseye"><i class="fa fa-bullseye"></i> bullseye</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/taxi"><i class="fa fa-cab"></i> cab <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/calendar"><i class="fa fa-calendar"></i> calendar</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/calendar-o"><i class="fa fa-calendar-o"></i> calendar-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/camera"><i class="fa fa-camera"></i> camera</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/camera-retro"><i class="fa fa-camera-retro"></i> camera-retro</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/car"><i class="fa fa-car"></i> car</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-down"><i class="fa fa-caret-square-o-down"></i> caret-square-o-down</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-left"><i class="fa fa-caret-square-o-left"></i> caret-square-o-left</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-right"><i class="fa fa-caret-square-o-right"></i> caret-square-o-right</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-up"><i class="fa fa-caret-square-o-up"></i> caret-square-o-up</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/certificate"><i class="fa fa-certificate"></i> certificate</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check"><i class="fa fa-check"></i> check</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check-circle"><i class="fa fa-check-circle"></i> check-circle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check-circle-o"><i class="fa fa-check-circle-o"></i> check-circle-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check-square"><i class="fa fa-check-square"></i> check-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check-square-o"><i class="fa fa-check-square-o"></i> check-square-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/child"><i class="fa fa-child"></i> child</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle"><i class="fa fa-circle"></i> circle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-o"><i class="fa fa-circle-o"></i> circle-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-o-notch"><i class="fa fa-circle-o-notch"></i> circle-o-notch</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-thin"><i class="fa fa-circle-thin"></i> circle-thin</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/clock-o"><i class="fa fa-clock-o"></i> clock-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cloud"><i class="fa fa-cloud"></i> cloud</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cloud-download"><i class="fa fa-cloud-download"></i> cloud-download</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cloud-upload"><i class="fa fa-cloud-upload"></i> cloud-upload</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/code"><i class="fa fa-code"></i> code</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/code-fork"><i class="fa fa-code-fork"></i> code-fork</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/coffee"><i class="fa fa-coffee"></i> coffee</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cog"><i class="fa fa-cog"></i> cog</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cogs"><i class="fa fa-cogs"></i> cogs</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/comment"><i class="fa fa-comment"></i> comment</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/comment-o"><i class="fa fa-comment-o"></i> comment-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/comments"><i class="fa fa-comments"></i> comments</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/comments-o"><i class="fa fa-comments-o"></i> comments-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/compass"><i class="fa fa-compass"></i> compass</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/credit-card"><i class="fa fa-credit-card"></i> credit-card</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/crop"><i class="fa fa-crop"></i> crop</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/crosshairs"><i class="fa fa-crosshairs"></i> crosshairs</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cube"><i class="fa fa-cube"></i> cube</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cubes"><i class="fa fa-cubes"></i> cubes</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cutlery"><i class="fa fa-cutlery"></i> cutlery</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tachometer"><i class="fa fa-dashboard"></i> dashboard <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/database"><i class="fa fa-database"></i> database</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/desktop"><i class="fa fa-desktop"></i> desktop</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/dot-circle-o"><i class="fa fa-dot-circle-o"></i> dot-circle-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/download"><i class="fa fa-download"></i> download</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pencil-square-o"><i class="fa fa-edit"></i> edit <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/ellipsis-h"><i class="fa fa-ellipsis-h"></i> ellipsis-h</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/ellipsis-v"><i class="fa fa-ellipsis-v"></i> ellipsis-v</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/envelope"><i class="fa fa-envelope"></i> envelope</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/envelope-o"><i class="fa fa-envelope-o"></i> envelope-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/envelope-square"><i class="fa fa-envelope-square"></i> envelope-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eraser"><i class="fa fa-eraser"></i> eraser</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/exchange"><i class="fa fa-exchange"></i> exchange</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/exclamation"><i class="fa fa-exclamation"></i> exclamation</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/exclamation-circle"><i class="fa fa-exclamation-circle"></i> exclamation-circle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/exclamation-triangle"><i class="fa fa-exclamation-triangle"></i> exclamation-triangle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/external-link"><i class="fa fa-external-link"></i> external-link</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/external-link-square"><i class="fa fa-external-link-square"></i> external-link-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eye"><i class="fa fa-eye"></i> eye</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eye-slash"><i class="fa fa-eye-slash"></i> eye-slash</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fax"><i class="fa fa-fax"></i> fax</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/female"><i class="fa fa-female"></i> female</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fighter-jet"><i class="fa fa-fighter-jet"></i> fighter-jet</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-archive-o"><i class="fa fa-file-archive-o"></i> file-archive-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-audio-o"><i class="fa fa-file-audio-o"></i> file-audio-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-code-o"><i class="fa fa-file-code-o"></i> file-code-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-excel-o"><i class="fa fa-file-excel-o"></i> file-excel-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i class="fa fa-file-image-o"></i> file-image-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-video-o"><i class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-pdf-o"><i class="fa fa-file-pdf-o"></i> file-pdf-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-powerpoint-o"><i class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-audio-o"><i class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-video-o"><i class="fa fa-file-video-o"></i> file-video-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-word-o"><i class="fa fa-file-word-o"></i> file-word-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-archive-o"><i class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/film"><i class="fa fa-film"></i> film</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/filter"><i class="fa fa-filter"></i> filter</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fire"><i class="fa fa-fire"></i> fire</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fire-extinguisher"><i class="fa fa-fire-extinguisher"></i> fire-extinguisher</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/flag"><i class="fa fa-flag"></i> flag</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/flag-checkered"><i class="fa fa-flag-checkered"></i> flag-checkered</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/flag-o"><i class="fa fa-flag-o"></i> flag-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bolt"><i class="fa fa-flash"></i> flash <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/flask"><i class="fa fa-flask"></i> flask</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/folder"><i class="fa fa-folder"></i> folder</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/folder-o"><i class="fa fa-folder-o"></i> folder-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/folder-open"><i class="fa fa-folder-open"></i> folder-open</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/folder-open-o"><i class="fa fa-folder-open-o"></i> folder-open-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/frown-o"><i class="fa fa-frown-o"></i> frown-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/gamepad"><i class="fa fa-gamepad"></i> gamepad</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/gavel"><i class="fa fa-gavel"></i> gavel</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cog"><i class="fa fa-gear"></i> gear <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cogs"><i class="fa fa-gears"></i> gears <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/gift"><i class="fa fa-gift"></i> gift</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/glass"><i class="fa fa-glass"></i> glass</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/globe"><i class="fa fa-globe"></i> globe</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/graduation-cap"><i class="fa fa-graduation-cap"></i> graduation-cap</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/users"><i class="fa fa-group"></i> group <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/hdd-o"><i class="fa fa-hdd-o"></i> hdd-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/headphones"><i class="fa fa-headphones"></i> headphones</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/heart"><i class="fa fa-heart"></i> heart</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/heart-o"><i class="fa fa-heart-o"></i> heart-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/history"><i class="fa fa-history"></i> history</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/home"><i class="fa fa-home"></i> home</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/picture-o"><i class="fa fa-image"></i> image <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/inbox"><i class="fa fa-inbox"></i> inbox</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/info"><i class="fa fa-info"></i> info</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/info-circle"><i class="fa fa-info-circle"></i> info-circle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/university"><i class="fa fa-institution"></i> institution <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/key"><i class="fa fa-key"></i> key</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/keyboard-o"><i class="fa fa-keyboard-o"></i> keyboard-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/language"><i class="fa fa-language"></i> language</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/laptop"><i class="fa fa-laptop"></i> laptop</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/leaf"><i class="fa fa-leaf"></i> leaf</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/gavel"><i class="fa fa-legal"></i> legal <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/lemon-o"><i class="fa fa-lemon-o"></i> lemon-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/level-down"><i class="fa fa-level-down"></i> level-down</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/level-up"><i class="fa fa-level-up"></i> level-up</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i class="fa fa-life-bouy"></i> life-bouy <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i class="fa fa-life-ring"></i> life-ring</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i class="fa fa-life-saver"></i> life-saver <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/lightbulb-o"><i class="fa fa-lightbulb-o"></i> lightbulb-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/location-arrow"><i class="fa fa-location-arrow"></i> location-arrow</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/lock"><i class="fa fa-lock"></i> lock</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/magic"><i class="fa fa-magic"></i> magic</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/magnet"><i class="fa fa-magnet"></i> magnet</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share"><i class="fa fa-mail-forward"></i> mail-forward <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reply"><i class="fa fa-mail-reply"></i> mail-reply <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reply-all"><i class="fa fa-mail-reply-all"></i> mail-reply-all <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/male"><i class="fa fa-male"></i> male</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/map-marker"><i class="fa fa-map-marker"></i> map-marker</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/meh-o"><i class="fa fa-meh-o"></i> meh-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/microphone"><i class="fa fa-microphone"></i> microphone</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/microphone-slash"><i class="fa fa-microphone-slash"></i> microphone-slash</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/minus"><i class="fa fa-minus"></i> minus</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/minus-circle"><i class="fa fa-minus-circle"></i> minus-circle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/minus-square"><i class="fa fa-minus-square"></i> minus-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/minus-square-o"><i class="fa fa-minus-square-o"></i> minus-square-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/mobile"><i class="fa fa-mobile"></i> mobile</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/mobile"><i class="fa fa-mobile-phone"></i> mobile-phone <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/money"><i class="fa fa-money"></i> money</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/moon-o"><i class="fa fa-moon-o"></i> moon-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/graduation-cap"><i class="fa fa-mortar-board"></i> mortar-board <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/music"><i class="fa fa-music"></i> music</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bars"><i class="fa fa-navicon"></i> navicon <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane"><i class="fa fa-paper-plane"></i> paper-plane</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane-o"><i class="fa fa-paper-plane-o"></i> paper-plane-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paw"><i class="fa fa-paw"></i> paw</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pencil"><i class="fa fa-pencil"></i> pencil</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pencil-square"><i class="fa fa-pencil-square"></i> pencil-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pencil-square-o"><i class="fa fa-pencil-square-o"></i> pencil-square-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/phone"><i class="fa fa-phone"></i> phone</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/phone-square"><i class="fa fa-phone-square"></i> phone-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/picture-o"><i class="fa fa-photo"></i> photo <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/picture-o"><i class="fa fa-picture-o"></i> picture-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plane"><i class="fa fa-plane"></i> plane</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus"><i class="fa fa-plus"></i> plus</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus-circle"><i class="fa fa-plus-circle"></i> plus-circle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus-square"><i class="fa fa-plus-square"></i> plus-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus-square-o"><i class="fa fa-plus-square-o"></i> plus-square-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/power-off"><i class="fa fa-power-off"></i> power-off</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/print"><i class="fa fa-print"></i> print</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/puzzle-piece"><i class="fa fa-puzzle-piece"></i> puzzle-piece</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/qrcode"><i class="fa fa-qrcode"></i> qrcode</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/question"><i class="fa fa-question"></i> question</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/question-circle"><i class="fa fa-question-circle"></i> question-circle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/quote-left"><i class="fa fa-quote-left"></i> quote-left</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/quote-right"><i class="fa fa-quote-right"></i> quote-right</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/random"><i class="fa fa-random"></i> random</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/recycle"><i class="fa fa-recycle"></i> recycle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/refresh"><i class="fa fa-refresh"></i> refresh</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bars"><i class="fa fa-reorder"></i> reorder <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reply"><i class="fa fa-reply"></i> reply</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reply-all"><i class="fa fa-reply-all"></i> reply-all</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/retweet"><i class="fa fa-retweet"></i> retweet</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/road"><i class="fa fa-road"></i> road</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rocket"><i class="fa fa-rocket"></i> rocket</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rss"><i class="fa fa-rss"></i> rss</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rss-square"><i class="fa fa-rss-square"></i> rss-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/search"><i class="fa fa-search"></i> search</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/search-minus"><i class="fa fa-search-minus"></i> search-minus</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/search-plus"><i class="fa fa-search-plus"></i> search-plus</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane"><i class="fa fa-send"></i> send <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paper-plane-o"><i class="fa fa-send-o"></i> send-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share"><i class="fa fa-share"></i> share</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-alt"><i class="fa fa-share-alt"></i> share-alt</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-alt-square"><i class="fa fa-share-alt-square"></i> share-alt-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-square"><i class="fa fa-share-square"></i> share-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-square-o"><i class="fa fa-share-square-o"></i> share-square-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/shield"><i class="fa fa-shield"></i> shield</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/shopping-cart"><i class="fa fa-shopping-cart"></i> shopping-cart</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sign-in"><i class="fa fa-sign-in"></i> sign-in</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sign-out"><i class="fa fa-sign-out"></i> sign-out</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/signal"><i class="fa fa-signal"></i> signal</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sitemap"><i class="fa fa-sitemap"></i> sitemap</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sliders"><i class="fa fa-sliders"></i> sliders</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/smile-o"><i class="fa fa-smile-o"></i> smile-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort"><i class="fa fa-sort"></i> sort</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-alpha-asc"><i class="fa fa-sort-alpha-asc"></i> sort-alpha-asc</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-alpha-desc"><i class="fa fa-sort-alpha-desc"></i> sort-alpha-desc</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-amount-asc"><i class="fa fa-sort-amount-asc"></i> sort-amount-asc</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-amount-desc"><i class="fa fa-sort-amount-desc"></i> sort-amount-desc</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-asc"><i class="fa fa-sort-asc"></i> sort-asc</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-desc"><i class="fa fa-sort-desc"></i> sort-desc</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-desc"><i class="fa fa-sort-down"></i> sort-down <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-numeric-asc"><i class="fa fa-sort-numeric-asc"></i> sort-numeric-asc</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-numeric-desc"><i class="fa fa-sort-numeric-desc"></i> sort-numeric-desc</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort-asc"><i class="fa fa-sort-up"></i> sort-up <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/space-shuttle"><i class="fa fa-space-shuttle"></i> space-shuttle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/spinner"><i class="fa fa-spinner"></i> spinner</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/spoon"><i class="fa fa-spoon"></i> spoon</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/square"><i class="fa fa-square"></i> square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/square-o"><i class="fa fa-square-o"></i> square-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/star"><i class="fa fa-star"></i> star</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/star-half"><i class="fa fa-star-half"></i> star-half</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/star-half-o"><i class="fa fa-star-half-empty"></i> star-half-empty <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/star-half-o"><i class="fa fa-star-half-full"></i> star-half-full <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/star-half-o"><i class="fa fa-star-half-o"></i> star-half-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/star-o"><i class="fa fa-star-o"></i> star-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/suitcase"><i class="fa fa-suitcase"></i> suitcase</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sun-o"><i class="fa fa-sun-o"></i> sun-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/life-ring"><i class="fa fa-support"></i> support <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tablet"><i class="fa fa-tablet"></i> tablet</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tachometer"><i class="fa fa-tachometer"></i> tachometer</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tag"><i class="fa fa-tag"></i> tag</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tags"><i class="fa fa-tags"></i> tags</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tasks"><i class="fa fa-tasks"></i> tasks</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/taxi"><i class="fa fa-taxi"></i> taxi</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/terminal"><i class="fa fa-terminal"></i> terminal</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/thumb-tack"><i class="fa fa-thumb-tack"></i> thumb-tack</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/thumbs-down"><i class="fa fa-thumbs-down"></i> thumbs-down</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/thumbs-o-down"><i class="fa fa-thumbs-o-down"></i> thumbs-o-down</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/thumbs-o-up"><i class="fa fa-thumbs-o-up"></i> thumbs-o-up</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/thumbs-up"><i class="fa fa-thumbs-up"></i> thumbs-up</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/ticket"><i class="fa fa-ticket"></i> ticket</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/times"><i class="fa fa-times"></i> times</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/times-circle"><i class="fa fa-times-circle"></i> times-circle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/times-circle-o"><i class="fa fa-times-circle-o"></i> times-circle-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tint"><i class="fa fa-tint"></i> tint</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-down"><i class="fa fa-toggle-down"></i> toggle-down <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-left"><i class="fa fa-toggle-left"></i> toggle-left <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-right"><i class="fa fa-toggle-right"></i> toggle-right <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/caret-square-o-up"><i class="fa fa-toggle-up"></i> toggle-up <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/trash-o"><i class="fa fa-trash-o"></i> trash-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tree"><i class="fa fa-tree"></i> tree</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/trophy"><i class="fa fa-trophy"></i> trophy</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/truck"><i class="fa fa-truck"></i> truck</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/umbrella"><i class="fa fa-umbrella"></i> umbrella</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/university"><i class="fa fa-university"></i> university</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/unlock"><i class="fa fa-unlock"></i> unlock</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/unlock-alt"><i class="fa fa-unlock-alt"></i> unlock-alt</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/sort"><i class="fa fa-unsorted"></i> unsorted <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/upload"><i class="fa fa-upload"></i> upload</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/user"><i class="fa fa-user"></i> user</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/users"><i class="fa fa-users"></i> users</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/video-camera"><i class="fa fa-video-camera"></i> video-camera</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/volume-down"><i class="fa fa-volume-down"></i> volume-down</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/volume-off"><i class="fa fa-volume-off"></i> volume-off</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/volume-up"><i class="fa fa-volume-up"></i> volume-up</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/exclamation-triangle"><i class="fa fa-warning"></i> warning <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/wheelchair"><i class="fa fa-wheelchair"></i> wheelchair</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/wrench"><i class="fa fa-wrench"></i> wrench</a></div>

                    </div>
                </div>
                <div class="tab-pane" id="tab4">
                    <div class="row icon-list">
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-o-notch"><i class="fa fa-circle-o-notch"></i> circle-o-notch</a></div>
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cog"><i class="fa fa-cog"></i> cog</a></div>
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/cog"><i class="fa fa-gear"></i> gear <span class="text-muted">(alias)</span></a></div>
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/refresh"><i class="fa fa-refresh"></i> refresh</a></div>
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/spinner"><i class="fa fa-spinner"></i> spinner</a></div>
                    </div>
                </div>
                <div class="tab-pane" id="tab5">
                    <div class="row icon-list">
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/align-center"><i class="fa fa-align-center"></i> align-center</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/align-justify"><i class="fa fa-align-justify"></i> align-justify</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/align-left"><i class="fa fa-align-left"></i> align-left</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/align-right"><i class="fa fa-align-right"></i> align-right</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bold"><i class="fa fa-bold"></i> bold</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/link"><i class="fa fa-chain"></i> chain <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/chain-broken"><i class="fa fa-chain-broken"></i> chain-broken</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/clipboard"><i class="fa fa-clipboard"></i> clipboard</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/columns"><i class="fa fa-columns"></i> columns</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/files-o"><i class="fa fa-copy"></i> copy <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/scissors"><i class="fa fa-cut"></i> cut <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/outdent"><i class="fa fa-dedent"></i> dedent <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eraser"><i class="fa fa-eraser"></i> eraser</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file"><i class="fa fa-file"></i> file</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-o"><i class="fa fa-file-o"></i> file-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-text"><i class="fa fa-file-text"></i> file-text</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-text-o"><i class="fa fa-file-text-o"></i> file-text-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/files-o"><i class="fa fa-files-o"></i> files-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/floppy-o"><i class="fa fa-floppy-o"></i> floppy-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/font"><i class="fa fa-font"></i> font</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/header"><i class="fa fa-header"></i> header</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/indent"><i class="fa fa-indent"></i> indent</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/italic"><i class="fa fa-italic"></i> italic</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/link"><i class="fa fa-link"></i> link</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/list"><i class="fa fa-list"></i> list</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/list-alt"><i class="fa fa-list-alt"></i> list-alt</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/list-ol"><i class="fa fa-list-ol"></i> list-ol</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/list-ul"><i class="fa fa-list-ul"></i> list-ul</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/outdent"><i class="fa fa-outdent"></i> outdent</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paperclip"><i class="fa fa-paperclip"></i> paperclip</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/paragraph"><i class="fa fa-paragraph"></i> paragraph</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/clipboard"><i class="fa fa-paste"></i> paste <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/repeat"><i class="fa fa-repeat"></i> repeat</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/undo"><i class="fa fa-rotate-left"></i> rotate-left <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/repeat"><i class="fa fa-rotate-right"></i> rotate-right <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/floppy-o"><i class="fa fa-save"></i> save <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/scissors"><i class="fa fa-scissors"></i> scissors</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/strikethrough"><i class="fa fa-strikethrough"></i> strikethrough</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/subscript"><i class="fa fa-subscript"></i> subscript</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/superscript"><i class="fa fa-superscript"></i> superscript</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/table"><i class="fa fa-table"></i> table</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/text-height"><i class="fa fa-text-height"></i> text-height</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/text-width"><i class="fa fa-text-width"></i> text-width</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/th"><i class="fa fa-th"></i> th</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/th-large"><i class="fa fa-th-large"></i> th-large</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/th-list"><i class="fa fa-th-list"></i> th-list</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/underline"><i class="fa fa-underline"></i> underline</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/undo"><i class="fa fa-undo"></i> undo</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/chain-broken"><i class="fa fa-unlink"></i> unlink <span class="text-muted">(alias)</span></a></div>

                    </div>
                </div>
                <div class="tab-pane" id="tab6">
                    <div class="row icon-list">
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/adn"><i class="fa fa-adn"></i> adn</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/android"><i class="fa fa-android"></i> android</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/apple"><i class="fa fa-apple"></i> apple</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/behance"><i class="fa fa-behance"></i> behance</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/behance-square"><i class="fa fa-behance-square"></i> behance-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bitbucket"><i class="fa fa-bitbucket"></i> bitbucket</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/bitbucket-square"><i class="fa fa-bitbucket-square"></i> bitbucket-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/btc"><i class="fa fa-bitcoin"></i> bitcoin <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/btc"><i class="fa fa-btc"></i> btc</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/codepen"><i class="fa fa-codepen"></i> codepen</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/css3"><i class="fa fa-css3"></i> css3</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/delicious"><i class="fa fa-delicious"></i> delicious</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/deviantart"><i class="fa fa-deviantart"></i> deviantart</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/digg"><i class="fa fa-digg"></i> digg</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/dribbble"><i class="fa fa-dribbble"></i> dribbble</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/dropbox"><i class="fa fa-dropbox"></i> dropbox</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/drupal"><i class="fa fa-drupal"></i> drupal</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/empire"><i class="fa fa-empire"></i> empire</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/facebook"><i class="fa fa-facebook"></i> facebook</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/facebook-square"><i class="fa fa-facebook-square"></i> facebook-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/flickr"><i class="fa fa-flickr"></i> flickr</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/foursquare"><i class="fa fa-foursquare"></i> foursquare</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/empire"><i class="fa fa-ge"></i> ge <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/git"><i class="fa fa-git"></i> git</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/git-square"><i class="fa fa-git-square"></i> git-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/github"><i class="fa fa-github"></i> github</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/github-alt"><i class="fa fa-github-alt"></i> github-alt</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/github-square"><i class="fa fa-github-square"></i> github-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/gittip"><i class="fa fa-gittip"></i> gittip</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/google"><i class="fa fa-google"></i> google</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/google-plus"><i class="fa fa-google-plus"></i> google-plus</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/google-plus-square"><i class="fa fa-google-plus-square"></i> google-plus-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/hacker-news"><i class="fa fa-hacker-news"></i> hacker-news</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/html5"><i class="fa fa-html5"></i> html5</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/instagram"><i class="fa fa-instagram"></i> instagram</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/joomla"><i class="fa fa-joomla"></i> joomla</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/jsfiddle"><i class="fa fa-jsfiddle"></i> jsfiddle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/linkedin"><i class="fa fa-linkedin"></i> linkedin</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/linkedin-square"><i class="fa fa-linkedin-square"></i> linkedin-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/linux"><i class="fa fa-linux"></i> linux</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/maxcdn"><i class="fa fa-maxcdn"></i> maxcdn</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/openid"><i class="fa fa-openid"></i> openid</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pagelines"><i class="fa fa-pagelines"></i> pagelines</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pied-piper"><i class="fa fa-pied-piper"></i> pied-piper</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pied-piper-alt"><i class="fa fa-pied-piper-alt"></i> pied-piper-alt</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pied-piper"><i class="fa fa-pied-piper-square"></i> pied-piper-square <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pinterest"><i class="fa fa-pinterest"></i> pinterest</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pinterest-square"><i class="fa fa-pinterest-square"></i> pinterest-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/qq"><i class="fa fa-qq"></i> qq</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rebel"><i class="fa fa-ra"></i> ra <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rebel"><i class="fa fa-rebel"></i> rebel</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reddit"><i class="fa fa-reddit"></i> reddit</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/reddit-square"><i class="fa fa-reddit-square"></i> reddit-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/renren"><i class="fa fa-renren"></i> renren</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-alt"><i class="fa fa-share-alt"></i> share-alt</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/share-alt-square"><i class="fa fa-share-alt-square"></i> share-alt-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/skype"><i class="fa fa-skype"></i> skype</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/slack"><i class="fa fa-slack"></i> slack</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/soundcloud"><i class="fa fa-soundcloud"></i> soundcloud</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/spotify"><i class="fa fa-spotify"></i> spotify</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stack-exchange"><i class="fa fa-stack-exchange"></i> stack-exchange</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stack-overflow"><i class="fa fa-stack-overflow"></i> stack-overflow</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/steam"><i class="fa fa-steam"></i> steam</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/steam-square"><i class="fa fa-steam-square"></i> steam-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stumbleupon"><i class="fa fa-stumbleupon"></i> stumbleupon</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stumbleupon-circle"><i class="fa fa-stumbleupon-circle"></i> stumbleupon-circle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tencent-weibo"><i class="fa fa-tencent-weibo"></i> tencent-weibo</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/trello"><i class="fa fa-trello"></i> trello</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tumblr"><i class="fa fa-tumblr"></i> tumblr</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/tumblr-square"><i class="fa fa-tumblr-square"></i> tumblr-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/twitter"><i class="fa fa-twitter"></i> twitter</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/twitter-square"><i class="fa fa-twitter-square"></i> twitter-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/vimeo-square"><i class="fa fa-vimeo-square"></i> vimeo-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/vine"><i class="fa fa-vine"></i> vine</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/vk"><i class="fa fa-vk"></i> vk</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/weixin"><i class="fa fa-wechat"></i> wechat <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/weibo"><i class="fa fa-weibo"></i> weibo</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/weixin"><i class="fa fa-weixin"></i> weixin</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/windows"><i class="fa fa-windows"></i> windows</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/wordpress"><i class="fa fa-wordpress"></i> wordpress</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/xing"><i class="fa fa-xing"></i> xing</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/xing-square"><i class="fa fa-xing-square"></i> xing-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/yahoo"><i class="fa fa-yahoo"></i> yahoo</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/youtube"><i class="fa fa-youtube"></i> youtube</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/youtube-play"><i class="fa fa-youtube-play"></i> youtube-play</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/youtube-square"><i class="fa fa-youtube-square"></i> youtube-square</a></div>

                    </div>
                </div>
                <div class="tab-pane" id="tab7">
                    <h3>File Type <span class="fw-semi-bold">Icons</span></h3>
                    <div class="row icon-list">
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file"><i class="fa fa-file"></i> file</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-archive-o"><i class="fa fa-file-archive-o"></i> file-archive-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-audio-o"><i class="fa fa-file-audio-o"></i> file-audio-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-code-o"><i class="fa fa-file-code-o"></i> file-code-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-excel-o"><i class="fa fa-file-excel-o"></i> file-excel-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i class="fa fa-file-image-o"></i> file-image-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-video-o"><i class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-o"><i class="fa fa-file-o"></i> file-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-pdf-o"><i class="fa fa-file-pdf-o"></i> file-pdf-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-image-o"><i class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-powerpoint-o"><i class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-audio-o"><i class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-text"><i class="fa fa-file-text"></i> file-text</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-text-o"><i class="fa fa-file-text-o"></i> file-text-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-video-o"><i class="fa fa-file-video-o"></i> file-video-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-word-o"><i class="fa fa-file-word-o"></i> file-word-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/file-archive-o"><i class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></a></div>

                    </div>
                    <h3>Form Control <span class="fw-semi-bold">Icons</span></h3>
                    <div class="row icon-list">
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check-square"><i class="fa fa-check-square"></i> check-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/check-square-o"><i class="fa fa-check-square-o"></i> check-square-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle"><i class="fa fa-circle"></i> circle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/circle-o"><i class="fa fa-circle-o"></i> circle-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/dot-circle-o"><i class="fa fa-dot-circle-o"></i> dot-circle-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/minus-square"><i class="fa fa-minus-square"></i> minus-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/minus-square-o"><i class="fa fa-minus-square-o"></i> minus-square-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus-square"><i class="fa fa-plus-square"></i> plus-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus-square-o"><i class="fa fa-plus-square-o"></i> plus-square-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/square"><i class="fa fa-square"></i> square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/square-o"><i class="fa fa-square-o"></i> square-o</a></div>

                    </div>
                    <h3>Currency <span class="fw-semi-bold">Icons</span></h3>
                    <div class="row icon-list">
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/btc"><i class="fa fa-bitcoin"></i> bitcoin <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/btc"><i class="fa fa-btc"></i> btc</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/jpy"><i class="fa fa-cny"></i> cny <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/usd"><i class="fa fa-dollar"></i> dollar <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eur"><i class="fa fa-eur"></i> eur</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eur"><i class="fa fa-euro"></i> euro <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/gbp"><i class="fa fa-gbp"></i> gbp</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/inr"><i class="fa fa-inr"></i> inr</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/jpy"><i class="fa fa-jpy"></i> jpy</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/krw"><i class="fa fa-krw"></i> krw</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/money"><i class="fa fa-money"></i> money</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/jpy"><i class="fa fa-rmb"></i> rmb <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rub"><i class="fa fa-rouble"></i> rouble <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rub"><i class="fa fa-rub"></i> rub</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/rub"><i class="fa fa-ruble"></i> ruble <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/inr"><i class="fa fa-rupee"></i> rupee <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/try"><i class="fa fa-try"></i> try</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/try"><i class="fa fa-turkish-lira"></i> turkish-lira <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/usd"><i class="fa fa-usd"></i> usd</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/krw"><i class="fa fa-won"></i> won <span class="text-muted">(alias)</span></a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/jpy"><i class="fa fa-yen"></i> yen <span class="text-muted">(alias)</span></a></div>

                    </div>
                    <h3>Video Player <span class="fw-semi-bold">Icons</span></h3>
                    <div class="row icon-list">
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/arrows-alt"><i class="fa fa-arrows-alt"></i> arrows-alt</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/backward"><i class="fa fa-backward"></i> backward</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/compress"><i class="fa fa-compress"></i> compress</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/eject"><i class="fa fa-eject"></i> eject</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/expand"><i class="fa fa-expand"></i> expand</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fast-backward"><i class="fa fa-fast-backward"></i> fast-backward</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/fast-forward"><i class="fa fa-fast-forward"></i> fast-forward</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/forward"><i class="fa fa-forward"></i> forward</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/pause"><i class="fa fa-pause"></i> pause</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/play"><i class="fa fa-play"></i> play</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/play-circle"><i class="fa fa-play-circle"></i> play-circle</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/play-circle-o"><i class="fa fa-play-circle-o"></i> play-circle-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/step-backward"><i class="fa fa-step-backward"></i> step-backward</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/step-forward"><i class="fa fa-step-forward"></i> step-forward</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stop"><i class="fa fa-stop"></i> stop</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/youtube-play"><i class="fa fa-youtube-play"></i> youtube-play</a></div>

                    </div>
                    <h3>Medical <span class="fw-semi-bold">Icons</span></h3>
                    <div class="row icon-list">
                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/ambulance"><i class="fa fa-ambulance"></i> ambulance</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/h-square"><i class="fa fa-h-square"></i> h-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/hospital-o"><i class="fa fa-hospital-o"></i> hospital-o</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/medkit"><i class="fa fa-medkit"></i> medkit</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/plus-square"><i class="fa fa-plus-square"></i> plus-square</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/stethoscope"><i class="fa fa-stethoscope"></i> stethoscope</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/user-md"><i class="fa fa-user-md"></i> user-md</a></div>

                        <div class="icon-list-item col-md-3 col-sm-4"><a href="../icon/wheelchair"><i class="fa fa-wheelchair"></i> wheelchair</a></div>

                    </div>
                </div>
            </div>
        </section>
            <footer class="content-footer">
                Light Blue 4.0 Ajax Version - Made by <a href="https://flatlogic.com" rel="nofollow noopener noreferrer" target="_blank">Flatlogic</a>
            </footer>
        </div>
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div>
    </div>
<!-- common libraries. required for every page-->
<script src="lib/jquery/dist/jquery.min.js"></script>
<script src="lib/jquery-pjax/jquery.pjax.js"></script>
<script src="lib/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
<script src="lib/widgster/widgster.js"></script>
<script src="lib/underscore/underscore.js"></script>

<!-- common application js -->
<script src="js/app.js"></script>
<script src="js/settings.js"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    <!-- page specific scripts -->
        <!-- page application js -->
        <!-- script src="js/ui-buttons.js"></script-->

</body>
</html>