<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\About;

class AdminAboutUsController extends Controller
{

    /**
     * @param $offset
     * @param $limit
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $about = About::paginate(6);
        return view('admin.aboutUs')->with('about',$about);

    }


    public function create()
    {
        return view('admin.aboutCreate');
    }


    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {


        $about = About::find($id);
        if ($about == null) {
            return response()->json([
                'success' => false,
                'message' => 'Data not found or not exist.',
                'data' => $about,
                'errors' => true
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Single about data.',
            'data' => $about,
            'errors' => false
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'meta_id' => 'required|max:3',
            'name_ru' => 'required',
            'name_am' => 'required',
            'name_en' => 'required',
            'description_ru' => 'required',
            'description_am' => 'required',
            'description_en' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $about = About::create($request->all());

        if ($about) {
            return redirect(url('admin/insert/aboutUs'));
        }

    }



    public function edit($id){
        $about = About::find($id);
        if(!$about){ return view('admin.404');}
        return view('admin.aboutUpdate')->with('about', $about);

    }







    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {

        $about = About::find($id);
        if ($about == null) {
          return view('admin.404');
        }

        $validator = Validator::make($request->all(), [
            'meta_id' => 'required',
            'name_ru' => 'required',
            'name_am' => 'required',
            'name_en' => 'required',
            'description_ru' => 'required',
            'description_am' => 'required',
            'description_en' => 'required'
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $about->update($request->all());
        return redirect(url('admin/insert/aboutUs'));
    }


    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect(url('admin/insert/aboutUs'));
    }
}
