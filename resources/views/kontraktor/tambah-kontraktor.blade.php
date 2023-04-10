<x-app-layout>
    <x-slot name="header_content">
        <h1>Tambah Kontraktor</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="dashboard">Tambah Kontraktor</a></div>
        </div>
    </x-slot>
    <form action="{{ route('insertkontraktor') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                  <label>Nama Kontraktor</label>
                  <input type="text" name="nama_kontraktor" class="form-control" required="">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" required="">
                </div>
                <div class="form-group">
                  <label>No Hp/WhatsApp</label>
                  <input type="text" name="no_hp" class="form-control">
                </div>
              </div>
              <div class="container-fluid">
                <div class="form-group">
                    <a href="/daftar-kontraktor"><button type="button" class="btn btn-warning">Kembali</button></a>&nbsp;
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                  </div>
              </div>
        </div>
      </form>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</x-app-layout>
