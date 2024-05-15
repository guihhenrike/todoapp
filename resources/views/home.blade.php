<x-layout>

    <x-slot:btn>
        <a href="{{route('task.create')}}" class="btn btn-primary">Criar Tarefa</a>
    </x-slot:btn>
    <x-form.button type="submit">
        <a href="{{route('logout')}}"  class="btn">Sair</a>
    </x-form.button>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia </h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" alt="">
                30 de Set
                <img src="/assets/images/icon-next.png" alt="">
            </div>
        </div>
        <div class="graph_header-subtitle">Tarefas: <strong>3/6</strong></div>

        <div class="graph-placeholder">
        </div>

        <div class="tasks_left_footer">
            <img src="/assets/images/icon-info.png" alt="">
            Restam 3 tarefas para serem realizadas
        </div>

    </section>

    <section class="list">
        <div class="list-header">
            <select class="list_header-select" id="">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>
        <div class="task-list">
            @foreach($tasks as $task)
            <x-task :data=$task />
            @endforeach
        </div>
        </div>
    </section>
</x-layout>