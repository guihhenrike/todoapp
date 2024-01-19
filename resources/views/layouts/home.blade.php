<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoApp</title>
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Montserrat:wght@300;700&family=Pixelify+Sans:wght@600&family=Poppins:wght@400;500;700&family=Roboto+Serif:opsz,wght@8..144,700&family=Roboto:ital,wght@0,400;1,500&family=Rubik:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">Criar Tarefa</a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph_header">
                        <h2>Progresso do dia</h2>
                        <div class="graph_header-line"></div>
                        <div class="graph_header-date">
                            Data
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
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" name="" id="">
                                <div class="task_title">Título da tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Título da tarefa</div>
                            </div>
                            <div class="actions">
                                <a href="#">
                                    <img src="/assets/images/icon-edit.png" alt="">
                                </a> 
                                <a href="#">
                                    <img src="/assets/images/icon-delete.png" alt="">
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
            </main>

        </div>
    </div>
</body>

</html>