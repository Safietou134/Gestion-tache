@extends('/tasks/template')

@section('titre')

    LesTaches

@endsection

@section('contenu')
     <h1>Toutes les taches</h1>
	<p>
		<a class="btn btn-success" href="{{ route('tasks.create') }}" title="Créer une tache" >Créer une nouvelle tache</a>
	</p>
	<table class="table" border="1" >
		<thead class="thead-dark">
			<tr>
				<th>Identifiant</th>
				<th>Titre</th>
                <th>Description</th>
                <th colspan='3'>Actions</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->titre}}</td>
                <td>{{$task->description}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('tasks.show', $task) }}" title="Détails" >DETAILS</a>
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('tasks.edit', $task) }}" title="Modifier" >MODIFIER</a>
                </td>
                 <td>
                    <form method="POST" action="{{route('tasks.destroy', $task)}}" >
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-outline-danger" >SUPPRIMER</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
	</table>
@endsection