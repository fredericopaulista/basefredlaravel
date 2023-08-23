<footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>HeroBiz</h3>
              <p>
                {{ $configuration->address }} <br>
                {{ $configuration->city }}<br><br>
                <strong>Telefone:</strong> {{ $configuration->phone }}<br>
                <strong>Whatsapp:</strong> {{ $configuration->whatsapp }}<br>
                <strong>Email:</strong> {{ $configuration->email }}<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links Úteis</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ env('APP_URL') }}">Início</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('site.contato') }}">Contato</a></li>
              @foreach($pages as $page)
              <li><i class="bi bi-chevron-right"></i> <a href="{{ env('APP_URL') }}/{{ $page->slug }}" alt="{{ $page->title }}" title="{{ $page->title }}">{{ $page->title }}</a></li>
              @endforeach

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>{{ $configuration->company }}</span></strong>. Todos os Direitos Reservados
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Desenvolvido por <a href="https://fredericomoura.com.br/">Frederico Moura</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('site/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('site/assets/js/main.js') }}"></script>
  @yield('scripts')
</body>

</html>
