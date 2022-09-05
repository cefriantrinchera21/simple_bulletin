@extends('welcome')

@section('content')
    <div class="row" class="px-5 py-5">
        <div class="col-sm-12">
            <h5>EDIT ARTICLE</h5>
            {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\ArticleController@update_article','class'=>'form','id'=>'create_article','enctype' => 'multipart/form-data']) !!}
            {!! Form::close() !!}
            <div class="col-sm-12">
                {!! Form::label('title') !!}
                {!! Form::hidden('article_id',$article->id, ['class'=>'form-control','form'=>'create_article'])!!}
                {!! Form::text('title',$article->title, ['class'=>'form-control','form'=>'create_article'])!!}

                {!! Form::label('content') !!}
                {!! Form::text('content',$article->content, ['class'=>'form-control','form'=>'create_article'])!!}

                {!!  Form::submit('SUBMIT', ['class'=>'btn btn-success btn-block mt-2','form'=>'create_article'])!!}
                <a class="mt-2 btn btn-danger" href="{{ route('article.index') }}">GO BACK</a>
            </div>
            
        </div>
    </div>
@endsection