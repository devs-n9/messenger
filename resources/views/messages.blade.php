@extends('layout')

@section('content')
<style>
    .message{
        margin: 5px 0;
        padding: 5px;
        border-radius: 5px;
        background-color: #F7F7F7;
    }
    .message p{
        margin: 0;
    }
    .btn{
        display: block;
        margin: 10px auto;
    }
    .data{
        font-size: 12px;
    }
    a, a:hover, a:active, a:link, a:visited{
        text-decoration: none;
        color: black;
    }
</style>

<div class="col-md-6">
    
    @foreach($messages as $message)
    <div class="message">
    <p>{{$message->text}}</p>
    <p class="data">{{$message->data}}<a href="{{ route('message.delete', ['messages_id' => $message->id]) }}" class="glyphicon glyphicon-trash"></a></p>
    </div>
    @endforeach
   
    <form action="{{ route("message.create") }}" method="post">
       <textarea class="form-control" rows="3" name="text"></textarea>
       <button type="submit" class="btn btn-primary">Отправить</button>
       <input type="hidden" value="{{ Session::token() }}" name="_token">
   </form>
</div>

@endsection