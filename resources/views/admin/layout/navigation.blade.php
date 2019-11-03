<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('back') }}"><img src="{{ asset('public/others') }}/{{$shareData ['admin_logo'] }}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="{{ url('back') }}"><img src="{{ asset('public/others') }}/{{$shareData ['admin_logo'] }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ url('back') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                       

                        @permission(['Permission Update','All'])
                        <a href="{{url('back\permission')}}"> <i class="menu-icon fa fa-laptop"></i>Permissions </a>
                        @endpermission

                        @permission(['Permission Update','All'])
                        <a href="{{url('back\role')}}"> <i class="menu-icon fa fa-laptop"></i>Roles </a>
                        @endpermission

                        @permission(['Permission Update','All'])
                        <a href="{{url('back\author')}}"> <i class="menu-icon fa fa-laptop"></i>Authors </a>
                        @endpermission

                         @permission(['Category List','All'])
                        <a href="{{url('back\categories')}}"> <i class="menu-icon fa fa-laptop"></i>Categories </a>
                        @endpermission
                        @permission(['Post List','All'])
                        <a href="{{url('back\posts')}}"> <i class="menu-icon fa fa-laptop"></i>Posts </a>
                        @endpermission
                        @permission(['System Settings','All'])
                        <a href="{{url('back\settings')}}"> <i class="menu-icon fa fa-laptop"></i>Settings </a>
                        @endpermission



                    </li>
                   </ul>
               </div>
        </nav>
    </aside><!-- /#left-panel -->
