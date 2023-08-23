@extends('/tasks/template')

@section('titre')
    Créer une tache
@endsection

@section('contenu')
    <h1>Créer une nouvelle tache</h1>
    <form method="POST" action="{{ route('tasks.store') }}" class="border p-4 rounded">
        @csrf
        <div class="form-group">
            <label for="titre">Titre:</label>
            <input type="text" class="form-control" name="titre" required>
        </div>  
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" name="description" required>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
@endsection
