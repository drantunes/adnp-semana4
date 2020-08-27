<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <ul>
        @if(!! sizeOf($tarefas))
            @foreach ($tarefas as $tarefa)
                <li> 
                    {{ $tarefa['feito'] ? '✅' : '🔲' }} 
                    {{ $tarefa['titulo'] }} 
                    <a href="/tarefas/{{ $tarefa['id'] }}"> Detalhes</a>
                </li>
            @endforeach
        @else
            Não há tarefas
        @endif
    </ul>
</body>
</html>