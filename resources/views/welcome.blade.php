<!DOCTYPE html>
<html>
  <head>
    <title>Greeting</title>
  </head>
  <body>
    <ul>
      @foreach ($tasks as $task)
        <h1>{{ $task->body }}</h1>
      @endforeach
    </ul>
  </body>
</html>
