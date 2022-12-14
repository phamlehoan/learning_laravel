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
        $title = "Tao home";
        return view('clients.home.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username = $request->all()['username'];
        // $request->session()->flash('info', $username);
        // return redirect('/homes');
        return redirect('/homes')->with('info', $username);
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
        // M???t v??i ph????ng th???c request
        // - $request->all(): L???y t???t c??? d??? li???u trong body
        // - $request->path(): L???y path trong URL
        // - $request->url(): L???y URL (kh??ng l???y query string)
        // - $request->fullUrl(): L???y URL (bao g???m query string)
        // - $request->method(): L???y Method
        // - $request->isMethod('GET'): Ki???m tra method request v??o c?? ph???i l?? GET hay kh??ng
        // - $request->ip(): L???y ip
        // - $request->server(): L???y c??c th??ng tin trong server (Ex: User Agent)
        // - $request->header(): L???y c??c th??ng tin trong header
        // - $request->input([tham s??? trong query]): L???y c??c th??ng tin trong query string
        // - $request->[t??n tham s??? trong query string]: L???y gi?? tr??? c???a query string
        // - $request([t??n tham s??? trong query string], [Gi?? tr??? m???c ?????nh]): L???y gi?? tr??? c???a query string ho???c tr??? v??? gi?? tr??? m???c ?????nh n???u query string l?? null
        // - $request->query([t??n tham s??? trong query string]): L???y gi?? tr??? trong query string
        // - $request->has([t??n tham s??? trong query string]): Ki???m tra tham s??? t???n t???i gi?? tr??? trong query string
        // - $request->flash(): L??u c??c query string v??o session v?? l??u tr??? trong 1 l???n request (load trang l???i l?? m???t d??? li???u)
        // - $request->old([field], [Gi?? tr??? m???c ?????nh]): G???i query string t??? session ???? l??u tr?????c ????
        // - $request->file('photo') ho???c $request->photo: L???y file g???i l??n t??? local
        // - $request->hasFile('photo'): Ki???m tra local c?? g???i file l??n hay kh??ng
        // - $request->file('photo')->isValid(): Ki???m tra file ???? upload th??nh c??ng hay ch??a
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

    public function downloadImage(Request $request)
    {
      if(!empty($request->image_url)) {
        $image = trim($request->image_url);
        $image_name = 'image-'.uniqid().'.jpg';

        return response()->streamDownload(function() use ($image) {
            $img_content = file_get_contents($image);
            echo $img_content;
        }, $image_name);
      }
    }
}
