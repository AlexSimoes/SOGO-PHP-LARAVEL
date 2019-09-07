@extends ('template')

@section('content')
<form method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <input type="text" name="n1">+<input type="text" name="n2">
    <input type="submit" value="Calcular">
</form>
@endsection
