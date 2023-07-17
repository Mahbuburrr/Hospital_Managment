@extends('admin.home')
@section('content')
<div class="container-fluid page-body-wrapper">
    <div class="container scroll-bar " align="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    <div class="table-responsive-sm table-responsive-md ">
                      <table class="table" >
                            <thead>
                              
                              <tr align="center" >
                                <th style="color:white;" scope="col">Sl.</th>
                                <th style="color:white;" scope="col">Customer Name</th>
                                <th style="color:white;" scope="col">Email</th>
                                <th style="color:white;" scope="col">Phone</th>
                                <th style="color:white;" scope="col">Doctor Name</th>
                                <th style="color:white;" scope="col">Date</th>
                                <th style="color:white;" scope="col">Message</th>
                                <th style="color:white;" scope="col">Status</th>
                                <th style="color:white;" scope="col">Approved</th>
                                <th style="color:white;" scope="col">Cancel</th>
                                
                              
                              </tr>
                            </thead>
                              <tbody>
                              @php($i=1)
                                 @foreach($data as $data)
                               <tr align="center">
                                    <th style="color:white" scope="row">{{$i++}}</th> 
                                    <td style="color:white">{{$data->name}}</td>
                                    <td style="color:white">{{$data->email}}</td>
                                    <td style="color:white">{{$data->phone}}</td>
                                    <td style="color:white">{{$data->doctor}}</td>
                                    <td style="color:white">{{$data->date}}</td>
                                    <td style="color:white">{{$data->message}}</td>
                                    <td style="color:white">{{$data->status}}</td>
                                    <td><a href="{{url('approved',$data->id)}}" class="btn btn-success">Approved</a></td>
                                    <td><a href="{{url('cancel',$data->id)}}" class="btn btn-danger">Cancel</a></td>
                                    <td><a href="{{url('sendmail',$data->id)}}" class="btn btn-primary">Send Mail</a></td>
                                    
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