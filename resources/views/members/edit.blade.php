<!-- 会員登録編集画面 -->
    <div> 
        <h1>会員登録 会員ID:{{$members->id}}</h1>
        <form action="{{ url('memberEdit') }}" method="POST" class="">
        @csrf
            <div><input class="form-control" type="text" name="id" value="{{$members->id}}" hidden></div>
            <div class="from-group"><input class="form-control" type="text" name="name"  value="{{$members->name}}"></div>
            <div class="from-group"><input class="form-control" type="text" name="phone"  value="{{$members->phone}}"></div>
            <div class="from-group"><input class="form-control" type="text" name="email"  value="{{$members->email}}"></div>
            <div class="from-group"><button type="submit" class="btn btn-secondary">編集</button></div>
            <div class="from-group">
                <a href="{{ url('memberDelete/'.$members->id) }}" class="botton">削除</a>
            </div>
        </form>
    </div>