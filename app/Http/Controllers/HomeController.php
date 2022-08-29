<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('login')->only('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Tieu de trang";
        $description = "Mo ta chi tiet thong tin trang";

        // return view('clients/home/index', ['title' => $title, 'description' => $description]);
        // return view('clients/home/index')->with(['title' => $title, 'description' => $description]);
        // return view('clients/home/index', compact('title', 'description'));
        return View::make('clients.home.index', compact('title', 'description'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Tao san pham";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Chi tiet san pham';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Chinh sua san pham";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Một vài phương thức request
        // - $request->all(): Lấy tất cả dữ liệu
        // - $request->path(): Lấy path trong URL
        // - $request->url(): Lấy URL (không lấy query string)
        // - $request->fullUrl(): Lấy URL (bao gồm query string)
        // - $request->method(): Lấy Method
        // - $request->isMethod('GET'): Kiểm tra method request vào có phải là GET hay không
        // - $request->ip(): Lấy ip
        // - $request->server(): Lấy các thông tin trong server (Ex: User Agent)
        // - $request->header(): Lấy các thông tin trong header
        // - $request->input([tham số trong query]): Lấy các thông tin trong query string
        // - $request->[tên tham số trong query string]: Lấy giá trị của query string
        // - $request([tên tham số trong query string], [Giá trị mặc định]): Lấy giá trị của query string hoặc trả về giá trị mặc định nếu query string là null
        // - $request->query([tên tham số trong query string]): Lấy giá trị trong query string
        // - $request->has([tên tham số trong query string]): Kiểm tra tham số tồn tại giá trị trong query string
        // - $request->flash(): Lưu các query string vào session và lưu trữ trong 1 lần request (load trang lại là mất dữ liệu)
        // - $request->old([field], [Giá trị mặc định]): Gọi query string từ session đã lưu trước đó
        // - $request->file('photo') hoặc $request->photo: Lấy file gửi lên từ local
        // - $request->hasFile('photo'): Kiểm tra local có gửi file lên hay không
        // - $request->file('photo')->isValid(): Kiểm tra file đã upload thành công hay chưa
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
