<a href="{{ url('/register') }}">登録</a>


    
<!-- 会員一覧ページ表示 -->
@if (count($members_list) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Current members
    </div>

    <div class="panel-body">
        <table class="table table-striped members-table">

    <!--ヘッダ -->
    <div>
        <a href="/register"> >>登録 </a>
    </div>
            

            <!-- テーブル本体 -->
            <tbody>
                <tr>
                    <th>名前</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th> </th>
                </tr>
                @foreach ($members_list as $member)
                    <tr>
                        <td class="table-members">
                            {{ $member->name }}
                        </td>
                        <td class="table-members">
                            {{ $member->phone }}
                        </td>
                        <td class="table-members">
                            {{ $member->email }}
                        </td>
                        <td>
                            <a href=""> >>編集 </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif