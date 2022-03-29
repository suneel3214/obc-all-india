@extends('layouts.app')
@extends('Admin.partial.header')
@extends('Admin.partial.sidenavbar')
@section('content')
@include('sweetalert::alert')

<div class="comtainer">
          <div class="row">
              <div class="col-xl-12 text-end">
                  <a href="{{ route('exports') }}" class="btn btn-primary">Export to Excel/CSV</a>
                  <a class="btn btn-primary" style="background-color:green!important;" href="{{ route('members.create') }}">Registration Member's</a>
              </div>
          </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
          
            <!-- members table start -->
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">City</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php $count = 1; ?>
                @foreach($members as $member)
                      <tbody>
                          <tr>
                          <th scope="row">{{$count ++}}</th>
                          <td>{{$member->fname}}</td>
                          <td>{{$member->lname}}</td>
                          <td>{{$member->mobile}}</td>
                          <td>{{$member->cities ? $member->cities->name  : ''}}</td>
                          <td>
                          <form action="{{route('members.destroy',$member->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="button" class="btn btn-warning showbtn btn-sm" value="{{$member->id}}">Profile</button>
                          <a href="{{route('members.edit',$member->id)}}" class="btn btn-success btn-sm" >Edit</a>
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                          </form>

                        </td>
                          </tr>
                      </tbody>
                @endforeach
                <tr>
                    <td colspan="12" align="left" style="text-decoration:none;">
                  {{ $members->links() }}
                    </td>
                </tr>
           </table>
            <!-- members table end  -->
            
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Member Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body showProfile">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->

<!----Delete modal end--->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
<script>
$(document).ready(function() {

    $(document).on('click' , '.showbtn' , function() {
        var member_id = $(this).val();  
        // alert(member_id);    
        $.ajax({

            type: "GET",
            url: "/member/active/"+member_id,
            success: function(response){
                $('.showProfile').html(response)
                $('#profileModal').modal('show');
           }
        });
    });
});
</script>

@include('Admin.partial.footer')
@endsection