<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="row">
	<div class="col-sm-4 ml-4">
		@if(session('status'))
		{{session('status')}}
		@endif
		<form method="post" action="{{Route('excel-import')}}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>Excel :</label>
				<input type="file" name="file" class="form-control">
			</div>
			<input type="submit" value="Import" class="btn btn-info">
		</form>
	</div>
</div>
</body>
</html>