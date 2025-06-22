<?php

namespace App\Http\Controllers;

use App\Models\About_site;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

class AboutSiteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lang = session('locale', 'kh');
        $about = About_site::where('lang', $lang)->first();

        if (!$about) {
            // Handle the case when no record is found
            return view('components.about.about_us')->withErrors('No about site data found for the selected language.');
        }

        return view('components.about.about_us', compact('about'));
    }


    /**
     * Display the user's profile form.
     */
    public function show() { 
        $lang = session('locale', 'kh'); 
        $about_data = About_site::where('lang', $lang)->first(); 
        return view('dashboard', compact('about_data'));
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request) { 
        try { 
            $lang = session('locale', 'kh'); 
            $about_site = About_site::where('lang', $lang)->first(); 
            if ($request->isMethod('post')) { 
                $request->validate([ 'brief' => 'required', 
                'vision' => 'required', 
                'advantages' => 'required', 
                'lang' => 'required', 
            ]); 
                \Log::info('Request Data:', $request->all()); 
                $imagePath = $request->hasFile('image') ? $request->file('image')->store('public') : null; 
                \Log::info('Image Path:', ['path' => $imagePath]); 
                About_site::create([ 'brief' => $request->input('brief'), 
                'vision' => $request->input('vision'), 
                'advantages' => $request->input('advantages'), 
                'lang' => $request->input('lang'), 
                'image' => $imagePath, 
            ]); 
                return redirect()->back()->with('success', 'Data submitted successfully!'); 
            } 
        return view('components.about.update_about_us', compact('about_site')); 
    } catch (\Exception $e) { 
        \Log::error('Error in editing about site:', ['error' => $e->getMessage()]); 
        return redirect()->back()->with('error', 'An error occurred while processing your request.'); 
    }
}

    /**

     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAbout_siteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about_site = New About_site();
        $about_site->brief = $request->brief;
        $about_site->vision = $request->vision;
        $about_site->advantages = $request->advantages;
        $about_site->lang = $request->lang;
        $about_site->image = $request->file('image')->store('public');
        $about_site->save();
        return $about_site;
        // return res.error();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About_site  $about_site
     * @return \Illuminate\Http\Response
     */
    // public function show( $id)
    // {
    //     //
    //     return About_site::findOrFail($id);
    // }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAbout_siteRequest  $request
     * @param  \App\Models\About_site  $about_site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $about_site=About_site::findOrFail($id);
        $about_site->brief=$request->brief;
        $about_site->vision=$request->vision;
        $about_site->advantages=$request->advantages;
        $about_site->lang = $request->lang;
        $about_site->image=$request->file('image')->store('public');
        $about_site->save();
        return $about_site;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About_site  $about_site
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return About_site::destroy(id);
    }
}
