@extends('layouts.backend.app',[
	'title' => 'Tambah Users',
	'contentTitle' => 'Tambah Users',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.users.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.users.store') }}" id="form-user">
					@csrf
					<div class="form-group">
						<label for="name">Full Name</label>
						<input required="" class="form-control" type="text" name="name" id="name" placeholder="">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input required="" class="form-control" type="email" name="email" id="email" placeholder="">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input required="" class="form-control" type="password" name="password" id="password" placeholder="">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@stop

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#email").on("change", function() {
            var email = $(this).val();

            $.ajax({
                url: '{{ route("admin.users.checkEmail") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    email: email
                },
                success: function(response) {
                    if (response.exists) {
                        Swal.fire({
                            title: 'Perhatian!',
                            text: 'Email sudah terdaftar.',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $("#email").val("");
                            }
                        });
                    }
                }
            });
        });
    });
</script>
@endpush
