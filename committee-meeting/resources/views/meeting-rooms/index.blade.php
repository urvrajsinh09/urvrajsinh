@extends('layouts.app')
@section('content')
@if(session('added'))
      
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{session('added')}}</strong>    
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
@elseif(session('deleted'))              
<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{session('deleted')}}</strong>    
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
@endif
<div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h1>Meeting Rooms</h1>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="{{url('/dashboard')}}">Masters</a>
                      </li>
                      <li class="breadcrumb-item active">
                        <a href="{{url('/meeting-rooms/index')}}">Meeting Room</a>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
          
              <div class="tables-wrapper">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="title d-flex flex-wrap align-items-center justify-content-between">
                        <div class="left">
                          <h6 class="mb-10">Meeting Rooms  Data</h6>
                        </div>
                        <div class="right">
                            <a href="{{url('meeting-rooms/create')}}" class="main-btn dark-btn rounded-full btn-hover master-btn">Add </a>
                        </div>
                      </div>


                      <div class="table-wrapper table-responsive">
                      <table id="myTable" class="table table-striped table-bordered " style="width:100%">
                          <thead>
                            <tr>
                              <th >
                                <h6>Sr No.</h6>
                              </th>
                              <th >
                                <h6>Meeting Room Name</h6>
                              </th>
                              <th>
                                <h6>Actions</h6>
                              </th>
                            </tr>
                            <!-- end table row-->
                          </thead>
                          <tbody>
                            @foreach ($meeting_rooms as $key=>$meeting_room)
                            <tr>
                              <td>{{$key + 1}}</td>
                              <td>{{$meeting_room->meeting_room_name}}</td>
                          
                              <td>
                              <div class="action ">
                              <button class="edit border-0">
                                        <a title="Show" href="{{url('/meeting-rooms/show',['id'=>$meeting_room->id])}}"><i class="lni lni-eye px-2 mx-1 py-2 text-light bg-primary rounded"></i></a>
                                      </button>
                                      <button class="edit border-0">
                                        <a title="Edit" href="{{url('/meeting-rooms/edit',['id'=>$meeting_room->id])}}"><i class="lni lni-pencil px-2 mx-1 py-2 text-light bg-success rounded"></i></a>
                                      </button>
                                      
                                      <button class=" border-0">
                                        <a title="Delete" href="{{url('/meeting-rooms/delete',['id'=>$meeting_room->id])}}" onclick = "return confirm('are you sure to delete');"><i class="lni lni-trash-can px-2 mx-1 py-2 text-light bg-danger rounded"></i></a>
                                      </button>



</div>

                              
                            </tr>
                            @endforeach
                            <!-- end table row -->
                          </tbody>
                        </table>
                        <!-- end table -->
                      </div>
                    </div>
                    <!-- end card -->
                  </div>
                  <!-- end col -->
                </div>
                <!-- end row -->
              </div>
            <!-- End Col -->
          <!-- End Row -->
        </div>
@endsection