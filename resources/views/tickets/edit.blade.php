<h1>
    Editar un Ticket
    <a href="{{ route('tickets.index') }}">Volver</a>
</h1>


<form method="POST" action="{{ route('tickets.update', $ticket) }}">
    @csrf
    @method('PUT')
    ID: <input type="text"  value="{{ $ticket->id }}" disabled/><br/>    
    Nombres: <input type="text" name="nombre"  value="{{ $ticket->nombre }}"/><br/>
    <input type="radio" value="PLATAFORMA" {{ $ticket->tipo_tramite == 'PLATAFORMA' ? 'checked' : '' }} name="tipo_tramite"/> PLATAFORMA
    <input type="radio" value="VENTANILLA" {{ $ticket->tipo_tramite == 'VENTANILLA' ? 'checked' : '' }} name="tipo_tramite"/> VENTANILLA <br/>
    Fecha: <input type="text"  value="{{ $ticket->fecha }}" disabled/><br/>
    <input type="checkbox" {{ $ticket->esatado == 1 ? 'checked' : '' }} name="estado"/>Atendido<br/> 
    <br/> 
    <button type="submit">Actualizar</button>    
</form>