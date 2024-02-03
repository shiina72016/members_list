<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\members; //membersコントローラーはmembersモデルを使用する

class membersController extends Controller
{
    /**メンバー一覧
    * @param Request $request
    * @return Response
    */
    public function index(Request $request)
    {
        $members = members::get();
        return view('members.index', [
            'members_list' => $members,
        ]);
    }

    /** 削除処理 */


    /**登録処理 */


}

