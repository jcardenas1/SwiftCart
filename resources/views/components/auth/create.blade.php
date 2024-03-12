<h2> Registrar </h2>

<form action="/register" method="POST">
    @csrf
    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name_user" autofocus>
    </div>
    <div>
        <label for="email">Correo</label>
        <input type="text" name="email" id="email_user">
    </div>
    <div>
        <label for="account_type">Tipo de cuenta</label>
        <input type="text" name="account_type" id="account_type">
    </div>
    <div>
        <label for="account_number">Numero de cuenta</label>
        <input type="text" name="account_number" id="account_number">
    </div>
    <div>
        <label for="due_date">Fecha de vencimiento</label>
        <input type="text" name="due_date" id="due_date">
    </div>
    <div>
        <label for="password">Contraseña </label>
        <input type="text" name="password" id="password_user">
    </div>
    <div>
        <label for="password_confirmation">Confrima la contraseña </label>
        <input type="text" name="password_confirmation" id="password_confirmation">
    </div>

    <div>
        <button>Crear Usuario</button>
    </div>
</form>