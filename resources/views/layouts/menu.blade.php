{{--@if ((count($menu->children) > 0) AND ($menu->parent_id > 0))--}}
{{--    <li><a href="#">+{{ $menu->link }} <i class="fa fa-chevron-right"></i></a>--}}
{{--@else--}}
{{--    <li><a href="#">-{{ $menu->link }}</a>--}}
{{--@endif--}}

    @if (count($menu->children) > 0)
        <ul>
            @foreach($menu->children as $menu)
                <li>
                    <a href="#">-{{ $menu->link }} <i class="fa fa-chevron-right"></i></a>
                </li>
            @endforeach
        </ul>
    @endif

{{--    </li>--}}