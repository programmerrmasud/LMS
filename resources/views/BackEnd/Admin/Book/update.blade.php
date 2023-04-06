
@extends('BackEnd.Admin.Layouts.app')
@section('title','Update a Book')
@section('content')
<div class="content"> 
    <div class="col-md-6">
        <form action="{{ route('bookUpdate',$book->id) }}" method="POST" >
            @csrf
            @method('PUT')
            <fieldset>
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">Update Book</h6>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label>Books Name</label>
                        <input type="text" class="form-control" placeholder="Book Name" name="BooksName" value="{{ old('BooksName', $book->BooksName) }}">
                    </div>

                    <div class="form-group">
                        <label> Books Category </label>
                        <select class="form-control" name="BooksCategory" id="BooksCategory">
                            <option value="Medical" {{ ($book->BooksCategory === 'Medical') ? 'selected' : '' }}>Medical</option>
                            <option value="University" {{ ($book->BooksCategory === 'University') ? 'selected' : '' }}>University</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Books Status</label>
                        <select class="form-control" name="BooksStatus" id="BooksStatus">
                            <option value="Active" {{ ($book->BooksStatus === 'Active') ? 'selected' : '' }}> Active </option>
                            <option value="Inactive" {{ ($book->BooksStatu === 'Inactive') ? 'selected' : '' }}> Inactive </option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label>Books Price </label>
                        <input type="number" class="form-control" placeholder="Amount" name="BooksPrice" value="{{ old('BooksPrice', $book->BooksPrice) }}">
                    </div>

                    <div class="text-right" >
                        <a href="{{ route('bookIndex') }}" type="button"   class="btn btn-primary">Back to Book <i class="icon-square-left position-right"></i></a>
                        <button type="submit" class="btn bg-teal-400">Update Book <i class="icon-arrow-right14 position-right"></i></button>
                       
                    </div>
                </div>
            </div>
        </fieldset>
        </form>
    </div>
</div>

@endsection
