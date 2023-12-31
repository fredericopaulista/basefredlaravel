<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar as Configurações') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-errors class="mb-4" />
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('configuracoes.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mt-4 px-4">
                        <x-label for="company" value="{{ __('Nome da Empresa') }}" />
                        <x-input id="company" class="block mt-1 w-full" type="text" name="company"
                            :value="old('company')" required placeholder="Nome da Empresa" />
                    </div>
                    <div class="mt-4 px-4">
                        <x-label for="segment" value="{{ __('Segmento da Empresa') }}" />
                        <x-input id="segment" class="block mt-1 w-full" type="text" name="segment"
                            :value="old('segment')" required placeholder="Segmento da Empresa" />
                    </div>

                        <div class="mt-4 px-4">
                            <x-label for="city" value="{{ __('Cidade') }}" />
                            <x-input id="city" class="block mt-1 w-3/4" type="text" name="city" required
                                :value="old('city')" placeholder="Cidade" />
                        </div>
                        <div class="mt-4 px-4">
                            <x-label for="address" value="{{ __('Endereço') }}" />
                            <x-input id="address" class="block mt-1 w-3/4" type="text" name="address" required
                                :value="old('address')" placeholder="Endereço" />
                        </div>
                       
                        <div class="mt-4 px-4">
                            <x-label for="neighborhood" value="{{ __('Bairro') }}" />
                            <x-input id="neighborhood" class="block mt-1 w-3/4" type="text" name="neighborhood" required
                                :value="old('neighborhood')" placeholder="Bairro" />
                        </div>
                        <div class="mt-4 px-4">
                            <x-label for="state" value="{{ __('Estado') }}" />
                            {{-- <x-input id="state" class="block mt-1 w-2/4" type="text" name="state" required
                                :value="old('state')" placeholder="Estado" /> --}}
                                <select class="block mt-1 w-2/4" required>
                                    <option selected>Selecione um Estado</option>
                                <option value="MG">MG</option>
                                <option value="RJ">RJ</option>
                                <option value="SP">SP</option>
                                </select>
                        </div>
                        <div class="mt-4 px-4">
                            <x-label for="cep" value="{{ __('CEP') }}" />
                            <x-input id="cep" class="block mt-1 w-3/4" type="text" name="cep" required
                                :value="old('cep')" placeholder="XXXXX-XXX" />
                        </div>
                        <div class="mt-4 px-4">
                            <x-label for="phone" value="{{ __('Telefone Fixo') }}" />
                            <x-input id="phone" class="block mt-1 w-3/4" type="text" name="phone"
                                :value="old('phone')" placeholder="Telefone Fixo" />
                        </div>
                        <div class="mt-4 px-4">
                            <x-label for="whatsapp" value="{{ __('Whatsapp') }}" />
                            <x-input id="whatsapp" class="block mt-1 w-3/4" type="text" name="whatsapp"
                                :value="old('whatsapp')" placeholder="Whatsapp" />
                        </div>
                        <div class="mt-4 px-4">
                            <x-label for="email" value="{{ __('Email de Contato') }}" />
                            <x-input id="email" class="block mt-1 w-3/4" type="email" name="email"
                                :value="old('email')" placeholder="Email de Contato" />
                        </div>
                        <div class="mt-4 px-4">
                            <x-label for="facebook" value="{{ __(' Link do Facebook') }}" />
                            <x-input id="facebook" class="block mt-1 w-3/4" type="text" name="facebook"
                                :value="old('facebook')" placeholder="https://www.facebook.com/xxxxxxxx" />
                        </div>
                        <div class="mt-4 px-4">
                            <x-label for="instagram" value="{{ __('Link do Instagram') }}" />
                            <x-input id="instagram" class="block mt-1 w-3/4" type="text" name="instagram"
                                :value="old('instagram')" placeholder="https://www.instagram.com/xxxxxx" />
                        </div>
                        <div class="mt-4 px-4">
                            <x-label for="twitter" value="{{ __('Link do twitter') }}" />
                            <x-input id="twitter" class="block mt-1 w-3/4" type="text" name="twitter"
                                :value="old('twitter')" placeholder="https://www.twitter.com/xxxxxx" />
                        </div>
                        <div class="mt-4 px-4">
                            <x-label for="linkedin" value="{{ __('Link do linkedin') }}" />
                            <x-input id="linkedin" class="block mt-1 w-3/4" type="text" name="linkedin"
                                :value="old('linkedin')" placeholder="https://www.linkedin.com/xxxxxx" />
                        </div>
                        <div class="mt-4 px-4">
                            <x-label for="youtube" value="{{ __('Link do youtube') }}" />
                            <x-input id="youtube" class="block mt-1 w-3/4" type="text" name="youtube"
                                :value="old('youtube')" placeholder="https://www.youtube.com/xxxxxx" />
                        </div>

                        <div class="mt-4 px-4">
                            <x-label for="logoheader" value="{{ __('Logo Header') }}" />
                            <x-input id="logoheader" class="block mt-1 w-full" type="file" name="logoheader" />
                        </div>
                        <div class="mt-4 px-4">
                            <x-label for="logofooter" value="{{ __('Logo Footer') }}" />
                            <x-input id="logofooter" class="block mt-1 w-full" type="file" name="logofooter" />
                        </div>


                    <div class="mt-4 px-4">
                        <x-label for="image" value="{{ __('OG Imagem') }}" />
                        <x-input id="image" class="block mt-1 w-full" type="file" name="image" />
                    </div>

                    <x-button class="ml-4 mb-4 mt-4">
                        {{ __('Cadastrar') }}
                    </x-button>

                </form>


            </div>
        </div>
    </div>
</x-app-layout>
