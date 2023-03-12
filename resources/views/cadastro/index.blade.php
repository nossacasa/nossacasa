@extends('site.menu')

<script>
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('numero').value=("");
            document.getElementById('complemento').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);;
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

@section('content')

    <div class="container my-5">

        <form action="{{ route('cadastro.store') }}" method="post" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

                <label class="label">
                    <span class="dtnascimento">Data de Nascimento:</span>
                    <input type="date" name="dtnascimento" id="dtnascimento" class="mask-date" value="" required>
                </label>
                {{--  <label class="label">
                    <span class="telefone">Telefone:</span>
                    <input type="" id="telefone" name="telefone"
                        value="" required>
                </label>  --}}
                <label for="phone">Telefone:</label>
                <input type="tel" id="telefone" name="phone" required>


                <label class="label">
                    <span class="email">E-mail:</span>
                    <input type="email" name="email" id="email" class="mask-date" value="">
                </label> <br>


                <label class="label">
                    <span class="inddoencacronica">Doença Cronica:</span>
                    <input type="checkbox" id="inddoencacronica" value="1">
                </label>

                <label class="label">
                    <span class="descdoenca">Descrição:</span>
                    <input type="text" id="descdoenca" size="80" value="">
                </label><br>

                    <label>Cep:
                        <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                           onblur="pesquisacep(this.value);" required>
                    </label><br />

                    <label>Rua:
                        <input name="rua" type="text" id="rua" size="80">
                    </label><br />

                    <div class="label_g2">
                        <label>Numero:
                            <input name="numero" type="text" id="numero">
                        </label>

                        <label>Complemento:
                            <input name="complemento" type="text" id="complemento">
                        </label><br />
                    </div>
                    <div class="label_g2">
                        <label>Bairro:
                            <input name="bairro" type="text" id="bairro" >
                        </label>
                        <label>Cidade:
                            <input name="cidade" type="text" id="cidade" >
                        </label><br/>
                    </div>

                    <label>Estado:
                        <input name="uf" type="text" id="uf" size="2" >
                    </label><br />



            <button class="btn btn-primary">Enviar</button>
        </form>
    </div>


@endsection
