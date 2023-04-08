@extends('BackEnd.Admin.Layouts.app')
@section('title','BSc in Nursing')
@section('content')
<div class="content"> 
    <!-- Order direction sequence control -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">BSc Studen Data</h5>
            <div class="heading-elements">
              
                    <a href="{{ route('bscCreate') }}" type="button" class="btn btn-primary" >Add a New Course</a>
                
            </div>
        </div>

        <div class="panel-body">
            We launch these course in this year  
        </div>

        <table class="table datatable-multi-sorting">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Verified Phone</th>
                    <th>Course</th>
                    <th>Book</th>
                    <th>District</th>
                    <th>Area</th>
                    <th>Address</th>
                    <th>Fee</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($Bscdata as $data)
                    <td>{{ $data->BscStName }}</td>
                    <td><a href="#">{{ $data->BscStPhone }}</a></td>
                    <td>{{ $data->BscStVeriPhone }}</td>
                    <td>{{ $data->BscStCours }}</td>
                    <td>{{ $data->BscStBooks }}</td>
                    <td>{{ $data->BscStDistrict }}</td>
                    <td>{{ $data->BscStArea }}</td>
                    <td>{{ $data->BscStAddress }}</td>
                    <td>{{ $data->BscStFee }}</td>
                    <td class="text-center">
                        <ul class="icons-list">
                            
                            <div class="text-right">
                                <form action="{{ route('bscDelete',$data->id) }}" method="POST">
                                    
                                @csrf
                                @method('DELETE')
                                        <a type="button" style="margin-right: 5px" href="{{ route('bscEdit', $data->id) }}"  class="btn btn-primary"><i class="icon-pencil4"></i></a>
                                        <button  type="submit" class="btn btn-danger btn-sm "><i class="icon-trash"></i></button>  
                                </form>
                            </div>
                                   
                                
                            
                        </ul>
                    </td>
                    <tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <!-- /order direction sequence control -->
</div>

@endsection