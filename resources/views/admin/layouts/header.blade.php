<header class="py-3 lg:py-0 bg-white shadow-md" data-aos="fade-down" id="navbar">
    <div class="lg:pl-4 px-8 flex flex-wrap items-center">
        <div class="items-center">
            <a href="{{ env('APP_URL') }}" class="flex items-center text-xl w-sidebar mr-4 hover:no-underline">
                <span class="mr-1 -mt-1 text-primary">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 263 125" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                        <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                            fill-rule="evenodd">
                            <g id="Profile-Photo" transform="translate(-67.000000, -117.000000)">
                                <path
                                    d="M154.333333,130.8 C109.355556,130.8 81.2444444,153.244444 70,198.133333 C86.8666667,175.688889 106.544444,167.272222 129.033333,172.883333 C141.864493,176.084784 151.035588,185.374914 161.186823,195.658833 C177.723652,212.411117 196.862946,231.8 238.666667,231.8 C283.644444,231.8 311.755556,209.355556 323,164.466667 C306.133333,186.911111 286.455556,195.327778 263.966667,189.716667 C251.135507,186.515216 241.964412,177.225086 231.813177,166.941167 C215.276348,150.188883 196.137054,130.8 154.333333,130.8 Z"
                                    id="Path" fill="#494949"></path>
                                <path
                                    d="M151.333333,140.8 C106.355556,140.8 78.2444444,163.244444 67,208.133333 C83.8666667,185.688889 103.544444,177.272222 126.033333,182.883333 C138.864493,186.084784 148.035588,195.374914 158.186823,205.658833 C174.723652,222.411117 193.862946,241.8 235.666667,241.8 C280.644444,241.8 308.755556,219.355556 320,174.466667 C303.133333,196.911111 283.455556,205.327778 260.966667,199.716667 C248.135507,196.515216 238.964412,187.225086 228.813177,176.941167 C212.276348,160.188883 193.137054,140.8 151.333333,140.8 Z"
                                    id="Path-Copy-2" fill="#494949"></path>
                                <path
                                    d="M159.666667,120.8 C116.111111,120.8 88.8888888,142.577778 78,186.133333 C94.3333333,164.355556 113.388889,156.188889 135.166667,161.633333 C147.592098,164.739691 156.473198,173.753876 166.303445,183.732333 C182.317371,199.987025 200.851469,218.8 241.333333,218.8 C284.888888,218.8 312.111112,197.022222 323,153.466667 C306.666667,175.244444 287.611112,183.411111 265.833333,177.966667 C253.407902,174.860309 244.526802,165.846124 234.696555,155.867667 C218.682629,139.612975 200.148531,120.8 159.666667,120.8 Z"
                                    id="Path-Copy" stroke="#494949" stroke-width="6" fill="#FFFFFF">
                                </path>
                            </g>
                        </g>
                    </svg>
                </span>
                <span><strong>DashBoard </strong></span>
            </a>
        </div>

        <div class="flex-1 flex justify-between">
            <!-- This is an example component -->
            <div class="relative text-gray-darker hidden lg:flex flex-grow">
                <a href="{{ route('sitemap.index') }}" title="Sitemap" style="text-align: center">Sitemap</a>
            </div>
            {{-- <div class="relative text-gray-darker hidden lg:flex flex-grow">
                <a href="#" title="Sitemap">Sitemap</a>
                <input type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                        x="0px" y="0px" viewBox="0 0 56.966 56.966"
                        style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                        width="512px" height="512px">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>
            </div> --}}
        </div>

        <label data-toggle="sidebar" class="pointer-cursor lg:hidden block"><svg
                class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20"
                height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg></label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">

            <ul
                class="lg:flex items-center justify-between text-md text-gray-900 font-semibold pt-4 lg:pt-0">


                <li class="mt-3">

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-success" type="submit" >{{ __('Log Out') }}</button>
                    </form>
                </li>
            </ul>


        </div>
    </div>
</header>
