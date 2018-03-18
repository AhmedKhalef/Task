@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="text-center">Products List</h3>    
    @include('filter')
    <div class="row justify-content-center">
        <table class="table table-hover" >
            <thead class="text-center">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Details</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody class="text-center" id="ProductTable">
            </tbody>
        </table>
    </div>
</div>
<button type="submit" id="loadMore" class="btn btn-info" style="margin-left: 43%;width: 226px;">Load More</button>
@endsection
@push('scripts')

<script>
$(document).ready(function(){
    var page = 1; 
    load_more(page); 
    $('#loadMore').click(function() {
        page++; 
        load_more(page); 
    });    
function load_more(page){
  $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html",
        })
        .done(function(data)
        {
            if(data.length == 0){               
            $('#loadMore').hide();
                return;
            }
            $("#ProductTable").append(data);
        })
        .fail(function(jqXHR, ajaxOptions, thrownError)
        {
              alert('No response from server');
        });
 }
});
</script>

@endpush