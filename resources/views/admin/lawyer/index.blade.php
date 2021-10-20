@extends('admin.layout.master')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lawyer Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Lawyer Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <table class = "table">
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Gender</th>
          <th>NIC</th>
          <th>SCEnrolment No</th>
          
          <th>Qualified Area</th>
          <th>Academic Qualifications</th>
          <th>Years of Experience</th>
          <th>Address</th>
          <th>Contact</th>
          <th>Email</th>
          <th>Action</th>
        </tr>

        @foreach ($lawyers as $lawyer)

        <tr>
          <td>{{$lawyer->id}}</td>
          <td>{{$lawyer->fname}}</td>
          <td>{{$lawyer->lname}}</td>
          <td>{{$lawyer->gender}}</td>
          <td>{{$lawyer->nic}}</td>
          <td>{{$lawyer->scenrolment_no}}</td>
          
          <td>{{$lawyer->qualified_area}}</td>
          <td>{{$lawyer->academic_qualifications}}</td>
          <td>{{$lawyer->years_of_experience}}</td>
          <td>{{$lawyer->address}}</td>
          <td>{{$lawyer->contact}}</td>
          <td>{{$lawyer->email}}</td>
          <td>
          <a href="{{route('admin-lawyers.edit',$lawyer->id)}}" class="btn btn-primary">Edit</a>
          </td>
        </tr>

        @endforeach

      </table>


      </div>
    </section>




@endsection