<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Conteúdo da página -->
                <p>Bem-vindo a minha loja virtual!</p>
                <a href="{{ url('login') }}">Login</a><br><br>
                <a href="{{ url('register') }}">Registro</a><br><br>
                <p>Aqui a lista dos meus produtos!</p>
            </div>
        </div>
    </div>
</x-guest-layout>