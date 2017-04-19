@extends('layouts.front.layout')

@section('css')
    {!!editor_css()!!}
@endsection
@section('content')
    <div class="container">
        <form action="{{'create'}}" method="post">
            {!! csrf_field() !!}
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">请选择分类</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请选择分类">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">文章标题</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="文章标题">
                </div>
            </div>
            <div class="col-md-12">
                <div id="editormd_id">
                    <textarea name="content" style="display:none;"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-block" value="提交文章">
            </div>
        </form>
    </div>
@section('js')

    <script src="//cdn.bootcss.com/jquery/2.1.0/jquery.min.js"></script>
    {!! editor_js() !!}
@endsection

@endsection

