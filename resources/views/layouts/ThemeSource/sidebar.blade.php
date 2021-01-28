@extends('layouts.ThemeSource.Header')
@section('Sidebar')
<!-- Page Container -->


<!-- Loading Container
<div class="loading-container">
    <div class="loader"></div>
</div>
-->
<!--  /Loading Container -->
<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
            <a href="{{url(auth()->user()->getRoleNames()[0].'/')}}" class="navbar-brand">
                    <small>
                        <img src="{{asset("assets/img/logo.png")}}" alt="" />
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">


                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="{{asset("assets/img/avatars/adam-jansen.jpg")}}">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>{{auth()->user()->name}}</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>{{auth()->user()->name}}</a></li>
                                <!--Avatar Area-->

                                <li class="dropdown-footer">
                                    <form  method="POST" action="{{url('logout')}}">
                                        @csrf
                                        <button type="submit">Sign out</button>
                                    </form>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                        no space must be between these elements-->
                        <!-- Settings -->
                    </ul>

                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /Navbar -->
<!-- Main Container -->
<div class="main-container container-fluid">
<div class="page-container">

<!-- Page Sidebar -->

        <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">
                <input type="text" class="searchinput" />
                <i class="searchicon fa fa-search"></i>
                <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
            </div>
            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <!--Dashboard-->



                <li>
                        <a href="{{url('/ChangePassword')}}">
                            <span class="menu-text">Change Password</span>
                        </a>
                    </li>



                <!--UI Elements-->
                @role('SystemAdministrator')
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text"> Users Management </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">

                        <li>
                            <a href="{{url('SystemAdministrator/CreateUser')}}">
                                <span class="menu-text">Create User</span>
                            </a>
                        </li>



                        <li>
                                <a href="{{url('SystemAdministrator/CreateCompany')}}">
                                    <span class="menu-text">Create Company</span>
                                </a>
                            </li>



                            <li>
                                <a href="{{url('SystemAdministrator/CreateNews')}}">
                                    <span class="menu-text">Store News</span>
                                </a>
                            </li>



                        <li>
                            <a href="{{url('SystemAdministrator/changeUserRole')}}">
                                <span class="menu-text">Change User Role</span>
                            </a>
                        </li>


                        <li>
                            <a href="{{url('SystemAdministrator/AssignDepartmentAdmin')}}">
                                <span class="menu-text">Assign Department Admin </span>
                            </a>
                        </li>


                        <li>
                                <a href="{{url('SystemAdministrator/CreateDepartment')}}">
                                    <span class="menu-text">Create Department  </span>
                                </a>
                            </li>



                    </ul>
                </li>

                    <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-file-excel-o"></i>
                        <span class="menu-text">Reports</span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">

                        <li>
                            <a href="{{url('SystemAdministrator/rTasks')}}">
                                <span class="menu-text">Tasks</span>
                            </a>
                        </li>






                    </ul>
                </li>





                @endrole


                @role('ClientAgent')
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-delicious"></i>
                        <span class="menu-text"> Ticket Management </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">

                        <li>
                            <a href="{{url('ClientAgent/CreateTicket')}}">
                                <span class="menu-text">Create Ticket</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('ClientAgent/ShowTicket')}}">
                                <span class="menu-text">Show Ticket</span>
                            </a>
                        </li>

                    </ul>
                </li>
                @endrole()





      @role('IwAgent')
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-delicious"></i>
                        <span class="menu-text"> Department  </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">

                        <li>
                            <a href="{{url('IwAgent/News')}}">
                                <span class="menu-text">News</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('IwAgent/profile')}}">
                                <span class="menu-text">My Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-excel-o"></i>
                            <span class="menu-text">Reports</span>
                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">

                            <li>
                                <a href="{{url('IwAgent/rTasks')}}">
                                    <span class="menu-text">Tasks</span>
                                </a>
                            </li>






                        </ul>
                    </li>



                @endrole()

     @role('IwDepartmentAdmin')
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-delicious"></i>
                        <span class="menu-text"> Department  </span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">

                        <li>
                            <a href="{{url('IwDepartmentAdmin/News')}}">
                                <span class="menu-text">News</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('IwDepartmentAdmin/profile')}}">
                                <span class="menu-text">My Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-excel-o"></i>
                            <span class="menu-text">Reports</span>
                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">

                            <li>
                                <a href="{{url('IwDepartmentAdmin/rTasks')}}">
                                    <span class="menu-text">Tasks</span>
                                </a>
                            </li>






                        </ul>
                    </li>


                @endrole()















                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-language"></i>
                        <span class="menu-text">language</span>
                        <i class="menu-expand"></i>
                    </a>

                    <ul class="submenu">

                        <li>
                            <a href="{{url('arabic')}}">
                                <span class="menu-text">Arabic</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('english')}}">
                                <span class="menu-text">English</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
            <!-- /Sidebar Menu -->
        </div>
<!-- /Page Sidebar -->

<!-- Chat Bar -->

        <div id="chatbar" class="page-chatbar">
            <div class="chatbar-contacts">
                <div class="contacts-search">
                    <input type="text" class="searchinput" placeholder="Search Contacts" />
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Your Contacts and Chat History</div>
                </div>
                <ul class="contacts-list">
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/divyia.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Divyia Philips</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                last week
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/nicolai-larson.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Adam Johnson</div>
                            <div class="contact-status">
                                <div class="offline"></div>
                                <div class="status">left 4 mins ago</div>
                            </div>
                            <div class="last-chat-time">
                                today
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/john-smith.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">John Smith</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                1:57 am
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/osvaldus-valutis.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Osvaldus Valutis</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                today
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/javi-jimenez.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Javi Jimenez</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                today
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/stephanie-walter.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Stephanie Walter</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                yesterday
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/sergey-azovskiy.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Sergey Azovskiy</div>
                            <div class="contact-status">
                                <div class="offline"></div>
                                <div class="status">offline since oct 24</div>
                            </div>
                            <div class="last-chat-time">
                                22 oct
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/lee-munroe.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Lee Munroe</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                today
                            </div>
                        </div>
                    </li>
                    <li class="contact">
                        <div class="contact-avatar">
                            <img src="assets/img/avatars/divyia.jpg" />
                        </div>
                        <div class="contact-info">
                            <div class="contact-name">Divyia Philips</div>
                            <div class="contact-status">
                                <div class="online"></div>
                                <div class="status">online</div>
                            </div>
                            <div class="last-chat-time">
                                last week
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="chatbar-messages" style="display: none;">
                <div class="messages-contact">
                    <div class="contact-avatar">
                        <img src="assets/img/avatars/divyia.jpg" />
                    </div>
                    <div class="contact-info">
                        <div class="contact-name">Divyia Philips</div>
                        <div class="contact-status">
                            <div class="online"></div>
                            <div class="status">online</div>
                        </div>
                        <div class="last-chat-time">
                            a moment ago
                        </div>
                        <div class="back">
                            <i class="fa fa-arrow-circle-left"></i>
                        </div>
                    </div>
                </div>
                <ul class="messages-list">
                    <li class="message">
                        <div class="message-info">
                            <div class="bullet"></div>
                            <div class="contact-name">Me</div>
                            <div class="message-time">10:14 AM, Today</div>
                        </div>
                        <div class="message-body">
                            Hi, Hope all is good. Are we meeting today?
                        </div>
                    </li>
                    <li class="message reply">
                        <div class="message-info">
                            <div class="bullet"></div>
                            <div class="contact-name">Divyia</div>
                            <div class="message-time">10:15 AM, Today</div>
                        </div>
                        <div class="message-body">
                            Hi, Hope all is good. Are we meeting today?
                        </div>
                    </li>
                    <li class="message">
                        <div class="message-info">
                            <div class="bullet"></div>
                            <div class="contact-name">Me</div>
                            <div class="message-time">10:14 AM, Today</div>
                        </div>
                        <div class="message-body">
                            Hi, Hope all is good. Are we meeting today?
                        </div>
                    </li>
                    <li class="message reply">
                        <div class="message-info">
                            <div class="bullet"></div>
                            <div class="contact-name">Divyia</div>
                            <div class="message-time">10:15 AM, Today</div>
                        </div>
                        <div class="message-body">
                            Hi, Hope all is good. Are we meeting today?
                        </div>
                    </li>
                    <li class="message">
                        <div class="message-info">
                            <div class="bullet"></div>
                            <div class="contact-name">Me</div>
                            <div class="message-time">10:14 AM, Today</div>
                        </div>
                        <div class="message-body">
                            Hi, Hope all is good. Are we meeting today?
                        </div>
                    </li>
                    <li class="message reply">
                        <div class="message-info">
                            <div class="bullet"></div>
                            <div class="contact-name">Divyia</div>
                            <div class="message-time">10:15 AM, Today</div>
                        </div>
                        <div class="message-body">
                            Hi, Hope all is good. Are we meeting today?
                        </div>
                    </li>
                </ul>
                <div class="send-message">
                        <span class="input-icon icon-right">
                            <textarea rows="4" class="form-control" placeholder="Type your message"></textarea>
                            <i class="fa fa-camera themeprimary"></i>
                        </span>
                </div>
            </div>
        </div>
<!-- /Chat Bar -->
</div>
</div>
@endsection

