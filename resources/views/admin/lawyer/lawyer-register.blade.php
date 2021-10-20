@extends('admin.layout.master')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lawyer Registration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Lawyer Registration</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <div class="container modal-content">
        <div class="modal-body">

        @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Please check your inputs</strong>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form action="{{route('admin-lawyers.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="fname">First Name</label>
          <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
        </div>
        <div class="form-group">
          <label for="lname">Last Name</label>
          <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender</label>
          <!-- <label class="radio-inline form-control"></label><input type="radio" name="gender">Male</label> -->
          <!-- <label class="radio-inline form-control"></label><input type="radio" name="gender">Female</label> -->
          <select name="gender" id="gender" class="form-control">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="form-group">
          <label for="nic">NIC</label>
          <input type="text" class="form-control" id="nic" name="nic" placeholder="NIC" required>
        </div>
        <div class="form-group">
          <label for="nic">SC enrolment No</label>
          <input type="text" class="form-control" id="scenrolment" name="scenrolment" placeholder="SC enrolment No" required>
        </div>
        <div class="form-group">
          <label for="type">Lawyers type</label>
          <!-- <label class="radio-inline form-control"></label><input type="radio" name="gender">Male</label> -->
          <!-- <label class="radio-inline form-control"></label><input type="radio" name="gender">Female</label> -->
          <select name="type" id="type" class="form-control">
            <option value="President's Counsel">President's Counsel</option>
            <option value="Attorney-at-Law">Attorney-at-Law</option>
          </select>
          <div class="form-group">
          <label for="qualified area">Qualified area</label>
          <!-- <label class="radio-inline form-control"></label><input type="radio" name="gender">Male</label> -->
          <!-- <label class="radio-inline form-control"></label><input type="radio" name="gender">Female</label> -->
          <select name="qualified area" id="qualified area" class="form-control">
            <option value="Civil Law">Civil Law</option>
            <option value="Criminal Law">Criminal Law</option>
            <option value="Commercial Law">Commercial Law</option>
            <option value="Human Rights Law">Human Rights Law</option>
            <option value="Constitutional Law">Constitutional Law</option>
            <option value="Labour Law">Labour Law</option>
            <option value="Arbitration Law">Arbitration Law</option>
          </select>
          <div class="form-group">
          <label for="academic">Academic Qualifications</label>
          <!-- <label class="radio-inline form-control"></label><input type="radio" name="gender">Male</label> -->
          <!-- <label class="radio-inline form-control"></label><input type="radio" name="gender">Female</label> -->
          <select name="qualifications" id="qualifications" class="form-control">
            <option value="PhD">PhD</option>
            <option value="LLM">LLM</option>
            <option value="LLB">LLB</option>
          </select>
          <div class="form-group">
          <label for="years">Years of Experience</label>
          <input type="text" class="form-control" id="years" name="years" placeholder="Years of Experience" required>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
        </div>
        <div class="form-group">
          <label for="contact">Contact</label>
          <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
          <label for="cpassword">Confirm Password</label>
          <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <button type="submit" class="btn btn-dark">Cancel</button>



        </form>

        </div>
      </div>


      </div>
    </section>




@endsection