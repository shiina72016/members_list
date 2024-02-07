    <!-- 会員一覧ページ表示 -->
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