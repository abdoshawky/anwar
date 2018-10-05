@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Store upnormal category
                        <a class="pull-left btn btn-sm" download href="{!! url('json/categoriesUpnormal.json') !!}">Download</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{!! url('/categories/upnormal') !!}">
                            {!! csrf_field() !!}
                            

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
                    <th>Name</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{!! $category->id !!}</td>
                        <td>{!! $category->name !!}</td>
                        <td>
                            <form method="post" action="{!! url('categories/'.$category->id.'/upnormal') !!}" style="display: inline-block">
                                {!! csrf_field() !!}
                                {!! method_field('delete') !!}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateCategory-{!! $category->id !!}">
                                Edit
                            </button>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            {!! $categories->links() !!}

            @foreach($categories as $category)
                <!-- Modal -->
                <div class="modal fade" id="updateCategory-{!! $category->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form method="POST" action="{!! url('/categories/'.$category->id.'/upnormal') !!}">
                                        {!! csrf_field() !!}
                                        {!! method_field('put') !!}


                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $category->name }}" required autofocus>

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
                                                    Update
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
