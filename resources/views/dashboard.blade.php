<x-app-layout>
    <x-slot name="header_content">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="dashboard">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </x-slot>
    <p>
    <center>
    <div class="media-body">
      <img src="{{asset('asset/binamarga.png')}}" alt="" width="350" heiht="350" >
    </div>

    </center>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        {{-- <x-jet-welcome /> --}}
        <div class="card-body">
            <ul class="list-unstyled">
                {{-- <center><strong><h1 class="mt-0 mb-1">Tugas</h1><strong><center>
              <li class="media">
                  <div class="media-body">
                      
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bidang Bina Marga mempunyai tugas melaksanakan sebagian tugas dinas yang meliputi menyusun, merencanakan, mengatur, membina, 
                          melaksanakan, mengelola, mengawasi kebijakan dan pelaksanaan tugas perencanaan, peningkatan, pembangunan dan pemeliharaan jalan dan jembatan
                        </div>
                    </li> --}}
                    <li class="media my-4">
                        {{-- <img class="mr-3" src="assets/img/example-image-50.jpg" alt="Generic placeholder image"> --}}
                        <div class="media-body">
                            <center><b><h1 class="mt-0 mb-1">Tugas</h1></b></center>
                            <p>
                                Bidang Bina Marga mempunyai tugas melaksanakan sebagian tugas dinas yang meliputi menyusun, merencanakan, mengatur, membina, melaksanakan, mengelola, mengawasi kebijakan dan pelaksanaan tugas perencanaan, peningkatan, pembangunan dan pemeliharaan jalan dan jembatan
                </div>
              </li>
              <li class="media my-4">
                {{-- <img class="mr-3" src="assets/img/example-image-50.jpg" alt="Generic placeholder image"> --}}
                <div class="media-body">
                    <center><b><h5 class="mt-0 mb-1">Fungsi</h5></b></center>
                    <p>
                        1. Pelaksanaan penyusunan dan pengembangan kebijakan teknis perencanaan dan program kerja pada Bidang Bina Marga<p>
                        2. Pelaksanaan upaya peningkatan pelayanan publik di Bidang Bina Marga<p>
                        3. Pelaksanaan perencanaan, pembinaan, pengembangan, pemberdayaan, pemantauan dan pengendalian pelaksanaan kegiatan perencanaan dan<p>
                        4. pelaksanaan pembangunan dan peningkatan jalan dan jembatan<p>
                        5. Pelaksanaan perencanaan, pembinaan, pengembangan, pemberdayaan, pemantauan dan pengendalian pelaksanaan kegiatan pemeliharaan dan pengawasan jalan dan jembatan<p>
                        6. Pelaksanaan monitoring, evaluasi dan laporan pelaksanaan tugas pada Bidang Bina Marga<p>
                        7. Pelaksanaan tugas kedinasan lain yang diberikan oleh atasan<p>
                        </div>
                </li>
                <center>
                <div><img src="{{asset('asset/personil.jpeg')}}" alt="" width="750" heiht="750" > &nbsp;&nbsp;&nbsp; </div><p></center>
                </div>
                <div><center>
                </ul>
                Bina Marga Kab. Cilacap
                </div></center>
                <p>
                </div>
                </x-app-layout>
