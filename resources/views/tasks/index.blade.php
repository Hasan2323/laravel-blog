<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
    <h2>
        <ul>
            @foreach($tasks as $task)
                <li>
                	<a href="tasks/{{ $task->id }}">{{ $task->body }}</a>

                </li>

            @endforeach
        </ul>

    </h2>
</body>
</html>