@extends('layouts.app')

@section('title', 'Form Edit Peminjaman')
@push('customCSS')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>--}}
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Peminjaman</h1>
        </div>

        <div class="section-body ">
            <div class="row">
                <div class="col-xl-6 mb-4">
                    <!-- Dashboard example card 1-->
                    <a class="card lift">
                        <div class="card-header bg-whitesmoke"><h4>Daftar Peminjaman Pada
                                Ruang {{ $peminjaman_user->saranaPrasarana->nama }}</h4></div>
                        <div class="card-body">
                            <div id='calendar'></div>
                            <script>
                                $(document).ready(function () {
                                    // Array warna-warna yang tersedia
                                    var availableColors = [
                                        '#343A40', // Dark
                                        '#6C757D', // Secondary
                                        '#198754', // Success
                                        '#DC3545', // Danger
                                        '#FFC107', // Warning
                                        '#0D6EFD', // Primary
                                        '#6610F2', // Indigo
                                        '#6F42C1', // Purple
                                        '#D63384', // Pink
                                        '#FD7E14', // Orange
                                        '#20C997', // Teal
                                        '#0DCAF0', // Cyan
                                        '#E83E8C', // Fuchsia
                                        '#FD7E14', // Yellow
                                        '#007BFF', // Blue
                                        '#FFC107', // Amber
                                        '#28A745', // Green
                                        '#17A2B8', // Info
                                        '#6C757D', // Gray
                                    ];

                                    $('#calendar').fullCalendar({
                                        defaultView: 'month',
                                        events: [
                                                @foreach ($tanggalPeminjaman as $item)
                                            {
                                                title: '{{ $item->kegiatan }}',
                                                start: '{{ $item->tanggal_mulai }}',
                                                end: '{{ date('Y-m-d', strtotime($item->tanggal_selesai.' +1 day')) }}',
                                                color: getRandomColor(),
                                                textColor: 'white'
                                            },
                                            @endforeach
                                        ]
                                    });


                                    // Function untuk mendapatkan warna acak dari array
                                    function getRandomColor() {
                                        if (availableColors.length === 0) {
                                            return '#808080'; // Jika tidak ada warna tersedia, gunakan warna abu-abu
                                        }

                                        var colorIndex = Math.floor(Math.random() * availableColors.length);
                                        var color = availableColors[colorIndex];
                                        availableColors.splice(colorIndex, 1); // Hapus warna dari array
                                        return color;
                                    }
                                });
                            </script>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 mb-4">
                    <!-- Dashboard example card 1-->
                    <a class="card lift h-100">
                        <div class="card-header bg-whitesmoke"><h4>Form Pendaftaran Peminjaman Sarana &amp;
                                Prasarana</h4></div>
                        <div class="card-body d-flex justify-content-center flex-column">
                            <form method="POST" action="{{ route('peminjaman-user.update' , ['peminjaman_user' => $peminjaman_user->id]) }}"
                                  enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label for="namaRuang" class="form-label">Nama Ruangan</label>
                                    <input type="text" class="form-control" id="namaRuang" value="{{ $peminjaman_user->saranaPrasarana->nama }}"
                                           readonly>
                                </div>
                                <input type="text" class="form-control" id="id_user" value="{{ Auth::user()->id }}"
                                       name="id_user" readonly hidden>
                                <input type="text" class="form-control" id="id_sarana_prasarana"
                                       value="{{ $peminjaman_user->id_sarana_prasarana }}"
                                       name="id_sarana_prasarana" readonly hidden>
                                <input type="text" class="form-control" id="id_wewenang"
                                       value="{{ $peminjaman_user->id_wewenang }}"
                                       name="id_wewenang" readonly hidden>
                                <div class="mb-3">
                                    <label for="kegiatan" class="form-label">Nama Kegiatan</label>
                                    <input type="text" class="form-control @error('kegiatan') is-invalid @enderror"
                                           id="kegiatan" name="kegiatan" value="{{ old('kegiatan', $peminjaman_user->kegiatan) }}">
                                    @error('kegiatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-6 col-sm-6">
                                        <label for="penanggung_jawab" class="form-label">Penanggung Jawab</label>
                                        <input type="text"
                                               class="form-control @error('penanggung_jawab') is-invalid @enderror"
                                               id="penanggung_jawab" name="penanggung_jawab" value="{{ old('penanggung_jawab', $peminjaman_user->penanggung_jawab) }}">
                                        @error('penanggung_jawab')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <label for="nim" class="form-label">NIM</label>
                                        <input type="text"
                                               class="form-control @error('nim') is-invalid @enderror"
                                               id="nim" name="nim" value="{{ old('nim', $peminjaman_user->nim) }}">
                                        @error('nim')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-4 col-sm-4">
                                        <label for="tanggal_mulai" class="form-label">Mulai Tanggal</label>
                                        <input id="tanggal_mulai"
                                               class="form-control @error('tanggal_selesai') is-invalid @enderror"
                                               type="date" name="tanggal_mulai" value="{{ old('tanggal_mulai', $peminjaman_user->tanggal_mulai) }}">
                                        @error('tanggal_mulai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <span id="startDateSelected"></span>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <label for="tanggal_selesai" class="form-label">Sampai Tanggal</label>
                                        <input id="tanggal_selesai"
                                               class="form-control @error('tanggal_selesai') is-invalid @enderror"
                                               type="date"
                                               name="tanggal_selesai" value="{{ old('tanggal_selesai', $peminjaman_user->tanggal_selesai) }}">
{{--                                        @error('tanggal_selesai')--}}
{{--                                        <div class="invalid-feedback">--}}
{{--                                            {{ $message }}--}}
{{--                                        </div>--}}
{{--                                        @enderror--}}
                                        <span id="endDateSelected"></span>
                                    </div>
                                    @if($errors->has(['tanggal_selesai']))
                                        <div class="col-lg-12">
                                            <div class="alert alert-danger mt-3">
                                                Tanggal mulai dan tanggal selesai telah digunakan!.
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-lg-4 col-sm-4">
                                        <label for="daya_listrik" class="form-label">Daya Listrik</label>
                                        <select class="form-control" name="daya_listrik">
                                            @if($peminjaman_user->daya_listrik == 'Ya')
                                                <option selected>Ya</option>
                                                <option>Tidak</option>
                                            @else
                                                <option>Ya</option>
                                                <option selected>Tidak</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                {{--                                <div class="mb-3">--}}
                                {{--                                    <label for="dokumen" class="form-label">Upload Proposal</label>--}}
                                {{--                                    <div class="custom-file">--}}
                                {{--                                        <input type="file" class="custom-file-input @error('dokumen') is-invalid @enderror" id="dokumen" name="dokumen">--}}
                                {{--                                        <label class="custom-file-label" for="dokumen">Choose file</label>--}}
                                {{--                                        @error('dokumen')--}}
                                {{--                                        <div class="invalid-feedback">{{ $message }}</div>--}}
                                {{--                                        @enderror--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <input type="hidden" name="oldDokumen" value="{{ $peminjaman_user->dokumen }}">
                                <div class="mb-3">
                                    <label for="dokumen" class="form-label">Upload Proposal</label>
                                    <input class="form-control @error('dokumen') is-invalid @enderror" type="file"
                                           id="dokumen" name="dokumen">
                                    @error('dokumen')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="fasilitas" class="form-label">Fasilitas</label>
                                    <textarea type="text" class="form-control @error('fasilitas') is-invalid @enderror"
                                              id="fasilitas" readonly style="height: 72px">{{ $peminjaman_user->saranaPrasarana->fasilitas }}</textarea>
                                    @error('fasilitas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </a>
                </div>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-xl px-4 mt-5">
                        <div class="card mb-4">
                            {{--                            <div class="card-header bg-whitesmoke"><h4>Daftar Peminjaman Pada Ruang {{ $sarpras->nama }}</h4></div>--}}
                            {{--                            <div class="card-body ps-5 pe-15">--}}
                            {{--                                <div id='calendar'></div>--}}
                            {{--                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
                            {{--                                <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>--}}
                            {{--                                <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>--}}
                            {{--                                <script>--}}
                            {{--                                    $(document).ready(function() {--}}
                            {{--                                        $('#calendar').fullCalendar({--}}
                            {{--                                            defaultView: 'month',--}}
                            {{--                                            events: [--}}
                            {{--                                                    @foreach ($peminjaman as $item)--}}
                            {{--                                                {--}}
                            {{--                                                    title: '{{ $item->kegiatan }} - {{ $item->penanggung_jawab }}',--}}
                            {{--                                                    start: '{{ $item->tanggal_mulai }}',--}}
                            {{--                                                    end: '{{ $item->tanggal_selesai }}',--}}
                            {{--                                                    color: 'green', // Ganti dengan warna blok yang diinginkan--}}
                            {{--                                                    textColor: 'white' // Ganti dengan warna font yang diinginkan--}}
                            {{--                                                },--}}
                            {{--                                                @endforeach--}}
                            {{--                                            ]--}}
                            {{--                                        });--}}
                            {{--                                    });--}}
                            {{--                                </script>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="card-header bg-whitesmoke"><h4>Form Pendaftaran Peminjaman Sarana &amp;--}}
                            {{--                                    Prasarana</h4></div>--}}
                            {{--                            <div class="card-body ps-5 pe-15">--}}
                            {{--                                <form>--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label for="exampleInputEmail1" class="form-label">Nama Ruangan</label>--}}
                            {{--                                        <input type="text" class="form-control" id="exampleInputEmail1"--}}
                            {{--                                               aria-describedby="emailHelp">--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="row mb-3">--}}
                            {{--                                        <div class="col-lg-6 col-sm-6">--}}
                            {{--                                            <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>--}}
                            {{--                                            <input type="text" class="form-control" id="exampleInputEmail1"--}}
                            {{--                                                   aria-describedby="emailHelp">--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="col-lg-6 col-sm-6">--}}
                            {{--                                            <label for="exampleInputEmail1" class="form-label">Penanggung Jawab</label>--}}
                            {{--                                            <input type="text" class="form-control" id="exampleInputEmail1"--}}
                            {{--                                                   aria-describedby="emailHelp">--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="row mb-3">--}}
                            {{--                                        <div class="col-lg-6 col-sm-6">--}}
                            {{--                                            <label for="startDate" class="form-label">Mulai Tanggal</label>--}}
                            {{--                                            <input id="startDate" class="form-control" type="date"/>--}}
                            {{--                                            <span id="startDateSelected"></span>--}}
                            {{--                                        </div>--}}
                            {{--                                        <div class="col-lg-6 col-sm-6">--}}
                            {{--                                            <label for="endDate" class="form-label">Sampai Tanggal</label>--}}
                            {{--                                            <input id="endDate" class="form-control" type="date"/>--}}
                            {{--                                            <span id="endDateSelected"></span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label for="uploadproposal" class="form-label">Upload Proposal</label>--}}
                            {{--                                        <div class="custom-file">--}}
                            {{--                                            <input type="file" class="custom-file-input" id="customFile">--}}
                            {{--                                            <label class="custom-file-label" for="customFile">Choose file</label>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="mb-3">--}}
                            {{--                                        <label for="exampleInputPassword1" class="form-label">Fasilitas</label>--}}
                            {{--                                        <input type="text" id="disabledTextInput" class="form-control"--}}
                            {{--                                               placeholder="Disabled input" readonly>--}}
                            {{--                                    </div>--}}

                            {{--                                    <button type="submit" class="btn btn-primary">Submit</button>--}}
                            {{--                                </form>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>
@endsection
@push('customJS')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.js"></script>
@endpush

@section('sidebar')
    @parent
    <li class="nav-item dropdown {{ (request()->is('daftar-sarana-prasarana-user', 'peminjaman-user*')) ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown">
            <i class="fas fa-calendar-check"></i><span>Peminjaman</span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="{{ route('daftarsaranaprasarana.user') }}">Daftar Sarana Prasarana</a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('peminjaman-user.index') }}">History User</a>
            </li>
        </ul>
    </li>
@endsection
