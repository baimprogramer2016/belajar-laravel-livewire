<div class="row">
    <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="col-lg-12">
        <form role="form" action="{{ route('crud-hapus', $data_pegawai->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" readonly name="nama" placeholder="Nama" value="{{ $data_pegawai->nama }}">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
        </form>
    </div>
    <!-- /.col-lg-6 (nested) -->
</div>