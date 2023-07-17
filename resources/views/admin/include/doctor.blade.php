@extends('admin.home')
@section('content')
<div class="container-fluid page-body-wrapper">
<div class="container " align="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    <div class="table-responsive-sm table-responsive-md table-responsive-lg ">
                      <table class="table" >
                            <thead>
                              
                              <tr align="center" >
                                <th style="color:white;" scope="col">Sl.</th>
                                <th style="color:white;" scope="col">Doctor Name</th>
                                <th style="color:white;" scope="col">Phone</th>
                                <th style="color:white;" scope="col">Speciality</th>
                                <th style="color:white;" scope="col">Room No</th>
                                <th style="color:white;" scope="col">Image</th>
                                <th style="color:white;" scope="col">Delete</th>
                                <th style="color:white;" scope="col">Update</th>
                                
                                
                                
                              
                              </tr>
                            </thead>
                              <tbody>
                              @php($i=1)
                                 @foreach($data as $data)
                               <tr align="center">
                                    <th style="color:white" scope="row">{{$i++}}</th> 
                                    <td style="color:white">{{$data->name}}</td>
                                    <td style="color:white">{{$data->phone}}</td>
                                    <td style="color:white">{{$data->speciality}}</td>
                                    <td style="color:white">{{$data->room}}</td>
                                    <td style="color:white"><img height="100" width="100" src="assets/uploads/doctors/{{$data->image}}" alt=""></td>
                                    <td><a href="{{url('updatedoctor',$data->id)}}" class="btn btn-success">Update</a></td>
                                    <td><a href="{{url('deletedoctor',$data->id)}}" class="btn btn-danger">Delete</a></td>
                                    
                               </tr>
                                @endforeach
                             </tbody>
                      </table>
                   </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection