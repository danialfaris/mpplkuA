@extends('layouts.layoutadmin')

@section('content')
<div class="card-box">
<div class="row">
<div class="col-10">
           <div class="card-header"> 
             <h3> STATUS SURAT </h3>                
<h4><span class="badge label-table badge-info">Pending</span></h4>

    </div>
        </div> 

<div class="col-6 col-md-2" >
<div class="my-2"><a href="{{route('admin-diprosesperpanjanganmasa')}}">
<button style="max-width: 10rem;" type="submit" class="btn btn-warning btn-block">PROSES</button>
</a></div>

    <a href="{{route('admin-ditolakperpanjanganmasa')}}">
        <button style="max-width: 10rem;" type="submit" class="btn btn-danger btn-block">TOLAK</button>
    </a>
</div></div>


  <body>
        <!-- Begin page -->
        <div id="wrapper">
            <div class="content-page{margin-left:240px;}">
                <div class="content">     
                    <!-- Start Content-->
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Personal-Information -->
                                <div class="card-box">
                                    <h2 class="header-title{font-size:40px}">Surat Perpanjangan Masa Studi</h2> <br>
                                        <div class="panel-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-2">
                                                    Nama
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-2">
                                                    Afifah Noviani
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    NIM
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-2">
                                                    G64170023
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    Jenis Kelamin
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-2">
                                                    Perempuan
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    Nomor HP
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-2">
                                                    0895366362474
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    Alamat Email 
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-5">
                                                    afifah_novian@apps.ipb.ac.id
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    Tanggal Akhir Perpanjangan
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-2">
                                                    7/12/2020
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    Tahun Akademik
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-2">
                                                    2020
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-2">
                                                    Tabel Rencana Studi
                                                    </div>
                                                    <div class="col-1">
                                                    :
                                                    </div>
                                                    <div class="col-3">
                                                    <a href = "#">Tabel Rencana Studi.pdf </a>
                                                    </div>
                                                </div>
                                               
 
                                                <!-- end row -->
                                            </div>
                                        </div>
                                
                                </div>
                            </div>
                        </div>
                    </div> <!-- end container-fluid -->
                </div> <!-- end content -->

              

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        
        
    </body>

    
@endsection