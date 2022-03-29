<h2>My Profile:</h2>

<table style="width:100%">
  <tr>
    <th>First-Name:</th>
    <td>{{$member->fname}}</td>
  </tr>
  <tr>
    <th>Last-Name:</th>
    <td>{{$member->lname}}</td>
  </tr>
  <tr>
    <th>Email:</th>
    <td>{{$member->email}}</td>
  </tr>
  <tr>
    <th>Mobile:</th>
    <td>{{$member->mobile}}</td>
  </tr>
  <tr>
    <th>Category:</th>
    <td>{{$member->category}}</td>
  </tr>
  <tr>
    <th>Qualification:</th>
    <td>{{$member->qualification}}</td>
  </tr>
  <tr>
    <th>Work:</th>
    <td>{{$member->work}}</td>
  </tr>
  <tr>
    <th>Aadhar Number:</th>
    <td>{{$member->aadhar_no}}</td>
  </tr>
  <tr>
    <th>Pan Card Number:</th>
    <td>{{$member->pan_no}}</td>
  </tr>
  <tr>
    <th>State:</th>
    <td>{{$member->states->name}}</td>
  </tr>
  <tr>
    <th>City:</th>
    <td>{{$member->cities->name}}</td>
  </tr>
  <tr>
    <th>Created By:</th>
    <td>{{$member->membersuser ? $member->membersuser->name  : ''}}</td>
  </tr>
  <tr>
    <th>Tehshil:</th>
    <td>{{$member->teshil}}</td>
  </tr>
  <tr>
    <th>Punchayat:</th>
    <td>{{$member->panchayat}}</td>
  </tr>
  <tr>
    <th>Village:</th>
    <td>{{$member->village}}</td>
  </tr>
  <tr>
    <th>Pin Code:</th>
    <td>{{$member->picode}}</td>
  </tr>
  <tr>
    <th>Comments:</th>
    <td>{{$member->comment}}</td>
  </tr>
  <tr>
    <th>ID Proof:</th>
    <td><img src="{{ asset('image/'.$member->id_proof) }}" alt="$member->id_proof" width="150" height="100"></td>
  </tr>
</table>