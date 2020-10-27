@extends('layouts')

@section('content')

<div class="container mt-4">
    <div>
        <h1>
            投稿の新規作成
        </h1>
        
        <form　method="POST" action="{{ route('posts.store')}}">
            {{csrf_field()}}
            <fieldset>
                <div>
                    <label for="title">
                        タイトル
                    </label>
                    <input 
                        id="title"
                        name="title"
                        type="text"
                        >
                </div>
                <div>
                    <label for="body">
                        本文
                    </label>
                    
                    <textarea
                        id="body"
                        name="body"
                        rows="4"
                    >
                    </textarea>
                </div>
                
                <a href="{{route('top')}}">
                    キャンセル
                </a>
                
                <button type="submit">
                    投稿する
                </button>
            
            </fieldset>
        </form>
    </div>
</div>

@endsection('content')
