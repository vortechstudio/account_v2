<!-- Menu -->
<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
        <ul class="menu-inner py-1">
            @foreach(\Pharaonic\Laravel\Menus\Models\Menu::section("account_head")->get() as $menu)
            <!-- Page -->
            <li class="menu-item {{ current_url($menu->url) ? 'menu-active' : '' }}">
                <a href="{{ $menu->url }}" class="menu-link @if(count($menu->children) != 0) menu-toggle @endif">
                    @if(isset($menu->icon))
                        <i class="menu-icon {{ $menu->icon }}"></i>
                    @endif
                    <div data-i18n="{{ $menu->translations()->first()->title }}">{{ $menu->translations()->first()->title }}</div>
                </a>
                @if(count($menu->children) != 0)
                    <ul class="menu-sub">
                        @foreach($menu->children as $sub)
                            <li class="menu-item">
                                <a href="{{ $sub->url }}" class="menu-link">
                                    <div data-i18n="{{ $sub->translations()->first()->title }}">{{ $sub->translations()->first()->title }}</div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</aside>
<!-- / Menu -->
