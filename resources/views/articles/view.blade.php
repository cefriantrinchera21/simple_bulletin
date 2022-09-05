@extends('welcome')

@section('content')
    <div class="row" class="px-5 py-5">
        <div class="col-sm-12">
            <h5>EDIT ARTICLE</h5>
            {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\ArticleController@update_article','class'=>'form','id'=>'create_article','enctype' => 'multipart/form-data']) !!}
            {!! Form::close() !!}
            <div class="col-sm-12">
                <h1>{{ $article->title }}</h1>
                <p>{{ $article->content }}</p>
              
                <a class="mt-2 btn btn-danger" href="{{ route('article.index') }}">GO BACK</a>
            </div>
            
        </div>
    </div>
@endsection