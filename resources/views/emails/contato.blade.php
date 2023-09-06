<h2>Olá, Você recebeu um contato de {{ $data->name }}</h2>
<br>
<h4>{{  $configuration->company }}</h4>

<strong>Detalhes: </strong><br>
<strong>Nome: </strong>{{ $data->name }} <br>
<strong>Email: </strong>{{ $data->email }} <br>
<strong>Url: </strong>{{ $data->url }} <br>
<strong>Telefone/Whatsapp: </strong>{{ $data->whatsapp }} <br>
<strong>Assunto: </strong>{{ $data->subject }} <br>
<strong>Mensagem: </strong>{{ $data->message }} <br><br>

Obrigado
