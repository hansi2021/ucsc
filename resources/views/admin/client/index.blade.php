@extends('admin.layout.master')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Client Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Client Details</li>
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
          <th>Contact</th>
          <th>Address</th>
          <th>Email</th>
          <th>Action</th>
        </tr>

        @foreach ($clients as $client)

        <tr>
          <td>{{$client->id}}</td>
          <td>{{$client->fname}}</td>
          <td>{{$client->lname}}</td>
          <td>{{$client->gender}}</td>
          <td>{{$client->nic}}</td>
          <td>{{$client->contact}}</td>
          <td>{{$client->address}}</td>
          <td>{{$client->email}}</td>
          <td>
          <a href="{{route('admin-clients.edit',$client->id)}}" class="btn btn-primary">Edit</a>
          </td>
        </tr>

        @endforeach

      </table>


      </div>
    </section>




@endsection