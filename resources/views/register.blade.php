<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">Voltar</a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Registrar-se</h1>
        <form method="post" action="{{route('user.register_action')}}">
            @csrf

            <x-form.text_input 
                name="title" 
                label="Seu nome" 
                placeholder="Seu nome" 
                required="required" 
            />
            <x-form.text_input 
                type="email" 
                name="email" 
                label="Seu email" 
                placeholder="Seu email" 
                required="required"
             />
            <x-form.text_input
                type="password" 
                name="paswword" 
                label="Sua senha" 
                placeholder="Sua senha" 
                required="required" 
            />
            <x-form.text_input 
                type="password" 
                name="password_confirmation" 
                label="Confirme sua senha" 
                placeholder="Confirme sua senha" 
                required="required" 
            />

            <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se" />
        </form>
    </section>


</x-layout>