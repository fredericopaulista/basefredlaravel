<footer id="footer" class="footer" >

    <div class="footer-content" style="background:{{ $customization->bg_footer_color }}!important">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
                <a href="{{ env('APP_URL') }}" title="{{ $configuration->company }}" alt="{{ $configuration->company }}">
                    <img src="{{ asset('storage/' . $configuration->logofooter) }}" height="60px">

                </a>
              <p>
                @if($configuration->address != null)
                    {{ $configuration->address }}<br>
                    {{ $configuration->neighborhood }}<br>
                    CEP: {{ $configuration->cep }}
                 @endif
                 <br>
                {{ $configuration->city }} / {{ $configuration->state }}<br><br>
                <strong>Telefone:</strong> <a href="tel:{{ $configuration->phone }}" title="Telefone Contato">{{ $configuration->phone }}</a><br>
                <strong>Whatsapp:</strong>@php $useragent=$_SERVER['HTTP_USER_AGENT']; @endphp
                @if (preg_match(
                        '/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',
                        $useragent) ||
                        preg_match(
                            '/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| ||a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',
                            substr($useragent, 0, 4)))
                    <a id="whats-footer"
                        href="https://api.whatsapp.com/send?phone={{ $configuration->whatsapp }}&amp;text=Entrei em contato através do site {{ Request::url() }}"
                        title="Orçamento" target="_blank">{{ $configuration->whatsapp }}</a>
                @else
                    <a id="whats-footer"
                        href="https://web.whatsapp.com/send?phone={{ $configuration->whatsapp }}&amp;text=Entrei em contato através do site {{ Request::url() }}"
                         title="Orçamento" target="_blank">{{ $configuration->whatsapp }}</a>
                @endif

                <br>
                <strong>Email:</strong> <a href="mailto:{{ $configuration->email }}">{{ $configuration->email }}</a><br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links Úteis</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ env('APP_URL') }}" title="Início">Início</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ env('APP_URL') }}" title="Início">{{ $configuration->company }}</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('site.contato') }}" title="Contato">Contato</a></li>

              @foreach($pages as $page)
              <li><i class="bi bi-chevron-right"></i> <a href="{{ env('APP_URL') }}/{{ $page->slug }}" alt="{{ $page->title }}" title="{{ $page->title }}">{{ $page->title }}</a></li>
              @endforeach

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossos Serviços</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Faça seu orçamento! É prático e rápido</h4>

            <form action="{{ route('site.contatoEnviar') }}" method="post"  >
                {{ csrf_field() }}
                <input type="hidden" name="url" value="{{ url()->current() }}" />
                <div class="row">
                    <div class="col-md-6 form-group mb-4">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Nome" required value="{{ old('name') }}">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Email" required value="{{ old('email') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" name="whatsapp" class="form-control" id="whatsapp"
                            placeholder="Whatsapp" required value="{{ old('whatsapp') }}">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="subject" id="subject"
                        placeholder="Assunto" required value="{{ old('subject') }}">
                    </div>
                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" placeholder="Messagem" required>{{old('message')}}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <div class="input-group mt-6">
                      @php
                      $n1 = 4;
                      $n2 = 5;
                      $result = $n1 + $n2;
                      @endphp
                      <div class="input-group-addon" style="margin-top:20px">
                        <img src="{{ asset('site/assets/img/soma.jpg') }}" style="margin-right:10px;height:30px;"></div>
                      <input type="hidden" name="n1" value="<?php echo $n1 ?>" />
                      <input type="hidden" name="n2" value="<?php echo $n2 ?>" />
                      <input type="hidden" name="result" value="<?php echo $result ?>" />
                      <input type="text" name="soma_user" class="form-control" id="resposta" placeholder="Resposta" required="required" " style="margin-right:10px;height:30px;margin-top: 20px;"/>
                    </div>
                <div class="text-center" style="margin-top:20px">
                    <button type="submit" class="btn btn-success mt-8">Enviar Mensagem</button>
                </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center" style="background:{{ $customization->bg_footer_color }}!important">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>{{ $configuration->company }}</span></strong>. Todos os Direitos Reservados
          </div>
          <div class="credits">

            Desenvolvido por <a href="https://fredericomoura.com.br/">Frederico Moura</a>
           / <a href="{{ route('site.policy') }}" title="Políticas de Privacidade">Políticas de Privacidade</a> /
            <a href="{{ route('site.terms') }}" title="Termos de Uso">Termos de Uso</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="{{ $configuration->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="{{ $configuration->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="{{ $configuration->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="{{ $configuration->youtube }}" class="linkedin"><i class="bi bi-youtube"></i></a>
          <a href="{{ $configuration->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
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
