@extends('layouts.app')

@section('content')

    @foreach($errors->all() as $message)
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @endforeach

    {{Form::model($distributor, ['route' => ['distributors::distributor::store'], 'id' => 'form-create-distributor'])}}
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
        {{Form::submit('Сохранить', ['class' => 'btn btn-default', 'id' => 'btn-save-distributor'])}}
    </div> {{Form::close()}}
    <div id="distributors-list">
        <h1>Distributors</h1>
        @include('distributors.list')
    </div>

@endsection
