@extends('layouts.student')
@section('title','Result')
@section('content')

    <!-- /.content-header -->
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hasil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ujian</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <section class="content">
        <div class="container-fluid">
          <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">

                <!-- Default box -->
                <!-- /.card -->
                <div class="card mt-4">
                    
                    <div class="card-body">
                        <h2>Informasi Siswa</h2>
                        <table class="table">
                            <tr>
                                <td>Nama : </td>
                                <td>{{ $student_info->name}}</td>
                            </tr>
                            <tr>
                                <td>E-mail : </td>
                                <td>{{ $student_info->email}}</td>
                            </tr>
                            {{-- <tr>
                                <td>DOB : </td>
                                <td>{{ $student_info->dob}}</td>
                            </tr> --}}
                            <tr>
                                <td>Mata Pelajaran : </td>
                                <td>{{ $exam_info->title}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Ujian : </td>
                                <td>{{ $exam_info->exam_date}}</td>
                            </tr>
                        </table>
                        <h2>Hasil Ujian</h2>
                        <table class="table">
                            <tr>
                                <td>Jawaban benar : </td>
                                <td>{{ $result_info->yes_ans}}</td>
                            </tr>
                            <tr>
                                <td>Jawaban salah : </td>
                                <td>{{ $result_info->no_ans}}</td>
                            </tr>
                            <tr>
                                <td>Total : </td>
                                <td>{{ $result_info->yes_ans+$result_info->no_ans}}</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-header -->

    <!-- Modal -->


 
@endsection
