@extends('admin.layout')

@section('content')

<section class="content-header">
	<h1>
		Category
		<small>create</small>
	</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form class="form" role="form" method="POST" action="{{ url('gotg/category') }}">

				{{ csrf_field() }}

				<!-- category_name Form Input -->
				
				<div class="form-group{{ $errors->has('category_name') ? ' has-error' : '' }}">

					<label class="control-label">Category Name</label>

					<input type="text" class="form-control" name="category_name" value="{{ old('category_name') }}">

					@if ($errors->has('category_name'))

					<span class="help-block">
						<strong>{{ $errors->first('category_name') }}</strong>
					</span>

					@endif

				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg">
						Create
					</button>
				</div>
			</form>
		</div>
	</div>
</section>		
@endsection