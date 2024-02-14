<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集・削除</title>

<!--Bootstrap CSS-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    

<!-- 会員登録編集画面 -->
    <div style="width: 300px; margin: 100px auto;"> 
        <div style="margin-bottom: 30px;"><h3>会員登録 会員ID:{{$members->id}}</h3></div>
        <form action="{{ url('memberEdit') }}" method="POST" class="">
        @csrf
            <div style="margin-bottom: 20px;"><input class="form-control" type="text" name="id" value="{{$members->id}}" hidden></div>
            <div  style="margin-bottom: 10px;" class="from-group"><input class="form-control" type="text" name="name"  value="{{$members->name}}"></div>
            <div  style="margin-bottom: 10px;" class="from-group"><input class="form-control" type="text" name="phone"  value="{{$members->phone}}"></div>
            <div  style="margin-bottom: 20px;"class="from-group"><input class="form-control" type="text" name="email"  value="{{$members->email}}"></div>
            <div style="margin-bottom: 5px;" class="from-group"><button type="submit" class="btn btn-secondary">編集</button></div>
            <div class="from-group">
                <a href="{{ url('memberDelete/'.$members->id) }}"><button type="submit" class="btn btn-secondary">削除</button></a>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>


</body>

</html>