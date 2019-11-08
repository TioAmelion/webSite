<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

 @csrf
 <div class="form-group">
  <label class="col-md-4 text-right">Enter First Name</label>
  <div class="col-md-8">
   <input type="text" name="first_name" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Enter Last Name</label>
  <div class="col-md-8">
   <input type="text" name="last_name" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Select Profile Image</label>
  <div class="col-md-8">
   <input type="file" name="image" />
  </div>
 </div>
 <br /><br /><br />
 <div class="form-group text-center">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
 </div>

</form>
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="35%">First Name</th>
  <th width="35%">Last Name</th>
  <th width="30%">Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->first_name }}</td>
   <td>{{ $row->last_name }}</td>
   <td>
    
   </td>
  </tr>
 @endforeach
 </table>
</body>
</html>