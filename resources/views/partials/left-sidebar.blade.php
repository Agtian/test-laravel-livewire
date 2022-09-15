@php
    $current_route = request()->route()->getName();
@endphp

<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Bootstrap Sidebar</h3>
    </div>

    <ul class="list-unstyled components">
        <p>Dummy Heading</p>
        <li class="{{ $current_route == 'home' ? 'active' : ''  }}">
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li class="{{ $current_route == 'installation' || 'counter' || 'data-binding' ? 'active' : ''  }}">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="{{ $current_route == 'installation' || 'counter' || 'data-binding' ? 'true' : 'false'  }}" class="dropdown-toggle {{ $current_route == 'installation' ? '' : 'collapsed'  }}">Getting Started</a>
            <ul class="list-unstyled collapse {{ $current_route == 'installation' || 'counter' || 'data-binding' ? 'show' : ''  }}" id="homeSubmenu">
                <li>
                    <a href="{{ route('counter') }}">Test Counter</a>
                </li>
                <li>
                    <a href="{{ route('installation') }}" class="active">Installation</a>
                </li>
                <li>
                    <a href="{{ route('data-binding') }}">Data Binding</a>
                </li>
                <li>
                    <a href="#">Actions</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">About</a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
        </li>
        <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
        </li>
    </ul>
</nav>