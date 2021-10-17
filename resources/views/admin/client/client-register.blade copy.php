@extends('admin.layout.master')
@section('content')

<h1>Client Registration</h1>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Register New Client
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="#">
          <div class="form-group">
              @csrf
              <input type="radio" name="Gender" id="gender_rev" value="Rev." />
          <label for="gender_rev">Rev.</label>
          <input type="radio" name="Gender" id="gender_mr" value="Mr." />
          <label for="gender_rev">Mr.</label>
          <input type="radio" name="Gender" id="gender_mrs" value="Mrs." />
          <label for="gender_rev">Mrs.</label>
          <input type="radio" name="Gender" id="gender_ms" value="Ms." />
          <label for="gender_rev">Ms.</label> 
<br/>
              <label for="client_name">First Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="cases">Last Name :</label>
              <input type="text" class="form-control" name="nameinitials"/>
          </div>
          <div class="form-group">
              <label for="cases">NIC/Passport No:</label>
              <input type="text" class="form-control" name="nameinitials"/>
          </div>
          <div class="form-group">
              <label for="cases">Address :</label>
              <input type="text" class="form-control" name="nameinitials"/>
          </div>
          <div class="form-group">
              <label for="cases">Contact :</label>
              <input type="text" class="form-control" name="nameinitials"/>
          </div>
          <div class="form-group">
              <label for="cases">Email Address :</label>
              <input type="text" class="form-control" name="nameinitials"/>
          </div>
          <div class="form-group">
              <label for="cases">Password :</label>
              <input type="text" class="form-control" name="nameinitials"/>
          </div>
          <div class="form-group">
              <label for="cases">Confirm Password :</label>
              <input type="text" class="form-control" name="nameinitials"/>
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
          <button type="submit" class="btn btn-primary">Cancel</button>
      </form>
  </div>
</div>




@endsection