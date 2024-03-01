<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\members; //membersコントローラーはmembersモデルを使用する

class MemberController extends Controller
{

/**トップページ     */
    public function top(){
        //membersテーブルに入っているレコードを全て取得する
        $members = members::all();
        \Log::channel('debug')->info($members);

        return view ('top')->with([
            'members' => $members,
        ]);
    }


    /**メンバー一覧*/
    //登録の画面を渡す処理↓
    public function index(Request $request)
    {
        $members = members::get();
        return view('members.index', [ //←members/index.bladeを画面に映す
            'members_list' => $members,
        ]);
    }

    /** 登録処理
        * @param(引数データ) Request $request     //@タグ名・型/クラス・名前//変数
        * @return(戻り値) Response
        */

        public function register() //registerを呼び出したら
        {                                          //create.bladeが画面に表示される
            return view('members.create');
        }
    

        public function registermember(Request $request){ //登録できたデータをrequestで受け取る
            $request->validate([
                'name'=>'required|max:20',
                'phone' => 'required | numeric | digits_between:8,11',
                'email' => 'required | string | email:strict,dns,spoof | max:255 | unique:users',
            ]);
            
            //新しくレコードを追加する（登録）
            $members = new members();
            $members ->name = $request ->name;
            $members ->phone = $request ->phone;
            $members ->email = $request ->email;
            $members ->save();

            return redirect('/top');  //トップページに返す
        }


    /**編集処理 */
    public function edit(Request $request){
    //requestのデータをlogに出力
    //  \Log::channel('debug')->info('edit時に送信するID);
    //  \Log::channel('debug')->info('$request->id);

    //一覧から指定されたIDと同じIDのレコードを取得する
    $members = members::where('id','=', $request->id)->first();
    return view('members.edit')->with([
        'members' => $members,
    ]);
    }

    /**編集処理  書き換え */
    //既存のレコードを取得して、編集してから保存する
    public function memberEdit(Request $request){
        $request->validate([
            'name'=>'required|max:20',
            'phone' => 'required | numeric | digits_between:8,11',
            'email' => 'required | string | email:strict,dns,spoof | max:255 | unique:users',
        ]);


        $members = members::where('id','=',$request->id)->first();
        $members ->name = $request ->name;
        $members ->phone = $request ->phone;
        $members ->email = $request ->email;
        $members ->save();

        return redirect('/top');
    }



    /**削除処理 */

    //既存のレコードを取得して削除する
    public function memberDelete(Request $request)
    {
        $members = members::where('id','=',$request->id)->first();
        $members ->delete();

        return redirect('/top');
    }

    public function useModel(Request $request){

    return redirect('/top');
    }

}
