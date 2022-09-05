@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-sm-8"></div>
        <div class="col-sm-4">
            <a class="btn btn-primary" href="{{ route('article.create') }}">CREATE NEW ARTICLE</a>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <th>TITLE</th>
                <th>CONTENT</th>
                <th>CREATED DATE</th>
                <th>ACTION</th>
            </thead>
            <tbody>
                @if(!empty($articles))
                    @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->content }}</td>
                        <td>{{ date('d-m-Y', strtotime($article->created_at)); }}</td>
                        <td>
                            <a style="color:white;" class="btn btn-secondary" href="{{ route('article.show',['article'=>$article->id]) }}">SHOW</a>
                            <a style="color:white;" class="btn btn-info" href="{{ route('article.edit',['article'=>$article->id]) }}">EDIT</a>
                            <a class="btn btn-danger" href="{{ route('delete_article',$article->id) }}">DELETE</a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection