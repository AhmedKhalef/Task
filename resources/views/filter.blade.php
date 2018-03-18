<div class="container">
    <div class="row">
        
        <form action="result" method="POST" class="form-inline" role="form" style="margin:20px; 0 20px 0;"> 
            @csrf       
            <div class="form-group">
                <label class="col-sm-2 control-label">Country</label>                    
                <select name="" id="country" class="form-control">
                    @foreach($countries as $country)                                    
                        <option value="{{ $country->id }}">{{ $country->country }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label >City</label>                    
                <select name="city" id="city" class="form-control">                    
                </select>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 20px;" >Filter</button>            
        </form>
        
    </div>
</div>
@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#country").append('<option selected>Select</option>');

    $('select#country').change(function() {
        $("#city").empty();        
        var countryID = $('select#country').find('option:selected').val();    
        if(countryID){
            $.ajax({
            type:"GET",
            url:"{{url('/get-city-list')}}"+'/'+countryID,
            success:function(res){               
                if(res){
                    $("#city").append('<option>Select</option>');
                    $.each(res,function(key,value){
                        $("#city").append('<option value="'+key+'">'+value+'</option>');
                    });
            
                }else{
                    $("#city").empty();
                }
            }
            });
        }else{
            $("#city").empty();
        }      
    });
});
</script>
@endpush