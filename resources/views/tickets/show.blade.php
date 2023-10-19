<h1>
    Ver un Ticket
    <a href="{{ route('tickets.index') }}">Volver</a>
</h1>


<form >
    ID: <input type="text"  value="{{ $ticket->id }}"/><br/>    
    Nombres: <input type="text"  value="{{ $ticket->nombre }}"/><br/>
    <input type="radio" {{ $ticket->tipo_tramite == 'PLATAFORMA' ? 'checked' : '' }} disabled/> PLATAFORMA
    <input type="radio" {{ $ticket->tipo_tramite == 'VENTANILLA' ? 'checked' : '' }} disabled/> VENTANILLA <br/>
    Fecha: <input type="text"  value="{{ $ticket->fecha }}"/><br/>
    <input type="checkbox" {{ $ticket->esatado == 1 ? 'checked' : '' }} disabled/>Atendido<br/> 
       
</form>