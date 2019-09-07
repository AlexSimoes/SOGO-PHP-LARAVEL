<form action="/processa" method="POST">
    {{ csrf_field() }}
    Nome: <input type="text" name="nome">
</form>