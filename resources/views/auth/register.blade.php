<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
        <form method="POST" action="{{ !isset($nivel)? route('register'):route('registar_admin') }}">
            @csrf

            <x-input id="nivel" type="hidden" name="nivel" :value="!isset($nivel)? 0:1"/>

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- CPF -->
            <div>
                <x-label for="cpf" :value="__('CPF')" />

                <x-input id="cpf" class="block mt-1 w-full" type="number" name="cpf" required autofocus />
            </div>

            <!-- RG -->
            <div>
                <x-label for="rg" :value="__('RG')" />

                <x-input id="rg" class="block mt-1 w-full" type="number" name="rg" required autofocus />
            </div>

            <!-- Data de Nacimento -->
            <div>
                <x-label for="data_nasc" :value="__('Data de nacimento')" />

                <x-input id="data_nasc" class="block mt-1 w-full" type="date" name="data_nasc" :value="old('data_nasc')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Telefone -->
            <div>
                <x-label for="telefone" :value="__('Telefone')" />

                <x-input id="telefone" class="block mt-1 w-full" type="number" name="telefone" :value="old('telefone')" required autofocus />
            </div>

            <!-- Endereco -->
            <!-- Cep -->
            <div>
                <x-label for="cep" :value="__('Cep')" />

                <x-input id="cep" class="block mt-1 w-full" type="number" name="cep" :value="old('cep')" onblur="buscacep()" required autofocus />
            </div>

            <!-- Logradouro -->
            <div>
                <x-label for="logradouro" :value="__('Logradouro')" />

                <x-input id="logradouro" class="block mt-1 w-full" type="text" name="logradouro" :value="old('logradouro')" required autofocus />
            </div>

            <!-- Complemento -->
            <div>
                <x-label for="complemento" :value="__('Complemento')" />

                <x-input id="complemento" class="block mt-1 w-full" type="text" name="complemento" :value="old('complemento')" autofocus />
            </div>

            <!-- Numero -->
            <div>
                <x-label for="numero" :value="__('Numero')" />

                <x-input id="numero" class="block mt-1 w-full" type="number" name="numero" :value="old('numero')" autofocus />
            </div>
            
            <!-- Bairro -->
            <div>
                <x-label for="bairro" :value="__('Bairro')" />

                <x-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autofocus />
            </div>

            <!-- Localidade -->
            <div>
                <x-label for="localidade" :value="__('Cidade')" />

                <x-input id="localidade" class="block mt-1 w-full" type="text" name="localidade" :value="old('localidade')" required autofocus />
            </div>

            <!-- uf -->
            <div>
                <x-label for="uf" :value="__('UF')" />

                <x-input id="uf" class="block mt-1 w-full" type="text" name="uf" :value="old('uf')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

           
            <div class="flex items-center justify-end mt-4">
                @if (!isset($nivel))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                @endif
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
            
        </form>
    </x-auth-card>
</x-guest-layout>

<script>
    function buscacep() {
      let ajax = new XMLHttpRequest();
      let cep = document.getElementById("cep");
      ajax.onreadystatechange = () => {
        if (ajax.readyState == XMLHttpRequest.DONE) {
          let retorno = JSON.parse(ajax.responseText);
          uf.value = retorno.uf;
          localidade.value = retorno.localidade;
          bairro.value = retorno.bairro;
          logradouro.value = retorno.logradouro;
          complemento.value = retorno.complemento;
        }
      };

      ajax.open("GET", `https://viacep.com.br/ws/${cep.value}/json/`);
      ajax.send();
    }
</script>