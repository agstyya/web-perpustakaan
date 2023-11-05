@extends('layouts.app')
@section('main')
@if(session()->has('success'))
<div class="row">
    <div class="col-lg-12">
    <div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>

    </div>
</div>
@endif
@if(session()->has('successDelete'))
<div class="row">
    <div class="col-lg-12">
    <div class="alert alert-danger" role="alert">
    {{ session('successDelete') }}
</div>

    </div>
</div>
@endif
@if(session()->has('successEdit'))
<div class="row">
    <div class="col-lg-12">
    <div class="alert alert-warning" role="alert">
    {{ session('successEdit') }}
</div>

    </div>
</div>
@endif
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Data <b>Buku</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="/dashboard/books/create" class="btn btn-success"><i class="ti ti-square-rounded-plus-filled"></i> <span>Add New Book</span></a>					
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
						Judul
						</th>
						<th>Tipe</th>
						<th>Deskripsi</th>
						<th>Penerbit</th>
						<th>Penulis</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($books as $book)
					<tr>
						<td>{{$book -> judul}}</td>
						<td>{{$book -> tipe}}</td>
						<td>{{Str::limit($book->deskripsi,20)}}</td>
						<td>{{$book -> penerbit}}</td>
						<td>{{$book -> penulis}}</td>
						<td>
							<a href="/dashboard/books/{{$book->id}}" class="btn btn-success"><i class="ti ti-list-details"></i> <span>Details</span></a>
							<a href="/dashboard/books/{{$book->id}}/edit" class="btn btn-warning"><i class="ti ti-edit"></i> <span>Edit</span></a>
							<form action="/dashboard/books/{{ $book->id }}" method="post" class="d-inline">
								@csrf
								@method('delete')
							<button href="#" class="btn btn-danger">
								<i class="ti ti-trash-x-filled"></i>
								<span>Delete</span></button></form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection