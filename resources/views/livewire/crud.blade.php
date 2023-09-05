<div>
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
    @endif
    <div class="filter">
        <div>
            <button wire:click='kosongin' class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah">
                Tambah Data
            </button>
        </div>

        <div class="form-group input-group">
            <input type="text" wire:model="search" placeholder="Pencarian" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>

    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_pegawai as $index => $item_pegawai)
                <tr wire:key='{{ $index }}'>
                    <td>{{ $item_pegawai->nama }}</td>
                    <td>{{ $item_pegawai->alamat }}</td>
                    <td>{{ $item_pegawai->telepon }}</td>
                    <td>{{ $item_pegawai->email }}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Pilih
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#" data-toggle="modal" data-target="#modalEdit"
                                        wire:click="showEdit({{ $item_pegawai }})">Ubah</a>
                                </li>
                                <li><a href="#" data-toggle="modal" data-target="#modalHapus"
                                        wire:click="showDelete({{ $item_pegawai }})">Hapus</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data_pegawai->links() }}
    </div>
    @include('livewire.crud-modal')
</div>
@push('script')
<script>
    window.addEventListener('close-modal', event =>{
        $(".tutup").click();
    });
</script>
@endpush