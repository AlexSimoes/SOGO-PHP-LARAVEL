@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif

<form method="post">
    {{ csrf_field() }}
    <p>Titulo: <input type="text" name="titulo">
    <input type="submit" value="Enviar">
</form>
