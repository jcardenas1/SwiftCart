<h2> Iniciar sesion </h2>

<form action="/login" method="POST">
    @csrf
    <div>
        <label for="name">Correo</label>
        <input type="text" name="auth_correo" id="correo_user" autofocus>
    </div>
    <div>
        <label for="password">Contraseña </label>
        <input type="text" name="auth_password" id="password_user">
    </div>
    <div>
        <button>Iniciar sesion</button>
    </div>
    <div>
        <label>
            No tienes una cuenta? 
            <a href="{{ url('/register') }}">
                Registrate
            </a> 
    </label>
    </div>
</form>