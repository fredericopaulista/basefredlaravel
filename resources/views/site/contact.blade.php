@extends('site.layout.master')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">

                    <ol>
                        <li><a href="{{ route('site.home') }}">Início</a></li>
                        <li>Contato</li>
                    </ol>
                </div>

            </div>
        </div><!-- End Breadcrumbs -->
        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
        <!-- ======= On Focus Section ======= -->
        <section id="onfocus" class="onfocus">
            <div class="container-fluid p-2" data-aos="fade-up">

                <div class="row g-0">
                    <div class="col-lg-6 video-play position-relative">

                    </div>
                    <div class="col-lg-6">
                        <div class="content d-flex flex-column justify-content-center h-100">
                            <h3>Vamos conversar?</h3>
                            <p class="fst-italic">
                                Você está interessado em contratar a {{ $configuration->company }} ou quer fazer uma pergunta?
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> Se preferir, nos mande uma mensagem através do telefone WhatsApp ou ligue.
                                </li>
                                <li><i class="bi bi-check-circle"></i> Complete o formulário abaixo e um de nossos atendentes entrará em contato em até um dia útil.
                                    </li>
                                <li><i class="bi bi-check-circle"></i> O objetivo do nosso time de especialistas é ajudar você da melhor maneira possível. Por isso, precisamos das suas informações para direcionar nossa conversa!</li>
                            </ul>

                                    @php $useragent=$_SERVER['HTTP_USER_AGENT']; @endphp
                                    @if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| ||a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                                    <a id="whats-pagcontato"  href="https://api.whatsapp.com/send?phone={{  $configuration->whatsapp }}&amp;text=Entrei em contato através do site {{ Request::url() }}" class="read-more align-self-start" title="Orçamento" target="_blank"><i
                                        class="bi bi-arrow-right"></i> Entrar em Contato</a>
                                    @else
                                    <a id="whats-pagcontato" href="https://web.whatsapp.com/send?phone={{  $configuration->whatsapp }}&amp;text=Entrei em contato através do site {{ Request::url() }}" class="read-more align-self-start"  title="Orçamento" target="_blank"><i
                                        class="bi bi-arrow-right"></i> Entrar em Contato</a>
                                    @endif</li>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End On Focus Section -->

        <section id="contact" class="contact">
            <div class="container">

                <div class="section-header">
                    <h2>Contate-nos</h2>
                    <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad
                        dolores
                        adipisci aliquam.</p>
                </div>

            </div>

            <div class="map p-2">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240097.52706275598!2d-44.128864413861834!3d-19.902317567723042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa690cacacf2c33%3A0x5b35795e3ad23997!2sBelo%20Horizonte%2C%20MG!5e0!3m2!1spt-BR!2sbr!4v1692417472435!5m2!1spt-BR!2sbr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="container">

                <div class="row gy-5 gx-lg-5">

                    <div class="col-lg-4">

                        <div class="info">
                            <h3>Get in touch</h3>
                            <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi
                                minus.</p>

                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Localização:</h4>
                                    <p>{{ $configuration->address }},</p><br>
                                    <p>{{ $configuration->city }}/{{ $configuration->state }}</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>{{ $configuration->email }}</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Telefone:</h4>
                                    <p>{{ $configuration->phone }}</p>
                                </div>
                            </div><!-- End Info Item -->
                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Whatsapp:</h4>
                                    <p>{{ $configuration->whatsapp }}</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="{{ route('site.contatoEnviar') }}" method="post"  >
                            {{ csrf_field() }}
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

                            <div class="text-center"><button type="submit" class="btn btn-success mt-8">Enviar Mensagem</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>
@endsection
