<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">Voltar</a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form action="">
            <div class="inputArea">
                <label for="title">
                    Título da Task
                </label>
                <input id="title" name="title" placeholder="Digite o título da tarefa" required>
            </div>
            <div class="inputArea">
                <label for="due_date">
                    Data da Realização
                </label>
                <input type="date" id="due_date" name="due_date" placeholder="Digite o título da tarefa" required>
            </div>
            <div class="inputArea">
                <label for="category">
                    Categoria
                </label>
                <select id="category" name="category" required>
                    <option selected disabled value="">Selecione a Categoria</option>
                    <option value="">Valor qualquer</option>
                </select>
            </div>
            <div class="inputArea">
                <label for="description">
                    Descrição da Tarefa
                </label>
                <textarea name="description" placeholder="Digite uma descrição para sua tarefa" id="description" cols="55" rows="10"></textarea>
            </div>
        </form>
    </section>


</x-layout>