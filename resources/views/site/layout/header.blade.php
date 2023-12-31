<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @component('components.seo.headgeral')
    @endcomponent

<style>

.cookiealert {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    margin: 0 !important;
    z-index: 999;
    opacity: 0;
    visibility: hidden;
    border-radius: 0;
    transform: translateY(100%);
    transition: all 500ms ease-out;
    color: #ecf0f1;
    background: #212327 url({{  asset('site/assets/img/image.webp') }});
}

.cookiealert.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0%);
    transition-delay: 1000ms;
}

.cookiealert a {
    text-decoration: underline
}

.cookiealert .acceptcookies {
    margin-left: 10px;
    vertical-align: baseline;
}

</style>
@yield('schema')
</head>

<body>
    <h1 style="display:none;">@yield('title')</h1>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0"
        style="background:{{ $customization->bg_header_color }}!important">
        <div class="container-fluid d-flex align-items-center justify-content-between" id="header-div">
            <a href="{{ env('APP_URL') }}" title="{{ $configuration->company }}" alt="{{ $configuration->company }}">
                <img id="logoId" src="{{ asset('storage/' . $configuration->logoheader) }}" height="60px">

            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    <li class="nav-link"><a href="{{ env('APP_URL') }}"
                            style="color:{{ $customization->nav_text_color }}!important" title="Início"> Início </a>

                    </li>
                    @foreach ($navlinks as $category)
                        <li><a class="nav-link " href="{{ route('site.single', $category->slug . config('APP_CIDADE_SLUG')) }}"
                                style="color:{{ $customization->nav_text_color }}!important" title="{{ $category->name . ' ' . config('APP_CIDADE')  }}">{{ $category->name }}</a>
                        </li>
                    @endforeach

                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>

            </nav><!-- .navbar -->


            @php $useragent=$_SERVER['HTTP_USER_AGENT']; @endphp
            @if (preg_match(
                    '/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',
                    $useragent) ||
                    preg_match(
                        '/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| ||a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',
                        substr($useragent, 0, 4)))
                <a id="whats-menu"
                    href="https://api.whatsapp.com/send?phone={{ $configuration->whatsapp }}&amp;text=Entrei em contato através do site {{ Request::url() }}"
                    class="btn-getstarted scrollto pulse-button" title="Orçamento" target="_blank"><i
                        class="bi bi-whatsapp"></i> Orçamento</a>
            @else
                <a id="whats-menu"
                    href="https://web.whatsapp.com/send?phone={{ $configuration->whatsapp }}&amp;text=Entrei em contato através do site {{ Request::url() }}"
                    class="btn-getstarted scrollto pulse-button" title="Orçamento" target="_blank"><i
                        class="bi bi-whatsapp"></i> Orçamento</a>
            @endif
            </li>

        </div>
    </header><!-- End Header -->
