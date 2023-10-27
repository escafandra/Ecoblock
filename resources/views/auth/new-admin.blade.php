<x-guest-layout>
    <div>
        <h1>El nuevo administrador fue creado exitosamente</h1>
        <h2>La contraseña del nuevo administrador es: "password". Es recomendable realizar un cambio de contraseña como
            primera acción.</h2>
        <div>
            <h1>Las credenciales del nuevo administrador son: </h1>
            <h3>Name: {{ $user->name }}</h3>
            <h3>Email: {{ $user->email }}</h3>
        </div>
    </div>
</x-guest-layout>
