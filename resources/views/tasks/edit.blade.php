<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">Voltar</a>
    </x-slot:btn>
    <section id="task_section">
        <h1>Atualizar Tarefa</h1>
        <form method="post" action="{{route('task.edit_action')}}">
            @csrf

            <x-form.text_input name="title" label="Título da Task" placeholder="Digite o título da tarefa" value="{{$task->title}}" required="required" />
            <x-form.date_input type="date" name="due_date" label="Data de Realização" value="{{$task->due_date}}" required="required" />
            <x-form.select_input name="category_id" label="Categoria" required="required">
                @foreach($categories as $category)
                <option value="{{$category->id}}"
                    @if($category->id == $task->category_id)
                        selected
                    @endif
                >{{$category->title}}</option>
                @endforeach
            </x-form.select_input>
            
            <x-form.textarea_input label="Descrição da Tarefa" name="description" placeholder="Digite uma descrição para sua tarefa"
             value="{{$task->description}}" />  
            
            <x-form.form_button resetTxt="Resetar" submitTxt="Atualizar Tarefa" />
        </form>
    </section>
</x-layout>