@extends('app')

@push('livewire-style')
@livewireStyles
@endpush

@push('livewire-script')
@livewireScripts
@endpush

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">CRUD LIVEWIRE</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Pegawai
            </div>

            <!-- /.panel-heading -->
            <div class="panel-body">
                @livewire('crud')
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>


@endsection