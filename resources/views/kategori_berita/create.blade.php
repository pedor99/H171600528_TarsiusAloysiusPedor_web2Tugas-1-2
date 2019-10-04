@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data</div>

                	<div class="card-body">
                		<form method="post" action="{!! route('kategori_berita.store') !!}">
                			@include('kategori_artikel.form')
                		</form>

             		</div>
        	</div>
    	</div>
	</div>
</div>
@endsection