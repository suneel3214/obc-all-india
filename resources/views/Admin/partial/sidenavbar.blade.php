<div class="page-main">

<!--APP-SIDEBAR-->
<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" style="text-decoration:none!important;" href="#">
                <h6 style="color:black;">OBC-ALL-INDIA</h6>
            </a><!-- LOGO -->
        </div>
        <ul class="side-menu">
            <li><h3>Dashboard</h3></li>
            @if(in_array("super_admin", Auth::user()->roles->toArray()))
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;"  data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li><h3>Social Worker's & Worker's</h3></li>
                <li>
                    <a class="side-menu__item" style="text-decoration:none;" href="{{url('users')}}"><i class="side-menu__icon fe fe-package"></i><span class="side-menu__label">Admin</span></a>
                </li>
                <li>
                    <a class="side-menu__item" style="text-decoration:none;" href="{{url('state/admin')}}"><i class="side-menu__icon fe fe-package"></i><span class="side-menu__label">State Admin</span></a>
                </li>
                <li>
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">District Admin</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{url('dist/urban/admin')}}" style="text-decoration:none;" class="slide-item">District Urban Admin</a></li>
                        <li><a href="{{url('dist/rural/admin')}}" style="text-decoration:none;" class="slide-item">District Rural Admin</a></li>
                    </ul>
                </li>
                
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Block Admin</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{url('block/urban/admin')}}" style="text-decoration:none;" class="slide-item">Block Urban Admin</a></li>
                        <li><a href="{{url('block/rural/admin')}}" style="text-decoration:none;" class="slide-item">Block Rural Admin</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{url('punchayat/admin')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Panchayat Admin</span></a>
                </li>

                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{url('village/admin')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Village Admin</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{url('member/admin/all-member')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">All Member's</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Master</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{route('medias.index')}}" style="text-decoration:none;" class="slide-item">Media</a></li>
                        <li><a href="#" style="text-decoration:none;" class="slide-item">Services</a></li>
                        <li><a href="#" style="text-decoration:none;" class="slide-item">Team</a></li>
                        <li><a href="#" style="text-decoration:none;" class="slide-item">Project</a></li>
                        <li><a href="#" style="text-decoration:none;" class="slide-item">Group</a></li>
                        <li><a href="#" style="text-decoration:none;" class="slide-item">Gallery</a></li>
                    </ul>
                </li>
           @endif
           @if(in_array("state_admin", Auth::user()->roles->toArray()))
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;"  data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li><h3>All Social Worker's & Worker's</h3></li>
                <li>
                    <a class="side-menu__item" style="text-decoration:none;" href="#"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">District Admin</span></a>
                    <ul class="slide-menu">
                        <li><a href="{{url('dist/urban/admin')}}" style="text-decoration:none;" class="slide-item">District Urban Admin</a></li>
                        <li><a href="{{url('dist/rural/admin')}}" style="text-decoration:none;" class="slide-item">District Rural Admin</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Block Admin</span></a>
                    <ul class="slide-menu">
                        <li><a href="{{url('block/urban/admin')}}" style="text-decoration:none;" class="slide-item">Block Urban Admin</a></li>
                        <li><a href="{{url('block/rural/admin')}}" style="text-decoration:none;" class="slide-item">Block Rural Admin</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{url('punchayat/admin')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Punchayat Admin</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{url('village/admin')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Village Admin</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{route('members.index')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Member's</span></a>
                </li>
           @endif
           @if(in_array("distic_admin", Auth::user()->roles->toArray()))
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;"  data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li><h3>All Social Worker's & Worker's</h3></li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Block Admin</span></a>
                    <ul class="slide-menu">
                        <li><a href="{{url('block/urban/admin')}}" style="text-decoration:none;" class="slide-item">Block Urban Admin</a></li>
                        <li><a href="{{url('block/rural/admin')}}" style="text-decoration:none;" class="slide-item">Block Rural Admin</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{url('punchayat/admin')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Punchayat Admin</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{url('village/admin')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Village Admin</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{route('members.index')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Member's</span></a>
                </li>
           @endif
           @if(in_array("block_admin", Auth::user()->roles->toArray()))
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;"  data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li><h3>All Social Worker's & Worker's</h3></li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{url('punchayat/admin')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Punchayat Admin</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{url('village/admin')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Village Admin</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{route('members.index')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Member's</span></a>
                </li>
           @endif

           @if(in_array("punchayat_admin", Auth::user()->roles->toArray()))
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;"  data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li><h3>All Social Worker's & Worker's</h3></li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{url('village/admin')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">Village Admin</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{route('members.index')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">member's</span></a>
                </li>
           @endif

           @if(in_array("village_admin", Auth::user()->roles->toArray()))
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;"  data-bs-toggle="slide" href="#"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li><h3>All Social Worker's & Worker's</h3></li>
                <li class="slide">
                    <a class="side-menu__item" style="text-decoration:none;" data-bs-toggle="slide" href="{{route('members.index')}}"><i class="side-menu__icon fe fe-globe"></i><span class="side-menu__label">member's</span></a>
                </li>
           @endif
        </ul>
    </aside>
    <!--/APP-SIDEBAR-->