<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Modern Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg"> -->
    <!-- Template CSS -->
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="index.html" class="brand-wrap">
                <img src="https://seeklogo.com/images/H/house-building-logo-E7BBA84AFA-seeklogo.com.png" class="logo" alt="Evara Dashboard">
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item">
                    <a class="menu-link" href="index.php"> <i class="icon material-icons md-home"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item has-submenu">
                    <a class="menu-link" href="page-products-list.html"> <i class="icon material-icons md-add_box"></i>
                        <span class="text">Manage Projects</span>
                    </a>
                    <div class="submenu">
                        <a href="/property">Create Property</a>
                        <a href="/construction_update">Construction Update</a>
                        
                        <a href="/showUpdate">Show Construction Update</a>
                         <!--<a href="page-products-grid-2.html">Product grid 2</a>
                        <a href="page-categories.html">Categories</a> -->
                    </div>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="/admin"> <i class="icon material-icons md-add_box"></i>
                        <span class="text">Admin</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="/admincontact"> <i class="icon material-icons md-add_box"></i>
                        <span class="text">Contacts</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="/getLead"> <i class="icon material-icons md-add_box"></i>
                        <span class="text">Leads</span>
                    </a>
                </li>
            </ul>
            <br>
            <br>
        </nav>
    </aside>
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform">
                    
                    <datalist id="search_terms">
                        <option value="Products">
                        <option value="New orders">
                        <option value="Apple iphone">
                        <option value="Ahmed Hassan">
                    </datalist>
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    
                    <li class="nav-item">
                        <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
                    </li>
                    
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="assets/imgs/people/avatar2.jpg" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            
                            
                            <a class="dropdown-item text-danger" href="/logout"><i class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>