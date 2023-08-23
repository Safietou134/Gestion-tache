@extends('/tasks/template')

@section('titre')
    Détails de la tache
@endsection

@section('contenu')
    <div class="container">
        <h1>Détails de la tache</h1>
        <table class="table">
            <tr>
                <th>Identifiant</th>
                <td>{{ $task->id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ $task->titre}}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $task->description }}</td>
            </tr>
        </table>
        <a class="btn btn-primary" href="{{ route('tasks.edit', $task) }}" title="Modifier">Modifier</a>
        <form method="POST" action="{{ route('tasks.destroy', $task) }}" style="display: inline;">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-outline-danger">Supprimer</button>
        </form>
        <a class="btn btn-secondary" href="{{ route('tasks.index') }}" title="Retour">Retour</a>
    </div>
@endsection
