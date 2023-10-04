<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h1 my-3 text-gray-800 font-weight-light">Halo, <br>Selamat Datang</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

<!-- Content Row -->

<div class="my-3">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-lg font-weight-bold text-primary text-uppercase mb-4">
                        Rekening Utama
                        <button class="btn btn-outline-primary btn-sm mx-2 px-3">Daftar Rekening</button>
                    </div>
                    <div class="mt-2 text-md font-weight-bold text-primary text-uppercase mb-1">
                        Saldo:
                    </div>
                    <div class="font-weight-bold text-gray-800">
                        <h2 class="font-weight-bold">Rp{{ number_format($saldo, 0, ',', '.') }}</h2></h2>
                    </div>
                </div>
                <!-- <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div> -->
            </div>
        </div>
    </div>
</div>


<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-md-6 mb-4">
        <div class="card border-bottom-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center text-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                            Pemasukan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp40.000</div>
                    </div>
                    <!-- <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-md-6 mb-4">
        <div class="card border-bottom-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center text-center">
                    <div class="col mr-2">
                        <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                            Pengeluaran</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp215.000</div>
                    </div>
                    <!-- <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Pending Requests Card Example -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pending Requests</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>

<!-- Content Row -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Akses Cepat</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary rounded-pill shadow-sm"><i
            class="fas fa-pencil-alt fa-sm text-white-50"></i> Atur menu</a>
</div>

<div class="row">
    <div class="col-md-3 mb-5">
        <div class="card border-bottom-info shadow h-100">
            <div class="card-body d-flex flex-column">
                <a class="stretched-link" href="#!"></a>
                <img class = "img-fluid m-auto" width = "70%" src = "{{ asset('assets/icons/money-bill-transfer-solid.svg') }}">
                <h2 class="mt-auto card-title">Transfer</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-5">
        <div class="card border-bottom-info shadow h-100">
            <div class="card-body d-flex flex-column">
                <a class="stretched-link" href="#!"></a>
                <img class = "img-fluid m-auto opacity-25" width = "70%" src = "{{ asset('assets/icons/address-card-solid.svg') }}">
                <h2 class="mt-auto card-title">Informasi</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-5">
        <div class="card border-bottom-info shadow h-100">
            <div class="card-body d-flex flex-column">
                <a class="stretched-link" href="#!"></a>
                <img class = "img-fluid m-auto opacity-25" width = "70%" src = "{{ asset('assets/icons/user-pen-solid.svg') }}">
                <h2 class="mt-auto card-title">Edit Akun</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-5">
        <div class="card border-bottom-info shadow h-100">
            <div class="card-body d-flex flex-column">
                <a class="stretched-link" href="#!"></a>
                <img class = "img-fluid m-auto opacity-25" width = "70%" src = "{{ asset('assets/icons/ellipsis-solid.svg') }}">
                <h2 class="mt-auto card-title">Menu Lain</h2>
            </div>
        </div>
    </div>
</div>