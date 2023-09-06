@extends('site.layout.master')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">

                    <ol>
                        <li><a href="{{ route('site.home') }}">Início</a></li>
                        <li>Termos de Uso</li>
                    </ol>
                </div>

            </div>
        </div><!-- End Breadcrumbs -->
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <section id="contact" class="contact">



            <div class="container">

                <div class="row gy-5 gx-lg-5">
                    <div class="col-lg-12">
                        <h2><span style="color: rgb(68, 68, 68);">Termos de Uso</span></h2>
                        <h2><span style="color: rgb(68, 68, 68);">1. Termos</span></h2>
                        <p><span style="color: rgb(68, 68, 68);">Ao acessar ao site <a href="{{ env('APP_URL') }}" title="{{ $configuration->company }}">{{ $configuration->company }}</a>, concorda em cumprir estes termos de serviço, todas as leis e regulamentos
                                aplicáveis ​​e concorda que é responsável pelo cumprimento de todas as leis locais
                                aplicáveis. Se você não concordar com algum desses termos, está proibido de usar ou acessar
                                este site. Os materiais contidos neste site são protegidos pelas leis de direitos autorais e
                                marcas comerciais aplicáveis.</span></p>
                        <h2><span style="color: rgb(68, 68, 68);">2. Uso de Licença</span></h2>
                        <p><span style="color: rgb(68, 68, 68);">É concedida permissão para baixar temporariamente uma cópia
                                dos materiais (informações ou software) no site {{ $configuration->company }} , apenas para visualização
                                transitória pessoal e não comercial. Esta é a concessão de uma licença, não uma
                                transferência de título e, sob esta licença, você não pode:&nbsp;</span></p>
                        <ol>
                            <li><span style="color: rgb(68, 68, 68);">modificar ou copiar os materiais;&nbsp;</span></li>
                            <li><span style="color: rgb(68, 68, 68);">usar os materiais para qualquer finalidade comercial
                                    ou para exibição pública (comercial ou não comercial);&nbsp;</span></li>
                            <li><span style="color: rgb(68, 68, 68);">tentar descompilar ou fazer engenharia reversa de
                                    qualquer software contido no site {{ $configuration->company }};&nbsp;</span></li>
                            <li><span style="color: rgb(68, 68, 68);">remover quaisquer direitos autorais ou outras notações
                                    de propriedade dos materiais; ou&nbsp;</span></li>
                            <li><span style="color: rgb(68, 68, 68);">transferir os materiais para outra pessoa ou 'espelhe'
                                    os materiais em qualquer outro servidor.</span></li>
                        </ol>
                        <p><span style="color: rgb(68, 68, 68);">Esta licença será automaticamente rescindida se você violar
                                alguma dessas restrições e poderá ser rescindida por {{ $configuration->company }} a qualquer momento. Ao
                                encerrar a visualização desses materiais ou após o término desta licença, você deve apagar
                                todos os materiais baixados em sua posse, seja em formato eletrónico ou impresso.</span></p>
                        <h2><span style="color: rgb(68, 68, 68);">3. Isenção de responsabilidade</span></h2>
                        <ol>
                            <li><span style="color: rgb(68, 68, 68);">Os materiais no site da {{ $configuration->company }} são fornecidos
                                    'como estão'. {{ $configuration->company }} não oferece garantias, expressas ou implícitas, e, por este
                                    meio, isenta e nega todas as outras garantias, incluindo, sem limitação, garantias
                                    implícitas ou condições de comercialização, adequação a um fim específico ou não
                                    violação de propriedade intelectual ou outra violação de direitos.</span></li>
                            <li><span style="color: rgb(68, 68, 68);">Além disso, o {{ $configuration->company }} não garante ou faz qualquer
                                    representação relativa à precisão, aos resultados prováveis ​​ou à confiabilidade do uso
                                    dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites
                                    vinculados a este site.</span></li>
                        </ol>
                        <h2><span style="color: rgb(68, 68, 68);">4. Limitações</span></h2>
                        <p><span style="color: rgb(68, 68, 68);">Em nenhum caso o {{ $configuration->company }} ou seus fornecedores serão
                                responsáveis ​​por quaisquer danos (incluindo, sem limitação, danos por perda de dados ou
                                lucro ou devido a interrupção dos negócios) decorrentes do uso ou da incapacidade de usar os
                                materiais em {{ $configuration->company }}, mesmo que {{ $configuration->company }} ou um representante autorizado da Nome do
                                Site tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como
                                algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de
                                responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se
                                aplicar a você.</span></p>
                        <h2><span style="color: rgb(68, 68, 68);">5. Precisão dos materiais</span></h2>
                        <p><span style="color: rgb(68, 68, 68);">Os materiais exibidos no site da {{ $configuration->company }} podem incluir
                                erros técnicos, tipográficos ou fotográficos. {{ $configuration->company }} não garante que qualquer material
                                em seu site seja preciso, completo ou atual. {{ $configuration->company }} pode fazer alterações nos
                                materiais contidos em seu site a qualquer momento, sem aviso prévio. No entanto, {{ $configuration->company }} não se compromete a atualizar os materiais.</span></p>
                        <h2><span style="color: rgb(68, 68, 68);">6. Links</span></h2>
                        <p><span style="color: rgb(68, 68, 68);">O {{ $configuration->company }} não analisou todos os sites vinculados ao
                                seu site e não é responsável pelo conteúdo de nenhum site vinculado. A inclusão de qualquer
                                link não implica endosso por {{ $configuration->company }} do site. O uso de qualquer site vinculado é por
                                conta e risco do usuário.</span></p>
                        <p><br></p>
                        <h3><span style="color: rgb(68, 68, 68);">Modificações</span></h3>
                        <p><span style="color: rgb(68, 68, 68);">O {{ $configuration->company }} pode revisar estes termos de serviço do site
                                a qualquer momento, sem aviso prévio. Ao usar este site, você concorda em ficar vinculado à
                                versão atual desses termos de serviço.</span></p>
                        <h3><span style="color: rgb(68, 68, 68);">Lei aplicável</span></h3>
                        <p><span style="color: rgb(68, 68, 68);">Estes termos e condições são regidos e interpretados de
                                acordo com as leis do {{ $configuration->company }} e você se submete irrevogavelmente à jurisdição exclusiva
                                dos tribunais naquele estado ou localidade.</span></p>
                    </div>


                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>
@endsection
