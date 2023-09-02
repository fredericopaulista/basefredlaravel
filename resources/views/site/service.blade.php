@extends('site.layout.master')


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">

                    <ol>
                        <li><a href="{{ env('APP_URL') }}">Início</a></li>
                        <li><a href="{{ route('site.categoria', $categoryc->slug . $cityslug) }}">{{ $categoryc->name }}
                                {{ $citydata->name }}</a></li>
                        <li>{{ $servicec->name }} {{ $citydata->name }}</li>
                    </ol>
                </div>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

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
                                <h3 class="sidebar-title">Search</h3>
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
