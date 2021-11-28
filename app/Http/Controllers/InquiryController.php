<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class InquiryController extends Controller
{
    // /inquiryページを表示
    public function inquiry()
    {
        return view('inquiry');
    }

    // データ確認
    public function confirm(ContactRequest $request)
    {
        $this->Validate($request, Contact::$ValidationRules);

        // バリデーション済データの取得
        // $validated = $request->validated();

        // バリデーション済み入力データの一部を取得
        // $validated = $request->safe()->only(['postcode']);


        // if (Contact::$ValidationRules->fails()) {
        //     return redirect('/');
        // }

        // if ($validated->fails()) {
        //     return redirect('/')->withErrors($validated)->withInput();
        // }

        // データ保存処理
        $data = $request->all();
        $data = Contact::create(['data' => $request->data]);

        return view('confirmation', ['data' => $data]);
    }

    // inquiryで入力したデータをDBに保存
    public function send(Request $request)
    {
        // DBに保存
        // $data = $request->all();
        // Contact::create($data);
        // $data = $request->input();
    }

    // サンクスページに遷移
    public function thanks(Request $request)
    {

        $data = Contact::all();
        return view('confirmation', ['data' => $data]);
        return view('thanks');
    }
}