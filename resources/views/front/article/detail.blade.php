@extends('layouts.front.layout')
@section('content')

    <div class="jumbotron">
        <div class="container">
            <h2>快速加入我们</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                    <div class="blog-post">
                        <h2 class="blog-post-title">Sample blog post</h2>
                        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

                        <p>{{$data->content}}</p>
                    </div>
            </div>


            <div class="col-md-3">

            </div>
        </div>
    </div>
    <script src="/hyperdown/Parser.js"></script>
    <script>
        var parser = new HyperDown,
            html = parser.makeHtml(markdownText);
    </script>

@endsection