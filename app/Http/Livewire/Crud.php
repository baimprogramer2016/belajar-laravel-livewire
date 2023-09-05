<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use Livewire\WithPagination;
use Livewire\Component;

class Crud extends Component
{
    use WithPagination;

    public $search;

    public $param_id;

    public $nama, $alamat, $telepon, $email;

    protected $listeners = ['reloadTable' => 'render'];

    public function render()
    {
        $query = Pegawai::query();

        $query->when(!empty($this->search), function ($q) {
            return $q->where('nama', 'like', '%' . $this->search . '%') //select * from pegawai where nama like '%joni%'
                ->orWHere('alamat', 'like', '%' . $this->search . '%');
        });

        $data_pegawai = $query->orderby('id', 'desc')->paginate(10);
        return view('livewire.crud', [
            "data_pegawai" => $data_pegawai
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function simpan()
    {
        $input = [
            "nama" => $this->nama,
            "alamat" => $this->alamat,
            "telepon" => $this->telepon,
            "email" => $this->email,
        ];

        Pegawai::create($input);
        $this->dispatchBrowserEvent('close-modal');
        $this->kosongin();
        $this->emit('reloadTable');
    }

    public function kosongin()
    {
        $this->nama = '';
        $this->alamat = '';
        $this->telepon = '';
        $this->email = '';
    }

    public function showEdit($param)
    {
        $this->nama = $param['nama'];
        $this->alamat = $param['alamat'];
        $this->telepon = $param['telepon'];
        $this->email = $param['email'];
        $this->param_id = $param['id'];
    }

    public function update($param_id)
    {
        $data = Pegawai::find($param_id); //select * from pegawai where id = ?
        $data->nama = $this->nama;
        $data->alamat = $this->alamat;
        $data->telepon = $this->telepon;
        $data->email = $this->email;

        $data->update();
        $this->dispatchBrowserEvent('close-modal');
        $this->kosongin();
        $this->emit('reloadTable');
    }

    public function showDelete($param)
    {
        $this->nama = $param['nama'];
        $this->param_id = $param['id'];
    }

    public function delete($param_id)
    {
        $data = Pegawai::find($param_id); //select * from pegawai where id = ?
        $data->delete();
        $this->dispatchBrowserEvent('close-modal');
        $this->kosongin();
        $this->emit('reloadTable');
    }
}
