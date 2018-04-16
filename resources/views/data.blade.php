@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Store data
                        <a class="pull-left btn btn-sm" download href="{!! public_path('json/data.json') !!}">Download</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{!! url('/data') !!}">
                            @csrf

                            <div class="form-group row">
                                <label for="section_id" class="col-md-4 col-form-label text-md-right">Section</label>

                                <div class="col-md-6">
                                    <select name="section_id" id="section_id" class="form-control">
                                        <option value="">Choose Section</option>
                                        @foreach($sections as $section)
                                            <option @if(session()->has('section_id') && session()->get('section_id') == $section->id) selected @endif value="{!! $section->id !!}">{!! $section->id.' - '.$section->name !!}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('section_id'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('section_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="key" class="col-md-4 col-form-label text-md-right">key</label>

                                <div class="col-md-6">
                                    <input id="key" type="text" class="form-control{{ $errors->has('key') ? ' is-invalid' : '' }}" name="key" value="{{ old('key') }}" required autofocus>

                                    @if ($errors->has('key'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('key') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="karat_message" class="col-md-4 col-form-label text-md-right">Karat Message</label>

                                <div class="col-md-6">
                                    <input id="karat_message" type="text" class="form-control{{ $errors->has('karat_message') ? ' is-invalid' : '' }}" name="karat_message" value="{{ old('karat_message') }}" required>

                                    @if ($errors->has('karat_message'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('karat_message') }}</strong>
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
                    <th>Section</th>
                    <th>Key</th>
                    <th>Karat Message</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->section->title->category->name !!}</td>
                        <td>{!! $item->section->title->name !!}</td>
                        <td>{!! $item->section->name !!}</td>
                        <td>{!! $item->key !!}</td>
                        <td>{!! $item->karat_message !!}</td>
                        <td>
                            <form method="post" action="{!! url('data/'.$item->id) !!}">
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
