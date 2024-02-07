<!-- 会員登録編集画面 -->

<form action="memberEdit" method="POST" class="">
@csrf
    <div> 
        <h1>会員登録 会員ID:{{$member->id}}</h1>

        <div><input class="form-control" type="text" name="id" value="{{$member->id}}" hidden></div>
        <div class="from-group"><input class="form-control" type="text" name="name"  value="{{$member->name}}"></div>
        <div class="from-group"><input class="form-control" type="text" name="phone"  value="{{$member->phone}}"></div>
        <div class="from-group"><input class="form-control" type="text" name="email"  value="{{$member->email}}"></div>
        <div class="from-group"><button type="submit" class="btn btn-secondary">編集</button></div>
        <div class="from-group">
            <a href="/memberDelete/{{$member->id}}"></a><button type="button" class="btn btn-secondary">削除</button></a>
        </div>
    </div>
</form>
