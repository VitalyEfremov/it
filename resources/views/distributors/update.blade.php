@extends('layouts.app')

@section('content')

    @foreach($errors->all() as $message)
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @endforeach


    {{Form::model($distributor, [
    'route' => ['distributors::distributor::update', $distributor->id],
    'method' => 'put' ])}}

    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', null, ['class' => 'form-control'])}}
        {{Form::label('phone', 'Phone')}}
        {{Form::text('phone', null, ['class' => 'form-control'])}}
        {{Form::label('site', 'Site URL')}}
        {{Form::text('site', null, ['class' => 'form-control'])}}
        {{Form::hidden('author_id', auth()->user()->getAuthIdentifier())}}
    </div>
    <div class="form-group">
        {{Form::submit('Сохранить', ['class' => 'btn btn-default'])}}
    </div> {{Form::close()}}
@endsection
