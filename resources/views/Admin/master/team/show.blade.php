<h2>My Profile:</h2>

<table style="width:100%">
  <tr>
    <th>Name:</th>
    <td>{{$data->name}}</td>
  </tr>
  <tr>
    <th>Designation:</th>
    <td>{{$data->designation}}</td>
  </tr>
  <tr>
    <th>Image:</th>
    <td><img src="{{ asset('image/'.$data->image) }}" width="150" height="100" style="margin-top:40px; border-radius:100%;"></td>
  </tr>
</table>