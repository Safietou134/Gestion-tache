@extends('/tasks/template')

@section('titre')
    Modifier une tache
@endsection

@section('contenu')
    <h1>Modifier la tache</h1>
    <form method="POST" action="{{ route('tasks.update', $task) }}" class="border p-4 rounded">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titre">Titre:</label>
            <input type="text" class="form-control" name="titre" value="{{ $task->titre }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" name="description" value="{{ $task->description }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
@endsection
