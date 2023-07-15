@extends('admin.home')
@section('content')
<div class="container-fluid page-body-wrapper">
    <div class="container " align="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                       <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                       <div class="form">
                       <label for="Name">Doctor Name:</label>
                        <input type="text"  name="name" placeholder="Enter Your Name">
                       </div>
                       <div class="form">
                       <label for="phone">Doctor's Phone:</label>
                        <input type="text"  name="phone" placeholder="Write Number">
                       </div>
                       
                       <div class="form">
                       <label for="speciality">speciality:</label>
                        <select name="speciality">
                            <option value="">--select--</option>
                            <option value="skin">skin</option>
                            <option value="heart">heart</option>
                            <option value="eye">eye</option>
                            <option value="nose">nose</option>
                        </select>
                       </div>
                       <div class="form">
                       <label for="Name">Doctor Room:</label>
                        <input type="text"  name="room" placeholder="Write Room No.">
                       </div>

                       <div class="form">
                       <label for="Name">Doctor Image:</label>
                        <input style="color:white;" type="file"  name="image" >
                       </div>
                       <div class="form">
                  
                        <input  type="submit" class="btn btn-success"  >
                       </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection