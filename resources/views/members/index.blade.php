@extends('layouts.app')

@section('content')

<!-- 会員一覧ページ表示 -->
@if (count($members_list) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Current members
    </div>

    <div class="panel-body">
        <table class="table table-striped members-table">

            <!-- テーブルヘッダ -->
            <thead>
                <th>>> 登録</th>
            </thead>

            <!-- テーブル本体 -->
            <tbody>
                @foreach ($members_list as $member)
                <tr>
                    <!-- 会員一覧 -->
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
                        >> 編集
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection

