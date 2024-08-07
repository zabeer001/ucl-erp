<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Knowledge;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    //
    public function index()
    {
        //
        $knowledges = Knowledge::paginate(9);
        return view('knowledge.index', compact('knowledges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('knowledge.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $knowledge            = new Knowledge();
        $knowledge->title       = $request->title;
        $knowledge->description       = $request->description;
        $knowledge->save();

        $knowledges = Knowledge::paginate(9);
        return view('knowledge.index', compact('knowledges'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Knowledge $knowledge)
    {
        //
        return view('knowledge.show', compact('knowledge'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Knowledge $knowledge)
    {
        //
        return view('knowledge.edit', compact('knowledge'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Knowledge $knowledge)
    {
        //
        $knowledge->title = $request->title;
        $knowledge->description = $request->description;
        $knowledge->save();

        $knowledges = Knowledge::paginate(9);
        return view('knowledge.index', compact('knowledges'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Knowledge $knowledge)
    {
        //
        $knowledge->delete();
        $knowledges = Knowledge::paginate(9);
        return view('knowledge.index', compact('knowledges'));
    }
}
