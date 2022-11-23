@extends('layout.main')
@section('content')

<div class="content">
    <div class="d-flex justify-content-between mx-5 mt-5">
        <div class="w-100 me-4">
        <h5>
            <div class="fw-blood">
            <i class="fa-solid fa-arrow-left">
            </i> Data Siswa Pkl
            </div>
        </h5>
            

            <div class="row">
                <div class="col-4">
                    <div class="form-group mb-4">
                        <div class="input-group input-goup-ig">
                            <span class="input-group-text">
                                <i class="fas fa-magnifying-glass"></i>
                            </span>
                            <input type="text" class="form-control aria-label">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <button class="btn btn-light"><i class="fas fa-filter"></i>Filter</button>
                    <button class="btn btn-light"><i class="fas fa-trash"></i></button>
                </div>
                <div class="col-2 justify-content-end">
                    <button class="btn btn-dark"><i class="fas fa-add"></i> Tambah Aset</button>
                </div>
            </div>
            
            
        <table class="table table-stripd table-hover">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Aset</th>
                <th scope="col">Jenis Aset</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row"><input class="from-chek-input mt-0" type="checkbox"></th>
                <td>Iphone 12 </td>
                <td>Baru</td>
                <td>10.500.000</td>
                <td><span class="btn btn-sm btn-outline-success">Aktif</span></td>
                <td>
                    <span class="btn btn-sm btn-warning"><i class=" fas fa-pencil"></i></span>
                    <span class="btn btn-sm btn-danger"><i class=" fas fa-trash"></i></span>
                </td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Iphone 11 </td>
                <td>Baru</td>
                <td>7.500.000</td>
                <td><span class="btn btn-sm btn-outline-success">Aktif</span></td>
                <td>
                    <span class="btn btn-sm btn-warning"><i class=" fas fa-pencil"></i></span>
                    <span class="btn btn-sm btn-danger"><i class=" fas fa-trash"></i></span>
                </td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Iphone 13 mini </td>
                <td>Baru</td>
                <td>12.500.000</td>
                <td><span class="btn btn-sm btn-outline-success">Aktif</span></td>
                <td>
                    <span class="btn btn-sm btn-warning"><i class=" fas fa-pencil"></i></span>
                    <span class="btn btn-sm btn-danger"><i class=" fas fa-trash"></i></span>
                </td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td>Baru</td>
                <td>3.500.000</td>
                <td><span class="btn btn-sm btn-outline-success">Aktif</span></td>
                <td>
                     <span class="btn btn-sm btn-warning"><i class=" fas fa-pencil"></i></span>
                    <span class="btn btn-sm btn-danger"><i class=" fas fa-trash"></i></span>
                </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

@endsection 