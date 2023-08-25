@extends('app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">CRUD</h1>
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
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
                @endif
                <div class="filter">
                    <div>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah"
                            onClick="openModalTambah()">
                            Tambah Data
                        </button>
                    </div>
                    <form action="{{ route('crud') }}" method="GET">
                        <div class="form-group input-group">
                            <input type="text" name="search" placeholder="Pencarian" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_pegawai as $item_pegawai)
                            <tr>
                                <td>{{ $item_pegawai->nama }}</td>
                                <td>{{ $item_pegawai->alamat }}</td>
                                <td>{{ $item_pegawai->telepon }}</td>
                                <td>{{ $item_pegawai->email }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data_pegawai->links() }}
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">Input Data Pegawai</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- FORM ADA DISINI --}}
            </div>

        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    function openModalTambah()
        {
            $.ajax({
                    url: "{{ route('crud-modal-tambah') }}",
                    success: function( result ) {
                        $( ".modal-body" ).html( result);
                    }
                });
        }
</script>
@endpush