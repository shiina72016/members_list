<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\members; //membersコントローラーはmembersモデルを使用する

class membersController extends Controller
{

/**トップページ     */
    public function members(){
        //memberテーブルに入っているレコードを全て取得する
        $member = Mennbar::all();
        \Log::channel('debug')->info($member);

        return view ('member')->with([
            'member' => $member,
        ]);
    }


    /**メンバー一覧
    * @param Request $request
    * @return Response
    */
    //登録の画面を渡す処理↓
    public function index(Request $request)
    {
        $members = members::get();
        return view('members.index', [ //←members/index.bladeのファイル
            'members_list' => $members,
        ]);
    }

    /** 登録処理
        * @param(引数データ) Request $request     //@タグ名・型/クラス・名前//変数
        * @return(戻り値) Response
        */
        public function registermember(Request $request){ //登録できたデータをrequestで受け取る
            //新しくレコードを追加する（登録）
            $members = new members();
            $members ->name = $request ->name;
            $members ->phone = $request ->phone;
            $members ->email = $request ->email;
            $members ->save();

            return redirect('/members');
        }


    public function register(Request $request)
    {
        return view('members.create');
    }

    /**削除処理 */

    
}

