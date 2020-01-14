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
                <li class="active">
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
                        <li class=""><a href="icons.html">Icons</a></li>
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
        <h2 class="page-title">Tables - <span class="fw-semi-bold">Static</span></h2>
        <div class="row">
            <div class="col-md-12">
                <section class="widget">
                    <header>
                        <h4>
                            Table <span class="fw-semi-bold">Styles</span>
                        </h4>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="hidden-xs">#</th>
                                <th>Picture</th>
                                <th>Description</th>
                                <th class="hidden-xs">Info</th>
                                <th class="hidden-xs">Date</th>
                                <th class="hidden-xs">Size</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="hidden-xs">1</td>
                                <td>
                                    <img class="img-rounded" src="img/jpeg/1.jpg" alt="" height="50">
                                </td>
                                <td>
                                    Palo Alto
                                </td>
                                <td class="hidden-xs">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-muted">&nbsp; JPEG</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-muted">&nbsp; 200x150</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="hidden-xs text-muted">
                                    September 14, 2012
                                </td>
                                <td class="hidden-xs text-muted">
                                    45.6 KB
                                </td>
                                <td class="width-150">
                                    <div class="progress progress-sm mt-xs js-progress-animate">
                                        <div class="progress-bar progress-bar-success" data-width="29%" style="width: 0;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="hidden-xs">2</td>
                                <td>
                                    <img class="img-rounded" src="img/jpeg/2.jpg" alt="" height="50">
                                </td>
                                <td>
                                    The Sky
                                </td>
                                <td class="hidden-xs">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-muted">&nbsp; PSD</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-muted">&nbsp; 2400x1455</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="hidden-xs text-muted">
                                    November 14, 2012
                                </td>
                                <td class="hidden-xs text-muted">
                                    15.3 MB
                                </td>
                                <td class="width-150">
                                    <div class="progress progress-sm mt-xs js-progress-animate">
                                        <div class="progress-bar progress-bar-warning" data-width="33%" style="width: 0;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="hidden-xs">3</td>
                                <td>
                                    <img class="img-rounded" src="img/jpeg/3.jpg" alt="" height="50">
                                </td>
                                <td>
                                    Down the road
                                    <br>
                                    <span class="label label-danger">INFO!</span>
                                </td>
                                <td class="hidden-xs">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-muted">&nbsp; JPEG</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-muted">&nbsp; 200x150</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="hidden-xs text-muted">
                                    September 14, 2012
                                </td>
                                <td class="hidden-xs text-muted">
                                    49.0 KB
                                </td>
                                <td class="width-150">
                                    <div class="progress progress-sm mt-xs js-progress-animate">
                                        <div class="progress-bar progress-bar-gray" data-width="38%" style="width: 0;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="hidden-xs">4</td>
                                <td>
                                    <img class="img-rounded" src="img/jpeg/4.jpg" alt="" height="50">
                                </td>
                                <td>
                                    The Edge
                                </td>
                                <td class="hidden-xs">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-muted">&nbsp; PNG</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-muted">&nbsp; 210x160</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="hidden-xs text-muted">
                                    September 15, 2012
                                </td>
                                <td class="hidden-xs text-muted">
                                    69.1 KB
                                </td>
                                <td class="width-150">
                                    <div class="progress progress-sm mt-xs js-progress-animate">
                                        <div class="progress-bar progress-bar-danger" data-width="17%" style="width: 0;"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="hidden-xs">5</td>
                                <td>
                                    <img class="img-rounded" src="img/jpeg/11.jpg" alt="" height="50">
                                </td>
                                <td>
                                    Fortress
                                </td>
                                <td class="hidden-xs">
                                    <p class="no-margin">
                                        <small>
                                            <span class="fw-semi-bold">Type:</span>
                                            <span class="text-muted">&nbsp; JPEG</span>
                                        </small>
                                    </p>
                                    <p>
                                        <small>
                                            <span class="fw-semi-bold">Dimensions:</span>
                                            <span class="text-muted">&nbsp; 1452x1320</span>
                                        </small>
                                    </p>
                                </td>
                                <td class="hidden-xs text-muted">
                                    October 1, 2012
                                </td>
                                <td class="hidden-xs text-muted">
                                    2.3 MB
                                </td>
                                <td class="width-150">
                                    <div class="progress progress-sm mt-xs js-progress-animate">
                                        <div class="progress-bar" data-width="41%" style="width: 0;"></div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                        <div class="clearfix">
                            <div class="pull-right">
                                <button class="btn btn-default btn-sm">
                                    Send to ...
                                </button>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-inverse dropdown-toggle" data-toggle="dropdown">
                                        &nbsp; Clear &nbsp;
                                        <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Clear</a></li>
                                        <li><a href="#">Move ...</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p>Basic table with styled content</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>Table <span class="fw-semi-bold">Styles</span></h5>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="widget-body">
                        <h3>Stripped <span class="fw-semi-bold">Table</span></h3>
                        <p>Each row is highlighted. You will never lost there. Just <code>.table-striped</code> it.</p>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    <div class="checkbox">
                                        <input id="checkbox1" type="checkbox" data-check-all>
                                        <label for="checkbox1"></label>
                                    </div>
                                </th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Info</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2"></label>
                                    </div>
                                </td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td><span class="label label-danger">Online</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                                <td>Jacob <span class="label label-warning text-gray-dark fw-semi-bold">ALERT!</span></td>
                                <td>Thornton</td>
                                <td><span class="label bg-gray-light">Away</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4"></label>
                                    </div>
                                </td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td><span class="label label-danger">Construct</span></td>
                            </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <h3>Hover <span class="fw-semi-bold">Table</span></h3>
                        <p>Trace only what's really important. <code>.table-hover</code> is made for it.</p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td><a href="#">ottoto@example.com</a></td>
                                    <td><span class="badge bg-gray-lighter text-gray fw-semi-bold">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td><a href="#">fat.thor@example.com</a></td>
                                    <td><span class="badge bg-gray-lighter text-gray-light">Unconfirmed</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td><a href="#">larry@example.com</a></td>
                                    <td><span class="badge bg-gray-lighter text-gray fw-semi-bold">New</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Peter</td>
                                    <td>Horadnia</td>
                                    <td><a href="#">peter@example.com</a></td>
                                    <td><span class="badge bg-gray-lighter text-gray-light">Active</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <section class="widget">
                    <header>
                        <h5>Table <span class="fw-semi-bold">Styles</span></h5>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body">
                        <h3>Bordered  <span class="fw-semi-bold">Table</span></h3>
                        <p>Each row is highlighted. You will never lost there. That's how
                            all of us learned in school the table should look like. Just add
                            <code>.table-bordered</code> to it.</p>
                        <table class="table table-bordered table-lg mt-lg mb-0">
                            <thead>
                            <tr>
                                <th>
                                    <div class="checkbox">
                                        <input id="checkbox10" type="checkbox" data-check-all>
                                        <label for="checkbox10"></label>
                                    </div>
                                </th>
                                <th>Product</th>
                                <th class="text-align-right">Price</th>
                                <th class="text-align-center">Sales</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox11" type="checkbox" data-check-all>
                                        <label for="checkbox11"></label>
                                    </div>
                                </td>
                                <td>On the Road</td>
                                <td class="text-align-right">$25 224.2</td>
                                <td class="text-align-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#618fb0">13,14,16,15,4,14,20</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox12" type="checkbox" data-check-all>
                                        <label for="checkbox12"></label>
                                    </div>
                                </td>
                                <td>HP Core i7</td>
                                <td class="text-align-right">$87 346.1</td>
                                <td class="text-align-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#999">14,12,16,11,17,19,16</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox13" type="checkbox" data-check-all>
                                        <label for="checkbox13"></label>
                                    </div>
                                </td>
                                <td>Let's Dance</td>
                                <td class="text-align-right">$57 944.6</td>
                                <td class="text-align-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#f0b518">11,17,19,16,14,12,16</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox14" type="checkbox" data-check-all>
                                        <label for="checkbox14"></label>
                                    </div>
                                </td>
                                <td>Air Pro</td>
                                <td class="text-align-right">$118 533.1</td>
                                <td class="text-align-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#e5603b">13,14,20,16,15,4,14</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox15" type="checkbox" data-check-all>
                                        <label for="checkbox15"></label>
                                    </div>
                                </td>
                                <td>Version Control</td>
                                <td class="text-align-right">$72 854.5</td>
                                <td class="text-align-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#618fb0">16,15,4,14,13,14,20</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="widget">
                    <header>
                        <h5>Table <span class="fw-semi-bold">Styles</span></h5>
                        <div class="widget-controls">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body">
                        <h3>Overflow  <span class="fw-semi-bold">Table</span></h3>
                        <p>
                            Add any non-bordered .table within a widget for a seamless design.
                            Awesome look for no cost.
                            Just wrap the table with simple css class <code>.widget-table-overflow</code> inside
                            of widget
                        </p>
                    </div>
                    <div class="widget-table-overflow">
                        <table class="table table-striped table-lg mt-lg mb-0">
                            <thead class="no-bd">
                            <tr>
                                <th>
                                    <div class="checkbox">
                                        <input id="checkbox210" type="checkbox" data-check-all>
                                        <label for="checkbox210"></label>
                                    </div>
                                </th>
                                <th>Product</th>
                                <th class="text-align-right">Price</th>
                                <th class="text-align-center">Sales</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox211" type="checkbox" data-check-all>
                                        <label for="checkbox211"></label>
                                    </div>
                                </td>
                                <td>On the Road</td>
                                <td class="text-align-right">$25 224.2</td>
                                <td class="text-align-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#618fb0">13,14,16,15,4,14,20</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox212" type="checkbox" data-check-all>
                                        <label for="checkbox212"></label>
                                    </div>
                                </td>
                                <td>HP Core i7</td>
                                <td class="text-align-right">$87 346.1</td>
                                <td class="text-align-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#999">14,12,16,11,17,19,16</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox213" type="checkbox" data-check-all>
                                        <label for="checkbox213"></label>
                                    </div>
                                </td>
                                <td>Let's Dance</td>
                                <td class="text-align-right">$57 944.6</td>
                                <td class="text-align-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#f0b518">11,17,19,16,14,12,16</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox214" type="checkbox" data-check-all>
                                        <label for="checkbox214"></label>
                                    </div>
                                </td>
                                <td>Air Pro</td>
                                <td class="text-align-right">$118 533.1</td>
                                <td class="text-align-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#e5603b">13,14,20,16,15,4,14</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="checkbox215" type="checkbox" data-check-all>
                                        <label for="checkbox215"></label>
                                    </div>
                                </td>
                                <td>Version Control</td>
                                <td class="text-align-right">$72 854.5</td>
                                <td class="text-align-center">
                                    <div class="sparkline" data-type="bar" data-bar-color="#618fb0">16,15,4,14,13,14,20</div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
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
        <!-- page specific libs -->
        <script src="lib/jquery.sparkline/index.js"></script>

        <!-- page application js -->
        <script src="js/tables-static.js"></script>

</body>
</html>