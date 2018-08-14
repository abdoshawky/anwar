@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Store section
                        <a class="pull-left btn btn-sm" download="download" href="{!! url('json/sections.json') !!}">Download</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{!! url('/sections') !!}">
                            {!! csrf_field() !!}

                            <div class="form-group row">
                                <label for="title_id" class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    <select name="title_id" id="title_id" class="form-control">
                                        <option value="">Choose Title</option>
                                        @foreach($titles as $title)
                                            <option @if(session()->has('title_id') && session()->get('title_id') == $title->id) selected @endif value="{!! $title->id !!}">{!! $title->id.' - '.$title->name !!}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('title_id'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id" class="col-md-4 col-form-label text-md-right">ID</label>

                                <div class="col-md-6">
                                    <input id="id" type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ old('id') }}">

                                    @if ($errors->has('id'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('id') }}</strong>
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
                    <th>Title</th>
                    <th>Name</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sections as $section)
                    <tr>
                        <td>{!! $section->id !!}</td>
                        <td>{!! $section->title->category->name !!}</td>
                        <td>{!! $section->title->name !!}</td>
                        <td>{!! $section->name !!}</td>
                        <td>
                            <form method="post" action="{!! url('sections/'.$section->id) !!}">
                                {!! csrf_field() !!}
                                {!! method_field('delete') !!}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            {!! $sections->links() !!}
        </div>
    </div>
@endsection
