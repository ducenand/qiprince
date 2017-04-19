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
               <ul class="list-group">
                   @foreach ($data as $v)
                       <li class="list-group-item">
                           <div class="articleBox">
                               {{$v->user->name}}
                               <a href="{{route('detail',['aid'=>$v->aid])}}">{{$v->title}}</a>
                           </div>

                       </li>
                   @endforeach

                 <li class="list-group-item">{{ $data->links() }}</li>
               </ul>

           </div>


           <div class="col-md-3">
               <div class="row">
                   <button class="btn btn-success">添加文章</button>
               </div>
           </div>
       </div>
    </div>

@endsection