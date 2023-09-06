@extends('site.layout.master')


@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">

                <ol>
                    <li><a href="{{ env('APP_URL') }}" title="Início">Início</a></li>

                    <li>{{ $servicec->name }} {{ $citydata->name }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-2">

                <div>
                    <span><a href="{{ route('site.single', $categoryc->slug . config('APP_CIDADE_SLUG')) }}" title="{{ $categoryc->name }} {{ $citydata->name }}" style="text-decoration: none">{{ $categoryc->name }}  {{ $citydata->name }}</a></span>
                </div>
                <div class="col-lg-8">

                    <article class="blog-details">
                        <h2 class="title">{{ $servicec->name }} {{ $citydata->name }}</h2><br>
                        <p>{{ $servicec->briefDescription }}</p>
                        <div class="post-img" style="margin-top: 10px">
                            <img src="{{ $servicec->getFirstMediaUrl('services') }}" alt="" class="img-fluid">
                        </div>





                        <div class="content">
                            {!! $servicec->description !!}

                        </div><!-- End post content -->



                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>


                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                @foreach ($servicec->tags as $tag)
                                    <li><a href="{{ route('site.tags', ['tag' => $tag->slug . config('APP_CIDADE_SLUG'), 'tagid' => $tag->id, 'service' => $servicec->id]) }}"
                                            title="{{ $tag->name }} {{ $citydata->name }}">{{ $tag->name }}</a>
                                    </li>
                                @endforeach


                            </ul>
                        </div><!-- End meta bottom -->
                        <div class="content">
                            {!! $servicec->videoTitle !!} <br><br>

                            <iframe id="videoatual" width="100%" height="560"
                                src="https://www.youtube.com/embed/{{ $servicec->video }}"
                                title="Agência de Growth Marketing" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen=""></iframe>


                        </div><!-- End post content -->

                    </article><!-- End blog post -->


                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Fale Conosco</h3>
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
                                         title="Orçamento" target="_blank"><img src="{{ asset('storage/' . $configuration->banner_gif)}}" alt="{{ $servicec->name }}" width="99%"></a>
                                @else
                                    <a id="whats-menu"
                                        href="https://web.whatsapp.com/send?phone={{ $configuration->whatsapp }}&amp;text=Entrei em contato através do site {{ Request::url() }}"
                                         title="Orçamento" target="_blank"><img src="{{ asset('storage/' . $configuration->banner_gif)}}" alt="{{ $servicec->name }}" width="99%"></a>
                                @endif

                            </div>

                            <form action="" class="mt-3">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="mt-3">
                                <li><a href="#">General <span>(25)</span></a></li>
                                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                <li><a href="#">Travel <span>(5)</span></a></li>
                                <li><a href="#">Design <span>(22)</span></a></li>
                                <li><a href="#">Creative <span>(8)</span></a></li>
                                <li><a href="#">Educaion <span>(14)</span></a></li>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Recent Posts</h3>

                            <div class="mt-3">

                                <div class="post-item mt-3">
                                    <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="blog-post.html">Nihil blanditiis at in nihil autem</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="blog-post.html">Quidem autem et impedit</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="blog-post.html">Id quia et et ut maxime similique occaecati ut</a>
                                        </h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="blog-post.html">Laborum corporis quo dara net para</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item">
                                    <img src="assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="blog-post.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                        <time datetime="2020-01-01">Jan 1, 2020</time>
                                    </div>
                                </div><!-- End recent post item-->

                            </div>

                        </div><!-- End sidebar recent posts-->

                        <div class="sidebar-item tags">
                            <h3 class="sidebar-title">Tags</h3>
                            <ul class="mt-3">
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">Smart</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End Blog Sidebar -->

                </div>
            </div>
            <div class="col-lg-12">
                <h4 class="title" style="margin-top:20px;text-align:center;">Serviços Relacionados {{ $servicec->name }} {{ $citydata->name }}</h4><br>
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
                                    <a href="{{ route('site.servico', ['category' => $related_service->category->slug . $cityslug, 'service' => $related_service->slug . $cityslug]) }}" class="stretched-link">
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
