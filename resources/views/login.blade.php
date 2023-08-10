<x-layout>
    <form action="/fazer-login" method="post">
        <input type="text" name="login" placeholder="login" required>
        <input type="text" name="senha" placeholder="senha" required>
        <button>ENTRAR</button>
        @csrf
    </form>



</x-layout>