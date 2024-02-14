<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員一覧</title>
    
<!--Bootstrap CSS-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>

<!-- ＴＯＰ 会員一覧ページ表示 -->
<div style="width: 600px; margin: 100px auto;">
    <div style="text-align:right; margin-bottom: 10px;">
        <a href="/register"> >>登録 </a>
    </div>
    
    <div>
        <table class="table table-bordered">
            <!-- テーブル本体 -->
                <tr class="text-center">
                    <th>名前</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th> </th>
                </tr>
                @foreach ($members_list as $members)
                    <tr>
                        <td class="table-members">
                            {{ $members->name }}
                        </td>
                        <td class="table-members">
                            {{ $members->phone }}
                        </td>
                        <td class="table-members">
                            {{ $members->email }}
                        </td>
                        <td>
                            <a href="/edit/{{$members->id}}"> >>編集 </a>
                        </td>
                    </tr>
                @endforeach          
        </table>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>


</body>
</html>