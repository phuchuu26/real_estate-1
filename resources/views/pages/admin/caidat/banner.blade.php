@extends('layouts.admin_new.admin')
@section('content')
<!-- main content start -->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <h2>CẬP NHẬT ẢNH BÌA</h2>
        <div class="form-w3layouts">
            <!-- page start-->
    {{-- slide 1 --}}
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            slide 1
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-cog"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                                <div id="drop">
                                    Đính kèm tệp
    
                                    <a>Thêm Ảnh</a>
                                    <input type="file" name="upl" multiple="">
                                </div>
    
                                <ul>
                                    <!-- The file uploads will be shown here -->
                                </ul>
    
                            </form>
                        </div>
                    </section>
                </div>
            </div>

 {{-- slide 2 --}}
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            slide 2
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-cog"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                                <div id="drop">
                                    Đính kèm tệp
    
                                    <a>Thêm Ảnh</a>
                                    <input type="file" name="upl" multiple="">
                                </div>
    
                                <ul>
                                    <!-- The file uploads will be shown here -->
                                </ul>
    
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        {{-- slide 3 --}}
 <div class="row">
     
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            slide 3
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-cog"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                                <div id="drop">
                                    Đính kèm tệp
    
                                    <a>Thêm Ảnh</a>
                                    <input type="file" name="upl" multiple="">
                                </div>
    
                                <ul>
                                    <!-- The file uploads will be shown here -->
                                </ul>
    
                            </form>
                        </div>
                    </section>
                </div>
 </div>

            <!-- page end-->



              {{-- slide 1 --}}
              <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            slide 4
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-cog"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                                <div id="drop">
                                    Đính kèm tệp
    
                                    <a>Thêm Ảnh</a>
                                    <input type="file" name="upl" multiple="">
                                </div>
    
                                <ul>
                                    <!-- The file uploads will be shown here -->
                                </ul>
    
                            </form>
                        </div>
                    </section>
                </div>
            </div>


    




             <style> 
                .panel-body{
                    height: 400px !important;
                }
            </style>
        
       {{-- page end --}}
    </section>
 <!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
                <p>© Quản lý sàn giao dịch bất động sản | Made by student group learning E-Commerce Development <a href="{{route('real_estate.index')}}">Real-Estate</a></p>
            </div>
        </div>
  <!-- / footer -->
</section> 
<!--main content end-->
@endsection