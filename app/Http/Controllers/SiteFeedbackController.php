<?php

namespace App\Http\Controllers;

use App\Models\Site_feedback;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

class SiteFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Site_feedback::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSite_feedbackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $site_feedback = New Site_feedback();
        $site_feedback->feedback= $request->feedback;
        $site_feedback->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site_feedback  $site_feedback
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Site_feedback::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSite_feedbackRequest  $request
     * @param  \App\Models\Site_feedback  $site_feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $site_feedback = Site_feedback::findOrFail($id);
        $site_feedback->feedback= $request->feedback;
        $site_feedback->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site_feedback  $site_feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        return Site_feedback::destroy($id);
    }
}
