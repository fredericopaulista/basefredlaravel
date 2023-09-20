@extends('site.layout.master')
@component('site.seo.tag', [
    'tag' => $tag,
    'servicePhoto' => $servicePhoto,
    'citydata' => $citydata,
    'related' => $related,
    'cityslug' => $cityslug,
])
@endcomponent

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">

                    <ol>
                        <li><a href="{{ env('APP_URL') }}" title="Início">Início</a></li>
                        <li><a href="{{ route('site.tags', ['tag' => $tag->slug . config('APP_CIDADE_SLUG'), 'tagid' => $tag->id, 'service' => $servicePhoto->id]) }}"
                                title="{{ $tag->name }} {{ $citydata->name }}">{{ $tag->name }}
                                {{ $citydata->name }}</a></li>
                        <li>{{ $servicePhoto->name }}</li>
                    </ol>
                </div>

            </div>
        </div><!-- End Breadcrumbs --><!-- End Breadcrumbs -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">
                            <h2 class="title">{{ $tag->name }} {{ $citydata->name }}</h2><br>
                            <p>{{ $tag->briefDescription }}</p>

                            <div class="post-img" style="margin-top: 10px">
                                <img src="{{ $servicePhoto->getFirstMediaUrl('services') }}" alt="{{ $tag->name }}"
                                    class="img-fluid">

                            </div>

                            <h2 class="title">{{ $tag->name }}</h2>



                            <div class="content">
                                @if (config('APP_CIDADE'))
                                    {!! str_replace('geocity', ' ' . config('APP_CIDADE'), $tag->body) !!}
                                @else
                                    <p>{!! str_replace('geocity', '', $tag->body) !!}</p>
                                @endif
                                <p>
                                    {!! $servicePhoto->description !!}
                                </p>



                            </div><!-- End post content -->
                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>


                                <i class="bi bi-tags"></i>
                                <ul class="tags">

                                    @foreach ($servicePhoto->tags as $tag)
                                        <li><a href="{{ route('site.tags', ['tag' => $tag->slug . config('APP_CIDADE_SLUG'), 'tagid' => $tag->id, 'service' => $servicePhoto->id]) }}"
                                                title="{{ $tag->name }} {{ $citydata->name }}">{{ $tag->name }}</a>
                                        </li>
                                    @endforeach



                                </ul>
                            </div><!-- End meta bottom -->

                            <div class="content">
                                {!! $servicePhoto->videoTitle !!} <br><br>

                                <iframe id="videoatual" width="100%" height="560"
                                    src="https://www.youtube.com/embed/{{ $servicePhoto->video }}"
                                    title="Agência de Growth Marketing" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen=""></iframe>


                            </div><!-- End post content -->
                        </article><!-- End blog post -->





                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">
                            <div class="sidebar-item categories">
                                <strong class="sidebar-title">Fale Conosco</strong>
                                <div class="mt-3">
                                    @php $useragent=$_SERVER['HTTP_USER_AGENT']; @endphp
                                    @if (preg_match(
                                            '/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',
                                            $useragent) ||
                                            preg_match(
                                                '/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| ||a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',
                                                substr($useragent, 0, 4)))
                                        <a id="whats-menu"
                                            href="https://api.whatsapp.com/send?phone={{ $configuration->whatsapp }}&amp;text=Entrei em contato através do site {{ Request::url() }}"
                                            title="Orçamento" target="_blank"><img
                                                src="{{ asset('storage/' . $configuration->banner_gif) }}"
                                                alt="{{ $servicePhoto->name }}" width="99%"></a>
                                    @else
                                        <a id="whats-menu"
                                            href="https://web.whatsapp.com/send?phone={{ $configuration->whatsapp }}&amp;text=Entrei em contato através do site {{ Request::url() }}"
                                            title="Orçamento" target="_blank"><img
                                                src="{{ asset('storage/' . $configuration->banner_gif) }}"
                                                alt="{{ $servicePhoto->name }}" width="99%"></a>
                                    @endif
                                </div>
                            </div><!-- End sidebar categories-->

                            <!-- End Blog Sidebar -->

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="title" style="margin-top:20px;text-align:center;">Serviços Relacionados
                            {{ $tag->name }} {{ $citydata->name }}</h4><br>
                        <div class="row gy-5">
                            @foreach ($related as $related_service)
                                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="service-item">
                                        <div class="img">

                                            <a
                                                href="{{ route('site.servico', ['category' => $related_service->category->slug . $cityslug, 'service' => $related_service->slug . $cityslug]) }}">
                                                <img src="{{ $related_service->getFirstMediaUrl('services') }}"
                                                    class="img-fluid" alt="{{ $related_service->title }}"></a>
                                        </div>
                                        <div class="details position-relative">
                                            <div class="icon">
                                                {{-- <i class="bi bi-chat-square-text"></i> --}}
                                            </div>
                                            <a href="{{ route('site.servico', ['category' => $related_service->category->slug . $cityslug, 'service' => $related_service->slug . $cityslug]) }}"
                                                class="stretched-link">
                                                <h3>{{ $related_service->title }}</h3>
                                            </a>
                                            <p>{{ $related_service->briefDescription }}</p>
                                        </div>
                                    </div>
                                </div><!-- End Service Item -->
                            @endforeach


                        </div>
                    </div>
                </div>
        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->
@endsection
@section('scripts')
    {{-- <!-- jQuery -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<!-- Scroll to Fixed JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollToFixed/1.0.8/jquery-scrolltofixed-min.js'></script>
<script>
    $(document).ready(function () {

      $('.js-sidebar').scrollToFixed({
          marginTop: 20,
          limit: $('.js-sidebar-holder').outerHeight() + 90 - $('.js-sidebar').outerHeight()
        });

      $('.js-navigation-item').bind('click', function (e) {
        e.preventDefault();

        var target = $(this).attr("href");

        if (target.length > 1) {
            $('html, body').stop().animate({
              scrollTop: $(target).offset().top
            }, 600, function () {
              location.hash = target;
            });
        }

        return false;
      });
    });

    $(window).scroll(function () {
      var scrollDistance = $(window).scrollTop();

      $('.article-section').each(function (i) {
        if ($(this).position().top - 2 <= scrollDistance) {
          $('.js-navigation-list .js-navigation-item.active').removeClass('active');
          $('.js-navigation-list .js-navigation-item').eq(i).addClass('active');
        }
      });
    }).scroll();
    </script> --}}
@endsection
