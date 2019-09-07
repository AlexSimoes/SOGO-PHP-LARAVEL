<html>
<body>
    <form method="post" action="/livro/{{ $id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
    <p>Nome: <input type="text" name="nome" value="{{$nome}}"></p>
    </form>
    <form method="post" action="/livro/{{ $id }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <p><input type="submit" value="EXCLUIR"></p>
    </form>
</body>
</html>
