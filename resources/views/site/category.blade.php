@extends('site.layout.master')

@component('site.seo.category', ['category' => $category, 'services' => $services, 'citydata' => $citydata])
@endcomponent
@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "WebSite",
      "name": "{{ $configuration->company }} {{ $configuration->city }}",
      "url": "{{ env('APP_URL') }}",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "{{ env('APP_URL') }}?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>
@endsection
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center" style="padding: 10px">

                    <ol>
                        <li><a href="{{ route('site.home') }}" title="{{ $category->name }}">Início</a></li>
                        <li>{{ $category->name }} {{ $citydata->name }}</li>
                    </ol>
                </div>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">

            <div class="container" data-aos="fade-up">
                <div class="d-flex justify-content-between align-items-center">
                    <div id="meuConteudo">


                        <label for="check" class="togButton">
                            <details>
                                <summary>
                                    <h2>{{ $category->name }} {{ $citydata->name }}</h2>
                                </summary>
                                @if (config('APP_CIDADE'))
                                {!! str_replace('geocity',' ' . config('APP_CIDADE'), $category->description) !!}</>
                                @else
                                {!! str_replace('geocity', '', $category->description) !!}
                                @endif
                            </details>
                        </label>
                    </div>

                </div>


                <div class="row g-5">

                    <div class="col-lg-12">

                        <div class="row gy-4 posts-list">


                            @foreach ($services as $service)
                                <div class="col-lg-4">
                                    <article class="d-flex flex-column">

                                        <div class="post-img">
                                            <a href="{{ route('site.servico', ['category' => $service->category->slug . $cityslug, 'service' => $service->slug . $cityslug]) }}"
                                                title="{{ $service->title }} ">
                                                <img src="{{ $service->getFirstMediaUrl('services') }}"
                                                    alt="{{ $service->title }}" title="{{ $service->title }}"
                                                    class="img-fluid"></a>

                                        </div>

                                        <h3 class="title">
                                            <a href="{{ route('site.servico', ['category' => $service->category->slug . $cityslug, 'service' => $service->slug . $cityslug]) }}"
                                                title="{{ $service->title }}">{{ $service->title }}</a>
                                        </h3>



                                        <div class="content">

                                                {!! $service->briefDescription !!}

                                        </div>

                                        <div class="read-more mt-auto align-self-end">

                                            <a href="{{ route('site.servico', ['category' => $service->category->slug . $cityslug, 'service' => $service->slug . $cityslug]) }}"
                                                title="{{ $service->title }}">Leia Mais</a>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->
                            @endforeach





                        </div><!-- End blog posts list -->

                        {{-- <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div><!-- End blog pagination --> --}}

                    </div>

                    {{-- <div class="col-lg-4">

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
                      <h4><a href="blog-post.html">Id quia et et ut maxime similique occaecati ut</a></h4>
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

          </div> --}}

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
@endsection
@section('scripts')
@endsection
