<x-app-layout>
    <x-slot name="header_content">
        <h1>Daftar Kontraktor</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="dashboard">Daftar Kontraktor</a></div>
        </div>
    </x-slot>

    <a href="{{ route('createkontraktor') }}"><button class="btn btn-success">Tambah Data</button></a>
    <br>
    <br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama Kontraktor</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Hp/WhatsApp</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $kontraktor)
          <tr>
            <td>{{ $kontraktor->id }}</td>
            <td>{{ $kontraktor->nama_kontraktor }}</td>
            <td>{{ $kontraktor->alamat }}</td>
            <td>{{ $kontraktor->no_hp }}</td>
            <td>
                <a href="edit-kontraktor/{{ $kontraktor->id }}"><button class="btn btn-warning">Edit</button></a>
                <a href="delete-kontraktor/{{ $kontraktor->id }}"><button class="btn btn-danger">Hapus</button></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</x-app-layout>
