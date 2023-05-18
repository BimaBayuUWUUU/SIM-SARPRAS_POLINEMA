@extends('layouts.app')

@section('title', 'Menu History User')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>History Peminjaman</h1>
        </div>

        <div class="section-body">
            <div id="layoutSidenav_content">
                <main>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-5">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Data Peminjaman yang Sedang Berlangsung</h4></div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Peminjam</th>
                                        <th>Ruangan</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Proposal</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Peminjam</th>
                                        <th>Ruangan</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Proposal</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="text-center justify-content-center">
                                            <div class="alert alert-warning " role="alert">
                                                Sedang Diproses
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="text-center justify-content-center">
                                            <div class="alert alert-warning" role="alert">
                                                Sedang Diproses
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="text-center justify-content-center">
                                            <div class="alert alert-success" role="alert">
                                                Diterima
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="text-center justify-content-center">
                                            <div class="alert alert-success" role="alert">
                                                Diterima
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="text-center justify-content-center">
                                            <div class="alert alert-success" role="alert">
                                                Diterima
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="text-center justify-content-center">
                                            <div class="alert alert-danger" role="alert">
                                                Ditolak
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="justify-content-center ">
                                            <div class="alert alert-danger text-center" role="alert">
                                               Ditolak
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Teater</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="justify-content-center">
                                            <div class="alert alert-success text-center" role="alert">
                                                Diterima
                                              </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="container-xl px-4 mt-5">
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke"><h4>Data Peminjaman Selesai</h4></div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Peminjam</th>
                                        <th>Ruangan</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Proposal</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Peminjam</th>
                                        <th>Ruangan</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Proposal</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="justify-content-center">
                                            <div class="alert alert-primary text-center" role="alert">
                                                Selesai
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="justify-content-center">
                                            <div class="alert alert-primary text-center" role="alert">
                                                Selesai
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="justify-content-center">
                                            <div class="alert alert-primary text-center" role="alert">
                                                Selesai
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="justify-content-center">
                                            <div class="alert alert-primary text-center" role="alert">
                                                Selesai
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OKI 1</td>
                                        <td>Graha Polinema</td>
                                        <td>2022-12-12</td>
                                        <td>
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-file-alt"></i>
                                            </button>
                                        </td>
                                        <td class="justify-content-center">
                                            <div class="alert alert-primary text-center" role="alert">
                                                Selesai
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>
@endsection

@section('sidebar')
    @parent
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Peminjaman</span></a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="{{route('daftarsaranaprasarana.user')}}">Daftar Sarana Prasarana</a>
            </li>
            <li>
                <a class="nav-link" href="{{route('history.user')}}">History User</a>
            </li>
        </ul>
    </li>
@endsection
