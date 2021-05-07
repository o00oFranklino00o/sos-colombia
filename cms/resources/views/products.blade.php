<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<br><br>
		<div class="row">
		@foreach($products as $product)
			<div class="col-md-3">
					<img src="{{ Voyager::image( $product->image ) }}" style="width:100%">
					<span>{{ $product->title }}</span>
                    <span>{{ $product->description }}</span>
                    <span>{{ $product->price }}</span>
			</div>
		@endforeach
		</div>
	</div>

</body>
</html>
