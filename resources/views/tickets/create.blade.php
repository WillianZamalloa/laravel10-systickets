<h1>
    Agregar un Ticket
    <a href="{{ route('tickets.index') }}">Volver</a>
</h1>

@include('partials.error')
<form method="POST" action="{{ route('tickets.store') }}">
    @csrf
    Nombres: <input type="text" name="nombre"/><br/>
    <input type="radio" name="tipo_tramite" value="PLATAFORMA"/> PLATAFORMA
    <input type="radio" name="tipo_tramite" value="VENTANILLA"/> VENTANILLA <br/>
    <input type="checkbox" disabled/>Atendido<br/> 
    <button type="submit">Guardar</button>    
</form>