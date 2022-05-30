<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
        <form method="POST" action="{{ route('update_Cliente') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
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

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Update') }}
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