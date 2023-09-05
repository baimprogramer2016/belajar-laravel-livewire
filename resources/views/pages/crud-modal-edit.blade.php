<div class="row">
    <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="col-lg-12">

        <form role="form" action="{{ route('crud-update', $data_pegawai->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" name="nama" placeholder="Nama" value="{{ $data_pegawai->nama }}">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" placeholder="Alamat" value="{{ $data_pegawai->alamat }}">
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input class="form-control" name="telepon" placeholder="Telepon" value="{{ $data_pegawai->telepon }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="email" placeholder="Email" value="{{ $data_pegawai->email }}">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
    <!-- /.col-lg-6 (nested) -->
</div>