<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
	<table class="table table-striped">
		<thead>
			<tr>
				
				<th>Codigo do produto</th>
				<th>Nome do produto</th>
				<th>Categoria</th>
				<th>Preço unitario</th>
				<th>Descriçao</th>
			</tr>
		</thead>
		<tbody>
			@foreach($produtos as $row)
			<tr>
				<th scope="row">{{ $row->Codigo do produto }}</th>
				<td>{{ $row->Nome do produto }}</td>
				<td>{{ $row->Categoria }}</td>
				<td>{{ $row->Preco unitario}}</td>
				<td>{{ $row->Descricao }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</body>
</html>