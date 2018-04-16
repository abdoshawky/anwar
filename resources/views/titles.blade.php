@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Store title
                        <a class="pull-left btn btn-sm" download href="{!! public_path('json/titles.json') !!}">Download</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{!! url('/titles') !!}">
                            @csrf

                            <div class="form-group row">
                                <label for="category_id" class="col-md-4 col-form-label text-md-right">Category</label>

                                <div class="col-md-6">
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">Choose Category</option>
                                        @foreach($categories as $category)
                                            <option @if(session()->has('category_id') && session()->get('category_id') == $category->id) selected @endif value="{!! $category->id !!}">{!! $category->id.' - '.$category->name !!}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('category_id'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($titles as $title)
                    <tr>
                        <td>{!! $title->id !!}</td>
                        <td>{!! $title->category->name !!}</td>
                        <td>{!! $title->name !!}</td>
                        <td>
                            <form method="post" action="{!! url('titles/'.$title->id) !!}">
                                {!! csrf_field() !!}
                                {!! method_field('delete') !!}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
