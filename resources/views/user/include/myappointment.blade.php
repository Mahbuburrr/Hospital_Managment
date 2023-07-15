@extends('user.front')
@section('content')
<div class="container pt-5">
    <div class="card">
        <div class="card-body">
            <div class="card-header" align="center" style="font-weight:bold; font-size:30px;">Appointment Details</div>
            <div class="row">
                <div class="col-md-12">
                <div class="table-responsive-sm table-responsive-md table-responsive-lg ">
                <table class="table" >
  <thead>
    
    <tr align="center">
      <th scope="col">Sl.</th>
      <th scope="col">Doctor</th>
      <th scope="col">Date</th>
      <th scope="col">Message</th>
      <th scope="col">Status</th>
      <th scope="col">Cancel Appointment</th>
     
    </tr>
  </thead>
  <tbody>
    @php($i=1)
    @foreach($appointment as $appointment)
    <tr align="center">
      <th scope="row">{{$i++}}</th>
      <td>{{$appointment->doctor}}</td>
      <td>{{$appointment->date}}</td>
      <td>{{$appointment->message}}</td>
      <td>{{$appointment->status}}</td>
      <td><a href="{{url('cancel_appoint',$appointment->id)}}" onclick="return confirm('are you sure to delete this')" class="btn btn-danger" >Cancel</a></td>
      
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
@endsection