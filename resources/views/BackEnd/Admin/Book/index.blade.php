@extends('BackEnd.Admin.Layouts.app')
@section('title','Book List')
@section('content')
<div class="content"> 
    <!-- Order direction sequence control -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Book List</h5>
            <div class="heading-elements">
              
                    <a href="{{ route('bookCreate') }}" type="button" class="btn btn-primary" >Add a New Course</a>
                
            </div>
        </div>

        <div class="panel-body">
            We launch these course in this year  
        </div>

        <table class="table datatable-sequence-control">
            <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Book Category</th>
                    <th>Books Price</th>
                    <th>Books Stutus</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($books as $book)
                    <td>{{ $book->BooksName }}</td>
                    <td><a href="#">{{ $book->BooksCategory }}</a></td>
                    <td>{{ $book->BooksPrice }}</td>
                    <td><span class="label label-success">{{ $book->BooksStatus }}</td>
                    <td class="text-center">
                        <ul class="icons-list">
                            
                            <div class="text-right">
                                <form action="{{ route('courseDelete',$book->id) }}" method="POST">
                                    
                                @csrf
                                @method('DELETE')
                                        <a type="button" style="margin-right: 5px" href="{{ route('bookEdit', $book->id) }}"  class="btn btn-primary"><i class="icon-pencil4"></i></a>
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