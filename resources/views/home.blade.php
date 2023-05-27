

@extends('layouts.app')

@section('content')
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            {{ __('You are logged in!') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                    <div class="d-none d-lg-block">
                        <div class="row mt-5">
                            <div class="col-lg-3 col-6">
                               <div class="small-box bg-info">
                                <div class="inner">
                                    <h3 class="login_count">{{$login_count}}</h3>
                                    <p>Online Connections</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <!--<a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>-->
                               </div>    
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-success">
                                 <div class="inner">
                                     <h3 class="watch_count">{{$views_count}}</h3>
                                     <p>Active Lines</p>
                                 </div>
                                 <div class="icon">
                                     <i class="ion ion-bag"></i>
                                 </div>
                                <!--<a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>-->
    
                                </div>    
                             </div>
                             <div class="col-lg-3 col-6">
                                <div class="small-box bg-danger">
                                 <div class="inner">
                                     <h3>246</h3>
                                     <p>Live Streams</p>
                                 </div>
                                 <div class="icon">
                                     <i class="ion ion-bag"></i>
                                 </div>
                               <!--  <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>-->
                                </div>    
                             </div>
                          
                        </div>
                    </div>
                    <div class="d-block d-lg-none">
                        <div class="row mt-5">
                            <div class="col-12">
                               <div class="small-box bg-info">
                                <div class="inner">
                                    <div class="row pr-2 d-flex justify-content-center items-align-center">
                                        <div class="col-4">
                                            <div class="w-50 mt-3">

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                    <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                                                  </svg>
                                            </div>
                                              
                                        </div>
                                        <div class="col-8 text-right">
                                            <h3 class="login_count">{{$login_count}}</h3>
                                            <p>Online Connections</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <!--<a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>-->
                               </div>    
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-success">
                                 <div class="inner">
                                     <h3 class="watch_count">{{$views_count}}</h3>
                                     <p>Active Lines</p>
                                 </div>
                                 <div class="icon">
                                     <i class="ion ion-bag"></i>
                                 </div>
                                <!--<a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>-->
    
                                </div>    
                             </div>
                             <div class="col-lg-3 col-6">
                                <div class="small-box bg-danger">
                                 <div class="inner">
                                     <h3>246</h3>
                                     <p>Live Streams</p>
                                 </div>
                                 <div class="icon">
                                     <i class="ion ion-bag"></i>
                                 </div>
                               <!--  <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>-->
                                </div>    
                             </div>
                          
                        </div>

                     <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm-6">
                            <section>
                                Hello  
                            </section>    
                          </div>
                          <div class="col-sm-6">
                            <section>
                               Hello
                            </section>
                          </div>
                        </div>
                    </div>




                </div>      
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  
@endsection

@push('scripts')
    <script>
        setInterval(() => {
            reloadData()
        }, 3000);
        function reloadData() {
            ajaxHeader()
            
            $.get("views-count",  function(){
                
            })
            .done(function(data){
                $(".watch_count").text(data.views_count)
                $(".login_count").text(data.login_count)
                
            })
            .fail(function(error) {
                console.log("failed")
            })
        }
        function ajaxHeader() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }
    </script>
@endpush