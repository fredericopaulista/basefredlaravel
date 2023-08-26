@extends('site.layout.master')


@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">

            <ol>
              <li><a href="{{ env('APP_URL') }}">Início</a></li>

              <li>{{ $tag->name }}</li>
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
                <h2 class="title">{{ $tag->name }}</h2><br>
                <p>{{ $tag->briefDescription }}</p>
              <div class="post-img" style="margin-top: 10px">
                <img src="{{ $servicePhoto->getFirstMediaUrl('services') }}" alt="{{ $tag->name }}" class="img-fluid">

              </div>

              <h2 class="title">{{ $tag->name }}</h2>



              <div class="content">
                {{ $tag->body }}

                <p>
                 {{ $servicePhoto->description }}
                </p>



              </div><!-- End post content -->


              <div class="content">
                {!! $servicePhoto->videoTitle !!} <br><br>

                <iframe id="videoatual" width="100%" height="560" src="https://www.youtube.com/embed/{{  $servicePhoto->video  }}" title="Agência de Growth Marketing" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>


            </div><!-- End post content -->
            </article><!-- End blog post -->

            <div class="post-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div><!-- End post author -->



          </div>

          <div class="col-lg-4">

            <div class="sidebar">



              <div class="sidebar-item categories">
                <strong class="sidebar-title">Fale Conosco</strong>
                <div class="mt-3">
                  <img src="{{  asset( 'storage/' .$configuration->banner_gif) }}" alt="{{ $tag->name }}" width="99%">
                </div>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Serviços Relacionados</h3>

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



            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  @endsection
