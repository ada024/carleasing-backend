<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <div class="app-brand">
            <a href="{{ route('admin.car') }}">
                <span class="brand-name">Cars2go</span>
            </a>
        </div>
        <div class="sidebar-scrollbar">
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                       data-target="#dashboard"
                       aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Manage</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse show" id="dashboard"
                        data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('admin.car') }}">
                                    <span class="nav-text">Cars</span>

                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
        <hr class="separator"/>
    </div>
</aside>
