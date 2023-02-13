<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li>
            <a href="{{url('dashboard')}}">
                <i data-feather="home"></i>
                <span data-key="t-dashboard">Dashboard</span>
            </a>
        </li>
        <li>
            @can('viewsection-side')   
            <a href="{{url('section-list')}}">
                <i data-feather="clipboard"></i>
                <span data-key="t-dashboard">Section</span>
            </a>
            @endcan
        </li>
        <li>
            @can('viewsection-side')   
            <a href="{{url('office-list')}}">
                <i data-feather="clipboard"></i>
                <span data-key="t-dashboard">Office</span>
            </a>
            @endcan
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="folder"></i>
                <span data-key="t-multi-level">Assets Management</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
                <li>
                    <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">Assets list</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{url('asset-list')}}" data-key="t-level-2-1">All</a></li>
                        <li><a href="{{url('electronics')}}" data-key="t-level-2-1">Electronics</a></li>
                        <li><a href="{{url('furniture')}}" data-key="t-level-2-2">Furniture</a></li>
                        <li><a href="{{url('buildings')}}" data-key="t-level-2-2">Buildings</a></li>
                        <li><a href="{{url('transport')}}" data-key="t-level-2-2">Transports</a></li>
                    </ul>
                </li> 
                <li>
                    <a href="{{url('order-list')}}"  data-key="t-level-1-2">Requests</a>
                </li>
                @can('viewworkshop-side')
                <li><a href="{{url('workshop')}}"  data-key="t-level-1-2">Workshop</a></li>
                @endcan
                @can('viewdisposal-side')
                <li><a href="{{url('disposal')}}"  data-key="t-level-1-2">Disposal</a></li>
                @endcan
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="settings"></i>
                <span data-key="t-apps">User Management</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li>
                    @can('viewuser-side')  
                    <a href="{{url('user-list')}}">
                        <span data-key="t-calendar">Users</span>
                    </a>
                    @endcan
                </li>
                <li>
                    @can('viewpermission-side')  
                    <a href="{{url('permission-list')}}">
                        <span data-key="t-calendar">Permissions</span>
                    </a>
                    @endcan
                </li>
                <li>
                    @can('viewrole-side')  
                    <a href="{{url('role-list')}}">
                        <span data-key="t-calendar">Roles</span>
                    </a>
                    @endcan
                </li>
                <li>
                    <a href="{{url('change-password')}}">
                        <span data-key="t-calendar">Change Password</span>
                    </a>
                </li>
               
            </ul>
        </li>
        <li>
            <a href="{{ url('logout') }}"  onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();">
                <i data-feather="power"></i>
                <span data-key="t-dashboard">Logout</span>
            </a>
            <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>