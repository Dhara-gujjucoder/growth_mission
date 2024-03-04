<div class="navbar-icon"><a href="#!" class="menu-toggle desk-none"><img class="nav-bar-icon"
            src="{{ asset('customer/images/navbar-icon.svg') }}" alt=""><img class="navclose-icon"
            src="{{ asset('customer/images/close-icon.svg') }}" alt=""></a></div>
<div class="switch-box">
    <div class="switch-box-info">
        <div class="switch-box-h">
            <h3>Switch company profile</h3>
        </div>
        <div class="switch-acc active">
            <div class="switch-h">
                <img src="{{ asset('customer/images/dashboard-logo.svg') }}" alt="" />
                <h3>Hourglass Inc</h3>
            </div>
            <img class="check" src="{{ asset('customer/images/check-icon.svg') }}" alt="" />
        </div>
        <div class="switch-acc">
            <div class="switch-h">
                <img src="{{ asset('customer/images/teamviewer-icon.svg') }}" alt="" />
                <h3>Teamviewer</h3>
            </div>
            <img class="check" src="{{ asset('customer/images/check-icon.svg') }}" alt="" />
        </div>
        <div class="switch-acc">
            <div class="switch-h">
                <img src="{{ asset('customer/images/moniepoint-icon.svg') }}" alt="" />
                <h3>Moniepoint</h3>
            </div>
            <img class="check" src="{{ asset('customer/images/check-icon.svg') }}" alt="" />
        </div>
        <div class="line"></div>
        <div class="add-company"><a href=""><img src="{{ asset('customer/images/plus-gray-icon.svg') }}"
                    alt="" /><span>Add new company</span></a></div>
    </div>
</div>
<div class="leftsecpos">
    <div class="left-top-sec">
        <div class="account-name">
            <div class="account-info">
                <div class="account-holder">
                    <img src="{{ asset('customer/images/dashboard-logo.svg') }}" alt="" />
                    <h3>Hourglass Inc</h3>
                </div>
                <div class="switch-acc"><img src="{{ asset('customer/images/switch.arrow.svg') }}" alt="" />
                </div>
            </div>
        </div>
        <div class="search-form dark-inp" data-bs-toggle="modal" data-bs-target="#search-modal"><input type="text"
                class="form-control form-input search-dark-icon" placeholder="Search"></div>
        <div class="left-navbar">
            <ul>
                <li class="active">
                    <a href="overview.php"><img src="{{ asset('customer/images/overview-icon.svg') }}" alt="">
                        Overview</a>
                </li>
                <li>
                    <a href="campaign.php"><img src="{{ asset('customer/images/campaigns-icon.svg') }}" alt="">
                        Campaigns</a>
                </li>
                <li>
                    <a href="overview.html"><img src="{{ asset('customer/images/projects.svg') }}" alt="">
                        Projects</a>
                </li>
                <li>
                    <a href="appointments.html"><img src="{{ asset('customer/images/appointments-icon.svg') }}"
                            alt=""> Appointments</a>
                </li>
                <li>
                    <a href="tasks.html"><img src="{{ asset('customer/images/tasks-icon.svg') }}" alt="">
                        Tasks</a>
                </li>
                <li>
                    <a href="billing.html"><img src="{{ asset('customer/images/billing-icon.svg') }}" alt="">
                        Billing</a>
                </li>
                <li>
                    <a href="user.html"><img src="{{ asset('customer/images/users-icon.svg') }}" alt="">
                        Users</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="leftftmenu">
        <div class="left-bottom-box">
            <div class="left-navbar ft-bot-navbar">
                <ul>
                    <li>
                        <a class="support-box" href="javascript:void(0);"><img
                                src="{{ asset('customer/images/support-icon.svg') }}" alt=""> Support</a>
                    </li>
                    <li>
                        <a href="settings.html"><img src="{{ asset('customer/images/settings-icon.svg') }}"
                                alt=""> Settings</a>
                    </li>
                </ul>
            </div>
            <div class="userbox">
                <div class="userbox-flex">
                    <div class="userbox-info">
                        <img src="{{ asset('customer/images/avatar.svg') }}" />
                        <div class="user-meta">
                            <h3>George Robinson</h3>
                            <span>george@automovv...</span>
                        </div>
                    </div>
                    <div class="userinfo-dots"><a href="javascript:void(0);"><img
                                src="{{ asset('customer/images/three-dots.svg') }}" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="userprofile-logout">
    <ul>
        <li><a href="#"><img src="{{ asset('customer/images/user-icon.svg') }}" alt=""> Profile</a></li>
        <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><img
                    src="{{ asset('customer/images/logout-icon.svg') }}" alt=""> Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </ul>
</div>

<div class="support-main">
    <div class="support-h">
        <h3>Support</h3>
        <a href="javascript:void(0);"><img src="{{ asset('customer/images/x-close.svg') }}" alt=""></a>
    </div>
    <div class="sepreater with-pad"></div>
    <div class="support-body">
        <div class="support-con">
            <h2>Book a request</h2>
            <p>Send in a message and we'll open a ticket for you where you can write all your complains to our customer
                support and get a response</p>
        </div>
        <div class="support-btns">
            <a data-bs-toggle="modal" data-bs-target="#exampleModalConvo" class="btn btn-primary btn-full">Start a
                conversation</a>
            <a class="cancel-btn btn btn-primary btn-white btn-full">See all tickets</a>
        </div>
    </div>
    <div class="sepreater with-pad"></div>
    <div class="support-footer">
        <a href="">Frequently asked questions <img
                src="{{ asset('customer/images/arrow-narrow-up-right.svg') }}" alt=""></a>
    </div>
</div>
<!-- Modal -->
<div class="modal fade notification-modal" id="search-modal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div class="search-form"><img src="{{ asset('customer/images/search-icon.svg') }}"
                        alt=""><input type="text" class="form-control form-input"
                        placeholder="Search anything"></div>
            </div>
            <div class="modal-body">
                <div class="search-box-con">
                    <h6 class="popup-title">Suggestions</h6>
                    <div class="suggestion-list">
                        <div class="suggestion-box">
                            <a href="#">
                                <div class="suggesstion-con">
                                    <div class="suggest-icon"><img src="{{ asset('customer/images/file-icon.svg') }}"
                                            alt="" /></div>
                                    <h3>Create new project</h3>
                                </div>
                                <span>Command</span>
                            </a>
                        </div>
                        <div class="suggestion-box">
                            <a href="#">
                                <div class="suggesstion-con">
                                    <div class="suggest-icon"><img
                                            src="{{ asset('customer/images/campaign-file-icon.svg') }}"
                                            alt="" /></div>
                                    <h3>Create a new campaign</h3>
                                </div>
                                <span>Command</span>
                            </a>
                        </div>
                        <div class="suggestion-box">
                            <a href="#">
                                <div class="suggesstion-con">
                                    <div class="suggest-icon"><img
                                            src="{{ asset('customer/images/calendar-plus-icon.svg') }}"
                                            alt="" /></div>
                                    <h3>View all appointments</h3>
                                </div>
                                <span>Command</span>
                            </a>
                        </div>
                    </div>
                    <div class="recent-search">
                        <h6 class="popup-title">Recent</h6>
                        <div class="recent-list">
                            <div class="suggestion-box recent-search-box">
                                <a href="#">
                                    <div class="suggesstion-con">
                                        <div class="suggest-icon"><img
                                                src="{{ asset('customer/images/campaign-file-icon.svg') }}"
                                                alt="" /></div>
                                        <h3>Snapchat Campaign</h3>
                                    </div>
                                    <span>Campaign</span>
                                </a>
                            </div>
                            <div class="suggestion-box recent-search-box">
                                <a href="#">
                                    <div class="suggesstion-con">
                                        <div class="suggest-icon"><img
                                                src="{{ asset('customer/images/life-buoy-icon.svg') }}"
                                                alt="" /></div>
                                        <h3>Create a new support conversation</h3>
                                    </div>
                                    <span>Command</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="navigation-btns">
                    <span>Navigate</span>
                    <div class="modgraybtn"><a href=""><img
                                src="{{ asset('customer/images/arrow-up-icon.svg') }}" alt="" /></a></div>
                    <div class="modgraybtn"><a href=""><img
                                src="{{ asset('customer/images/arrow-down-icon.svg') }}" alt="" /></a></div>
                </div>
                <div class="navigation-btns modbtnclose" data-bs-dismiss="modal">
                    <span>Close</span>
                    <div class="modgraybtn close-text"><a href="">esc</a></div>
                </div>
                <div class="navigation-btns">
                    <span class="command-txt">Open Command</span>
                    <div class="modgraybtn"><a href=""><img
                                src="{{ asset('customer/images/corner-down-left-icon.svg') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
