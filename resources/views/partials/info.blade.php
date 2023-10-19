@if (session('mensaje'))
    <div>
        <h4>Exitoso!</h4>
        {{ session('mensaje') }}
    </div>
@endif