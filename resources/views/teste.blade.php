<p>{{ session()->get('valor', 'NADA') }}</p>
<hr />
<form action="{{ url('/teste') }}" method="POST">
    @csrf

    <input type="text" name="field" value="{{ session()->get('valor') }}" />

    <button type="submit">Enviar</button>
</form>