<!-- Modal -->
<div wire:ignore.self class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Input Data Pegawai</h3>
                        <button type="button" class="close tutup" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-lg-12">

                        <form role="form" wire:submit.prevent='simpan'>
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" wire:model.defer="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" wire:model.defer="alamat" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input class="form-control" wire:model.defer="telepon" placeholder="Telepon">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" wire:model.defer="email" placeholder="Email">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
            </div>

        </div>
    </div>
</div>

{{-- MODAL EDIT --}}
<div wire:ignore.self class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h3>
                        <button type="button" class="close tutup" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-lg-12">

                        <form role="form" wire:submit.prevent='update({{ $param_id }})'>
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" wire:model.defer="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" wire:model.defer="alamat" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input class="form-control" wire:model.defer="telepon" placeholder="Telepon">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" wire:model.defer="email" placeholder="Email">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
            </div>

        </div>
    </div>
</div>


{{-- MODAL HAPUS --}}
<div wire:ignore.self class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Hapus Data Pegawai</h3>
                        <button type="button" class="close tutup" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-lg-12">

                        <form role="form" wire:submit.prevent='delete({{ $param_id }})'>
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" wire:model.defer="nama" placeholder="Nama">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
            </div>

        </div>
    </div>
</div>