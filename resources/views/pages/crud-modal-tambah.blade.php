<div class="row">
    <div class="col-lg-12">

        <form role="form" action="{{ route('crud-simpan') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" placeholder="Alamat">
            </div>
            <div class="form-group">
                <label>Telepon</label>
                <input class="form-control" name="telepon" placeholder="Telepon">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="email" placeholder="Email">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    <!-- /.col-lg-6 (nested) -->
</div>