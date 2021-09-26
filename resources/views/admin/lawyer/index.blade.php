@extends('admin.layout.master')
@section('content')

<h1>Lawyer Registration</h1>

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Register New Lawyer
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
      <form method="post" action="New Lawyer">
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
                
                
            
                   </div>
            <div class="form-group">

<label for="client_name">First Name:</label>
    <input type="text" class="form-control" name="fname"/>
        </div>
            <div class="form-group">
                <label for="cases">Last Name :</label>
                <input type="text" class="form-control" name="lname"/>
            </div>
            <div class="form-group">
            <input type="radio" name="lawyer_type" id="lawyer_type_PC" value="President's Counsel" />
                 <label for="lawyer_type_PC">President's Counsel</label>  
                 <input type="radio" name="lawyer_type" id="lawyer_type_AAL" value="Attorney-at-Law" />
                 <label for="lawyer_type_AAL">Attorney-at-Law</label>

                   <br/>
                   </div>
            <div class="form-group">
              <label for="cases">NIC/Passport No:</label>
              <input type="text" class="form-control" name="nic"/>
            </div>
            <div class="form-group">
              <label for="cases">SC Enrolment No:</label>
              <input type="text" class="form-control" name="scenlno"/>
            </div>
            <div class="form-group">
              <label for="cases">BASL Membership No:</label>
              <input type="text" class="form-control" name="baslno"/>
            </div>
            <div class="form-group">
            <label for="cases">Professional & Academic Qualifications :</label>
            <input type="checkbox" id="qualification1" name="qualification1" value="Attorney-at-Law">
  <label for="qualification1"> Attorney-at-Law</label>
  <input type="checkbox" id="qualification2" name="qualification2" value="llb">
  <label for="qualification2">LLB</label>
  <input type="checkbox" id="qualification3" name="qualification3" value="llm">
  <label for="qualification3"> LLM</label>
  <input type="checkbox" id="qualification4" name="qualification4" value="phd">
  <label for="qualification3"> PhD</label>
            </div>
            <div class="form-group">
              <label for="cases">Years of Practice:</label>
              <input type="text" class="form-control" name="Years"/>
            </div>
            <div class="form-group">
              <label for="cases">Area of Practice:</label>
                 <select>  
                    <option value="Select">Select</option> 
                    <option value="Civil law">Civil law</option>
                    <option value="Commercial law">Commercial law</option>  
                    <option value="Criminal law">Criminal law</option>  
                    <option value="Labour law">Labour law</option>
                    <option value="Arbitration law">Arbitration law</option>  
                    <option value="IP law">Intellectual Property law/ICT law</option>  
                    <option value="Tax law">Tax law</option>  
                    <option value="Environmental law">Environmental law</option>
                    <option value="Human Rights law">Human Rights law</option> 
                    <option value="nonspecific">Nonspecific</option> 
                 </select> 
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