@extends('welcome')

@section('content')
    <div class="row" class="px-5 py-5">
        <div class="col-sm-12">
            <h5>CREATE ARTICLE</h5>
            {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\ArticleController@store','class'=>'form','id'=>'create_article','enctype' => 'multipart/form-data']) !!}
            {!! Form::close() !!}
            <div class="col-sm-12">
                {!! Form::label('title') !!}
                {!! Form::text('title',null, ['class'=>'form-control','form'=>'create_article'])!!}

                {!! Form::label('content') !!}
                {!! Form::text('content',null, ['class'=>'form-control','form'=>'create_article'])!!}

                {!!  Form::submit('POST', ['class'=>'btn btn-success btn-block mt-2','form'=>'create_article'])!!}
                <a class="mt-2 btn btn-danger" href="{{ route('article.index') }}">GO BACK</a>
            </div>
            
        </div>
    </div>
@endsection