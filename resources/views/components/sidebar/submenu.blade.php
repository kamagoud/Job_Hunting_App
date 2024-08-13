@props(['icon' => '', 'name' => '', 'links' => '' ])

<li class="submenu">
    <a href="#"><i class="la la-{{ $icon }}"></i> <span> {{ $name }}</span> <span class="menu-arrow"></span></a>
    <ul>
        @foreach ($links as $name => $link)
        <li>
            <a  class="{{ request()->routeIs($link) ? 'active' : '' }}" href="{{ route($link)}}">
                {{ $name }}
            </a>
        </li>
        @endforeach
    </ul>
</li>