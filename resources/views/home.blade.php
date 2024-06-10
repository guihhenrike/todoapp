<x-layout>

    <x-slot:btn>
        <a href="{{route('task.create')}}" class="btn btn-primary">Criar Tarefa</a>
    </x-slot:btn>

    <!-- <x-form.button type="submit">
        <a href="{{route('logout')}}" class="btn">Sair</a>
    </x-form.button> -->

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia </h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <a href="{{route('home', ['date' => $date_prev_button])}}">
                    <img src="/assets/images/icon-prev.png" alt="">
                </a>
                {{$date_as_string}}
                <a href="{{route('home', ['date' => $date_next_button])}}">
                    <img src="/assets/images/icon-next.png" alt="">
                </a>
            </div>
        </div>
        <div class="graph-header-subtitle">
            Tarefas: <b>{{ $tasks_count - $undone_tasks_count }}/{{ $tasks_count }}</b>
        </div>

        <div class="graph-placeholder">
        </div>

        <div class="task-left-footer">
            <img src="/assets/images/icon-info.png" alt="">
            Restam {{ $undone_tasks_count }} tarefas para serem realizadas.
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

    <!-- <script>

        function changeTaskStatutsFilter(e) {
        // alert(e.value)
        if (e.value === 'task_pending') {
            showAllTasks();
            document.querySelectorAll('.task_done').forEach(function (element) {
            element.style.display = 'none';
            })
        } else if (e.value === 'task_done') {
            showAllTasks();
            document.querySelectorAll('.task_pending').forEach(function (element) {
            element.style.display = 'none';
            })
        }else {
            showAllTasks();
        }
        }

        function showAllTasks() {
        document.querySelectorAll('.taks').forEach(function (element) {
            element.style.display = 'block';
        })
        }

    </script> -->

    <script>
        async function taskUpdate(element) {
            let status = element.checked;
            let taskId = element.dataset.id;
            let url = '{{ route("task.update")}}';
            let rawResult = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'accept': 'application/json'
                },
                body: JSON.stringify({
                    status,
                    taskId,
                    _token: '{{csrf_token()}}'
                })
            });
            let result = await rawResult.json();
            if (result.success) {
                alert('Task Atualizada com Sucesso!')
            } else {
                //element.checked = !status;
            }
        }
    </script>
</x-layout>