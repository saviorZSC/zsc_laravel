<nav class="navbar navbar-default navbar-fixed-top main-navigation" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="" href="{{url('/')}}"><img class="navbar-nav-height nav-marginright" src="{{url('/image/logo_en.png')}}" alt="N-weaver log" /></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-exl-collapse">
            <ul id="navbarul" class="nav navbar-nav">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/feature/project')}}">Feature</a></li>
                <li><a href="{{url('/template')}}">Template</a></li>
                <li class="hidden-sm"><a href="{{url('/commuity')}}">Commuity</a></li>
                <li class="hidden-sm"><a href="{{url('/support')}}">Support</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::guest())
                    <li>
                        <a href="{{url('/auth/login')}}" >Login</a>
                    </li>
                    <li>
                        <a href="{{url('/auth/register')}}" >Register</a>
                    </li>
                @else
                    <li class="hidden-xs hidden-sm"><a class="padding-clear inblock" ><img src="{{Auth::user()->portrait}}"  class="user-image-size img-circle"/> </a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle inblock" data-toggle="dropdown">{{ isset(Auth::user()->name)?Auth::user()->name:"Login" }}<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">UserInfo</a> </li>
                            <li><a href="#">Project</a> </li>
                            <li><a href="#">Setting</a> </li>
                            <li><a href="{{url('/auth/logout')}}">Logout</a> </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav><!--/div.nav-->