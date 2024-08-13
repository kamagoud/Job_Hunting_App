@props(['name' => '', 'link' => '', 'icon' => ''])


<li class="{{ request()->routeIs($link) ? 'active' : '' }}"> 
    <a href="{{route($link)}}"><i class="la la-{{ $icon }}"></i> <span>{{ $name }}</span></a>
</li>