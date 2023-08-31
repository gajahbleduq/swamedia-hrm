<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#">
                            <i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon"
                                data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon"
                                data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon"
                                data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon"
                                data-feather="check-square"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                class="ficon text-warning" data-feather="star"></i></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                                data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag"
                        href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag"><a
                            class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i>
                            English</a><a class="dropdown-item" href="#" data-language="fr"><i
                                class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"
                            data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item"
                            href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                            data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                            data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-cart me-25"><a class="nav-link" href="#"
                        data-bs-toggle="dropdown"><i class="ficon" data-feather="shopping-cart"></i><span
                            class="badge rounded-pill bg-primary badge-up cart-item-count">6</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">My Cart</h4>
                                <div class="badge rounded-pill badge-light-primary">4 Items</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list">
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="<?= base_url(); ?>assets/app-assets/images/pages/eCommerce/1.png" alt="donuts"
                                    width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> Apple watch 5</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$374.90</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="<?= base_url(); ?>assets/app-assets/images/pages/eCommerce/7.png" alt="donuts"
                                    width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> Google Home Mini</a></h6><small
                                            class="cart-item-by">By Google</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="3">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$129.40</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="<?= base_url(); ?>assets/app-assets/images/pages/eCommerce/2.png" alt="donuts"
                                    width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> iPhone 11 Pro</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="2">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$699.00</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="<?= base_url(); ?>assets/app-assets/images/pages/eCommerce/3.png" alt="donuts"
                                    width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> iMac Pro</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$4,999.00</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="<?= base_url(); ?>assets/app-assets/images/pages/eCommerce/5.png" alt="donuts"
                                    width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> MacBook Pro</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$2,999.00</h5>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer">
                            <div class="d-flex justify-content-between mb-1">
                                <h6 class="fw-bolder mb-0">Total:</h6>
                                <h6 class="text-primary fw-bolder mb-0">$10,999.00</h6>
                            </div><a class="btn btn-primary w-100" href="app-ecommerce-checkout.html">Checkout</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#"
                        data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                            class="badge rounded-pill bg-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                                <div class="badge rounded-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list"><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img
                                                src="<?= base_url(); ?>assets/app-assets/images/portrait/small/avatar-s-15.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Congratulation Sam
                                                🎉</span>winner!</p><small class="notification-text"> Won the monthly
                                            best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img
                                                src="<?= base_url(); ?>assets/app-assets/images/portrait/small/avatar-s-3.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">New
                                                message</span>&nbsp;received</p><small class="notification-text"> You
                                            have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Revised Order
                                                👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc.
                                            order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="list-item d-flex align-items-center">
                                <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                                <div class="form-check form-check-primary form-switch">
                                    <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                                    <label class="form-check-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Server
                                                down</span>&nbsp;registered</p><small class="notification-text"> USA
                                            Server is down due to high CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Sales
                                                report</span>&nbsp;generated</p><small class="notification-text"> Last
                                            month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon"
                                                    data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage
                                        </p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all
                                notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">Tomi
                                Mulhartono</span><span class="user-status">Employee</span></div><span
                            class="avatar"><img class="round" src="<?= base_url(); ?>assets/images/user.png"
                                alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i>
                            Profile</a><a class="dropdown-item" href="app-email.html"><i class="me-50"
                                data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i
                                class="me-50" data-feather="check-square"></i> Task</a><a class="dropdown-item"
                            href="app-chat.html"><i class="me-50" data-feather="message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item"
                            href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i>
                            Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50"
                                data-feather="credit-card"></i> Pricing</a><a class="dropdown-item"
                            href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a><a
                            class="dropdown-item" href="auth-login-cover.html"><i class="me-50"
                                data-feather="power"></i> Logout</a>
                    </div> -->
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item" href="<?= base_url(); ?>hrm/info"><i class="me-50"
                                data-feather="user"></i>
                            Profile</a><a class="dropdown-item" href="<?= base_url(); ?>eoffice/messages"><i
                                class="me-50" data-feather="mail"></i> Messages</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="me-50"
                                data-feather="settings"></i>
                            Settings</a><a class="dropdown-item" href="<?= base_url(); ?>login"><i class="me-50"
                                data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= base_url(); ?>assets/app-assets/images/icons/xls.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                            Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= base_url(); ?>assets/app-assets/images/icons/jpg.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= base_url(); ?>assets/app-assets/images/icons/pdf.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="<?= base_url(); ?>assets/app-assets/images/icons/doc.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img
                            src="<?= base_url(); ?>assets/app-assets/images/portrait/small/avatar-s-8.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img
                            src="<?= base_url(); ?>assets/app-assets/images/portrait/small/avatar-s-1.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img
                            src="<?= base_url(); ?>assets/app-assets/images/portrait/small/avatar-s-14.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img
                            src="<?= base_url(); ?>assets/app-assets/images/portrait/small/avatar-s-6.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75"
                        data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto">
                    <a class="navbar-brand" href="https://swamedia.co.id/">
                        <span class="brand-logo">
                            <img src="<?= base_url(); ?>assets/images/icon.png" alt="Swamedia Informatika">
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?= $this->uri->segment(1) == 'dashboard' ? 'active' : ''  ?> nav-item">
                    <a class="d-flex align-items-center" href="<?= base_url(); ?>dashboard"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span>
                        <!-- <span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a> -->
                </li>
                <!-- e-Office Menu -->
                <li class=" navigation-header"><span data-i18n="User Interface">e-Office</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class="<?= $this->uri->segment(2) == 'announcement' ? 'active' : ''  ?> nav-item"><a
                        class="d-flex align-items-center" href="<?= base_url(); ?>eoffice/announcement"><i
                            data-feather="bell"></i><span class="menu-title text-truncate"
                            data-i18n="Announcement">Announcement</span></a>
                </li>
                <li
                    class="nav-item <?= $this->uri->segment(2) == 'messages' || $this->uri->segment(2) == 'inbox' || $this->uri->segment(2) == 'outbox' ? 'active' : ''  ?>">
                    <a class="d-flex align-items-center" href="#"><i data-feather="mail"></i><span
                            class="menu-title text-truncate" data-i18n="Messages">
                            Messages</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'messages' ? 'active' : ''  ?>"
                                href="<?= base_url(); ?>eoffice/messages"><i data-feather="edit"></i><span
                                    class="menu-item text-truncate" data-i18n="New Message">New Message</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'inbox' ? 'active' : ''  ?>"
                                href="<?= base_url(); ?>eoffice/inbox"><i data-feather="inbox"></i><span
                                    class="menu-item text-truncate" data-i18n="Inbox">Inbox</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'outbox' ? 'active' : ''  ?>"
                                href="<?= base_url(); ?>eoffice/outbox"><i data-feather="send"></i><span
                                    class="menu-item text-truncate" data-i18n="Outbox">Outbox</span></a>
                        </li>
                    </ul>
                </li>
                <li class="<?= $this->uri->segment(2) == 'rules' ? 'active' : ''  ?> nav-item"><a
                        class="d-flex align-items-center" href="<?= base_url(); ?>eoffice/rules"><i
                            data-feather="check-square"></i><span class="menu-title text-truncate"
                            data-i18n="Todo">Rules</span></a>
                </li>
                <li class="<?= $this->uri->segment(2) == 'employees' ? 'active' : ''  ?> nav-item"><a
                        class="d-flex align-items-center" href="<?= base_url(); ?>eoffice/employees"><i
                            data-feather="info"></i><span class="menu-title text-truncate"
                            data-i18n="Employess Info">Employees Info</span></a>
                </li>
                <li class="<?= $this->uri->segment(2) == 'calendar' ? 'active' : ''  ?> nav-item"><a
                        class="d-flex align-items-center" href="<?= base_url(); ?>eoffice/calendar"><i
                            data-feather="calendar"></i><span class="menu-title text-truncate"
                            data-i18n="Calendar">Calendar</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="User Interface">HR Management</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li
                    class="nav-item <?= $this->uri->segment(2) == 'info' || $this->uri->segment(2) == 'skills' || $this->uri->segment(2) == 'education' || $this->uri->segment(2) == 'training' || $this->uri->segment(2) == 'experience' || $this->uri->segment(2) == 'family' ? 'active' : '' ?>">
                    <a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span
                            class="menu-title text-truncate" data-i18n="Personal Information">Personal
                            Information</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'info' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/info"><i data-feather="user"></i><span
                                    class="menu-item text-truncate" data-i18n="Profile">Profile</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'skills' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/skills"><i data-feather="monitor"></i><span
                                    class="menu-item text-truncate" data-i18n="Skills">Skills</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'education' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/education"><i data-feather="bookmark"></i><span
                                    class="menu-item text-truncate" data-i18n="Education">Education</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'training' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/training"><i data-feather="globe"></i><span
                                    class="menu-item text-truncate" data-i18n="Training">Training</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'experience' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/experience"><i data-feather="briefcase"></i><span
                                    class="menu-item text-truncate" data-i18n="Experience">Work Experience</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'family' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/family"><i data-feather="grid"></i><span
                                    class="menu-item text-truncate" data-i18n="Family">Family</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="users"></i><span
                            class="menu-title text-truncate" data-i18n="Organization Structures">Organization
                            Structures</span></a>
                </li>
                <li
                    class="nav-item <?= $this->uri->segment(2) == 'permit' && $this->uri->segment(3) == 'request' || $this->uri->segment(2) == 'permit' && $this->uri->segment(3) == 'inbox' || $this->uri->segment(2) == 'permit' && $this->uri->segment(3) == 'review' || $this->uri->segment(2) == 'permit' && $this->uri->segment(3) == 'completed' || $this->uri->segment(2) == 'permit' && $this->uri->segment(3) == 'quota' ? 'active' : '' ?>">
                    <a class="d-flex align-items-center" href="#"><i data-feather="map-pin"></i><span
                            class="menu-title text-truncate" data-i18n="Permit Request">
                            Permit Request</span></a>
                    <ul class=" menu-content">
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'permit' && $this->uri->segment(3) == 'request' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/permit/request"><i data-feather="edit"></i><span
                                    class="menu-item text-truncate" data-i18n="Request">Request</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'permit' && $this->uri->segment(3) == 'inbox' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/permit/inbox"><i data-feather="inbox"></i><span
                                    class="menu-item text-truncate" data-i18n="Inbox">Inbox</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'permit' && $this->uri->segment(3) == 'review' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/permit/review"><i data-feather="clock"></i><span
                                    class="menu-item text-truncate" data-i18n="In Review">In Review</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'permit' && $this->uri->segment(3) == 'completed' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/permit/completed"><i data-feather="check"></i><span
                                    class="menu-item text-truncate" data-i18n="Completed">Completed</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'permit' && $this->uri->segment(3) == 'quota' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/permit/quota"><i data-feather="database"></i><span
                                    class="menu-item text-truncate" data-i18n="Quota">Quota</span></a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item <?= $this->uri->segment(2) == 'leave' && $this->uri->segment(3) == 'request' || $this->uri->segment(2) == 'leave' && $this->uri->segment(3) == 'inbox' || $this->uri->segment(2) == 'leave' && $this->uri->segment(3) == 'review' || $this->uri->segment(2) == 'leave' && $this->uri->segment(3) == 'completed' || $this->uri->segment(2) == 'leave' && $this->uri->segment(3) == 'quota' ? 'active' : '' ?>">
                    <a class="d-flex align-items-center" href="#"><i data-feather="thermometer"></i><span
                            class="menu-title text-truncate" data-i18n="Leave Request">
                            Leave Request</span></a>
                    <ul class=" menu-content">
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'leave' && $this->uri->segment(3) == 'request' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/leave/request"><i data-feather="edit"></i><span
                                    class="menu-item text-truncate" data-i18n="Request">Request</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'leave' && $this->uri->segment(3) == 'inbox' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/leave/inbox"><i data-feather="inbox"></i><span
                                    class="menu-item text-truncate" data-i18n="Inbox">Inbox</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'leave' && $this->uri->segment(3) == 'review' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/leave/review"><i data-feather="clock"></i><span
                                    class="menu-item text-truncate" data-i18n="In Review">In Review</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'leave' && $this->uri->segment(3) == 'completed' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/leave/completed"><i data-feather="check"></i><span
                                    class="menu-item text-truncate" data-i18n="Completed">Completed</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'leave' && $this->uri->segment(3) == 'quota' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/leave/quota"><i data-feather="database"></i><span
                                    class="menu-item text-truncate" data-i18n="Quota">Quota</span></a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item <?= $this->uri->segment(2) == 'travel' && $this->uri->segment(3) == 'request' || $this->uri->segment(2) == 'travel' && $this->uri->segment(3) == 'inbox' || $this->uri->segment(2) == 'travel' && $this->uri->segment(3) == 'review' || $this->uri->segment(2) == 'travel' && $this->uri->segment(3) == 'completed' ? 'active' : '' ?>">
                    <a class="d-flex align-items-center" href="#"><i data-feather="map"></i><span
                            class="menu-title text-truncate" data-i18n="Travel Request">
                            Travel Request</span></a>
                    <ul class=" menu-content">
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'travel' && $this->uri->segment(3) == 'request' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/travel/request"><i data-feather="edit"></i><span
                                    class="menu-item text-truncate" data-i18n="Request">Request</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'travel' && $this->uri->segment(3) == 'inbox' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/travel/inbox"><i data-feather="inbox"></i><span
                                    class="menu-item text-truncate" data-i18n="Inbox">Inbox</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'travel' && $this->uri->segment(3) == 'review' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/travel/review"><i data-feather="clock"></i><span
                                    class="menu-item text-truncate" data-i18n="In Review">In Review</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(2) == 'travel' && $this->uri->segment(3) == 'completed' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>hrm/travel/completed"><i data-feather="check"></i><span
                                    class="menu-item text-truncate" data-i18n="Completed">Completed</span></a>
                        </li>
                    </ul>
                </li>
                <li
                    class="<?= $this->uri->segment(2) == 'travel' && $this->uri->segment(3) == 'expense' ? 'active' : '' ?> nav-item">
                    <a class="d-flex align-items-center" href="<?= base_url(); ?>hrm/travel/expense"><i
                            data-feather="archive"></i><span class="menu-title text-truncate"
                            data-i18n="Travel Expense">Travel
                            Expense</span></a>
                </li>
                <li class="<?= $this->uri->segment(2) == 'medical-claim' ? 'active' : ''  ?> nav-item"><a
                        class="d-flex align-items-center" href="<?= base_url(); ?>hrm/medical-claim"><i
                            data-feather="award"></i><span class="menu-title text-truncate"
                            data-i18n="Medical Claim">Medical
                            Claim</span></a>
                </li>
                <li
                    class="nav-item <?= $this->uri->segment(1) == 'bpjs' && $this->uri->segment(2) == 'form' || $this->uri->segment(1) == 'bpjs' && $this->uri->segment(2) == 'employees' || $this->uri->segment(1) == 'bpjs' && $this->uri->segment(2) == 'employee-list' ? 'active' : '' ?>">
                    <a class="d-flex align-items-center" href="#"><i data-feather="shield"></i><span
                            class="menu-title text-truncate" data-i18n="BPJS">
                            BPJS</span></a>
                    <ul class=" menu-content">
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(1) == 'bpjs' && $this->uri->segment(2) == 'form' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>bpjs/form"><i data-feather="book-open"></i><span
                                    class="menu-item text-truncate" data-i18n="BPJS Form">BPJS Form</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(1) == 'bpjs' && $this->uri->segment(2) == 'employees' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>bpjs/employees"><i data-feather="users"></i><span
                                    class="menu-item text-truncate" data-i18n="BPJS Employees">BPJS Employees</span></a>
                        </li>
                        <li><a class="d-flex align-items-center <?= $this->uri->segment(1) == 'bpjs' && $this->uri->segment(2) == 'employee-list' ? 'active' : '' ?>"
                                href="<?= base_url(); ?>bpjs/employee-list"><i data-feather="list"></i><span
                                    class="menu-item text-truncate" data-i18n="Employee Lists">Employee List</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="#"><i data-feather="activity"></i><span
                            class="menu-title text-truncate" data-i18n="Timesheet & Performance">
                            Timesheet & Performance</span></a>
                    <ul class=" menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="book"></i><span
                                    class="menu-item text-truncate" data-i18n="Rekap">Recap</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="tag"></i><span
                                    class="menu-item text-truncate" data-i18n="Per Tahun">Years</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="layers"></i><span
                                    class="menu-item text-truncate" data-i18n="Details">Details</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="trending-up"></i><span class="menu-title text-truncate"
                            data-i18n="Overtime">Overtime</span></a>
                </li>

                <!-- Digital Learnings Menu -->
                <li class=" navigation-header"><span data-i18n="Digital &amp; Learnings">Digital Learnings</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="link"></i><span
                            class="menu-title text-truncate" data-i18n="Blog">Blog</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="book"></i><span
                            class="menu-title text-truncate" data-i18n="e-Book">e-Book</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="video"></i><span
                            class="menu-title text-truncate" data-i18n="Video">Video</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->