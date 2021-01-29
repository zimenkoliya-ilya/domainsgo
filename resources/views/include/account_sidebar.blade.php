<!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block col-2">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group sticky-top sticky-offset">
            
            <!-- Logo -->
            <li class="list-group-item logo-separator d-flex justify-content-center">
                <img loading="lazy" src="http://domains.go/img/demo-content/logo-white.png" alt="logo" width="150" height="50">
            </li>
            <a href="{{route('account.dashboard')}}" class="{{($account=="dashboard")?'':'bg-dark'}} list-group-item list-group-item-action " style="{{($account=='dashboard')?'background:#007bff; border-color:#6ea91d;':''}}">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="large material-icons">dashboard</i> &nbsp<span class="menu-collapsed">  Dashboard</span>
                </div>
            </a>
            <a href="{{route('account.expired')}}" class="{{($account=="expired")?'':'bg-dark'}} list-group-item list-group-item-action" style="{{($account=='expired')?'background:#007bff; border-color:#6ea91d;':''}}">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="large material-icons">watch_later</i> &nbsp<span class="menu-collapsed">Expiring/Expired</span>
                </div>
            </a>
            <a href="{{route('account.domains')}}" class="{{($account=="domains")?'':'bg-dark'}} list-group-item list-group-item-action" style="{{($account=='domains')?'background:#007bff; border-color:#6ea91d;':''}}">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="large material-icons">domain</i> &nbsp<span class="menu-collapsed">Domain List</span>
                </div>
            </a>
            <a href="{{route('account.profile')}}" class="{{($account=="profile")?'':'bg-dark'}} list-group-item list-group-item-action" style="{{($account=='profile')?'background:#007bff; border-color:#6ea91d;':''}}">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <i class="large material-icons">account_box</i> &nbsp<span class="menu-collapsed">Profile</span>
                </div>
            </a>
            
        </ul>
        <!-- List Group END-->
    </div>
    <!-- sidebar-container END -->