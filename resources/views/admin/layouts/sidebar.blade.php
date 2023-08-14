<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-dark sidebar-left bg-gray-darker" data-perfect-scrollbar>
            <div class="flex items-center sidebar-p-a border-b-2 bg-darker sidebar-account">
                <a href="#" class="flex items-center text-underline-0 text-body">
                    <div class="avatar w-12 h-12 mr-2">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                            alt="Avatar" class="rounded-full p-1 bg-darker border-1">
                    </div>
                    <div class="leading-none">

                        <div class="mb-1"><strong>{{ Auth::user()->name }}</strong></div>

                        <small class="text-muted text-xs">ACCOUNT MANAGER</small>
                    </div>

                </a>

            </div>

            {{-- <div class="sidebar-heading sidebar-m-t">Interno</div> --}}
            <ul class="sidebar-menu" id="demos_menu">
                <li class="sidebar-menu-item " @class(['active'=> request()->routeIs('dashboard') ])>
                    <a class="sidebar-menu-button" href="{{ route('dashboard') }}" @class(['active'=> request()->routeIs('dashboard') ])>
                        <span class="sidebar-menu-text">{{ __('Dashboard') }}</span>
                    </a>

                </li>
            </ul>
              <div class="sidebar-heading sidebar-m-t">Interno</div>
        <ul class="sidebar-menu" id="demos_menu">
                <li class="sidebar-menu-item ">
                    <a class="sidebar-menu-button" href="{{ route('categorias.index') }}" :active="request()->routeIs('categorias.index')">
                        <span class="sidebar-menu-text">{{ __('Categorias') }}</span>
                    </a>

                </li>
                <li class="sidebar-menu-item ">
                    <a class="sidebar-menu-button" href="{{ route('servicos.index') }}" :active="request()->routeIs('servicos.index')">
                        <span class="sidebar-menu-text">{{ __('Serviços') }}</span>
                    </a>

                </li>
                <li class="sidebar-menu-item ">
                    <a class="sidebar-menu-button" href="{{ route('tags.index') }}" :active="request()->routeIs('tags.index')">
                        <span class="sidebar-menu-text">{{ __('Tags') }}</span>
                    </a>

                </li>
                <li class="sidebar-menu-item ">
                <a class="sidebar-menu-button" href="{{ route('configuracoes.index') }}" :active="request()->routeIs('configuracoes.index')">
                    <span class="sidebar-menu-text">{{ __('Configurações Gerais') }}</span>
                </a>
                </li>
                <li class="sidebar-menu-item ">

                    <a class="sidebar-menu-button" href="{{ route('depoimentos.index') }}" :active="request()->routeIs('depoimentos.index')">
                        <span class="sidebar-menu-text">{{ __('Seo Manual') }}</span>
                    </a>
                </li>


                <div class="sidebar-heading sidebar-m-t">Definições Site</div>
                <li class="sidebar-menu-item ">
                <a class="sidebar-menu-button" href="{{ route('banners.index') }}" :active="request()->routeIs('banners.index')">
                    <span class="sidebar-menu-text">{{ __('Banners') }}</span>
                </a>
                </li>
                <a class="sidebar-menu-button" href="{{ route('faqs.index') }}" :active="request()->routeIs('faqs.index')">
                    <span class="sidebar-menu-text">{{ __('Faqs') }}</span>
                </a>
                <a class="sidebar-menu-button" href="{{ route('depoimentos.index') }}" :active="request()->routeIs('depoimentos.index')">
                    <span class="sidebar-menu-text">{{ __('Depoimentos') }}</span>
                </a>


            </ul>
            </div>



        </div>
    </div>
</div>
