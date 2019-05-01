<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use Illuminate\Http\Request;
use Session;
use Auth;

class BlogCategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blog_categories = BlogCategory::get();
        //
        return view('admin.blog_cate.blog_cate_list')->with('blog_categories', $blog_categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blog_cate.blog_cate_create');
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
        $request->validate([
            'title' => 'required',
        ]);

        $blogCategory = new BlogCategory;
        $blogCategory->title = $request->title;
        $blogCategory->description = $request->description;
        $blogCategory->status = 1;
        $blogCategory->created_by = Auth::user()->id;
        $blogCategory->save();

        Session::flash('success', 'Blog Category Created Successfully');
        //
        return redirect()->route('blog.cate.create', ['success' => 'Blog Category Created Successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogCategory = BlogCategory::find($id);
        // dd($blogCategory);
        // $blog_categories = BlogCategory::where('id', $id)->get();

        //
        return view('admin.blog_cate.blog_cate_edit')->with('blog_category', $blogCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title' => 'required',
        ]);

        $blogCategory = BlogCategory::find($id);
        $blogCategory->title = $request->title;
        $blogCategory->description = $request->description;
        $blogCategory->status = 1;
        $blogCategory->updated_by = Auth::user()->id;
        $blogCategory->save();

        Session::flash('success', 'Blog Category Updated Successfully');
        //
        return redirect()->route('blog.cate.edit', [$id, 'success' => 'Blog Category Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blogCategory = BlogCategory::find($id);
        $blogCategory->delete();

        Session::flash('success', 'Blog Category Deleted Successfully');
        //
        return redirect()->route('blog.cate.index', ['success' => 'Blog Category Deleted Successfully']);
    }
}
