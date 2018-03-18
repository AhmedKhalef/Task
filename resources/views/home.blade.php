@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center">Products List</h3>    
    <div class="row">
        <span>Filter</span>
        <div class="form-group">
            <label class="col-sm-2 control-label">Country</label>
            <div class="col-sm-10">
                <select name="" id="country" class="form-control">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">City</label>
            <div class="col-sm-10">
                <select name="" id="city" class="form-control">
                    <option value=""></option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </div>
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead class="text-center">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Details</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Details</td>
                    <td>City</td>                    
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
