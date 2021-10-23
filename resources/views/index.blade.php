<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2 mt-5">
				<div class="card">
					<div class="card-header bg-info">
						<h6 class="text-white">How to Store Multiple Select Values in Database using Laravel? - ItSolutionStuff.com</h6>
					</div>
					<div class="card-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Descripstion</th>
									<th>Category</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $dt)
								<tr>
									<td>{{$dt->name}}</td>
									<td>{{$dt->description}}</td>
									<td>
										@foreach($dt->cat as $category)
										<span class="badge badge-primary">{{$category}}</span>
										@endforeach
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>