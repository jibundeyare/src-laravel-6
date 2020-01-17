<?php

namespace App\Http\Controllers;

use App\Foo;
use Illuminate\Http\Request;

class FooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foos = Foo::all();

        return view('foo.index', compact('foos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foo = new Foo();

        return view('foo.create', compact('foo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
        ]);

        Foo::create($request->all());

        return redirect()->route('foo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function show(Foo $foo)
    {
        return view('foo.show', compact('foo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function edit(Foo $foo)
    {
        return view('foo.edit', compact('foo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foo $foo)
    {
        $request->validate([
            'name' => 'required|max:100',
        ]);

        $foo->update($request->all());

        return redirect()->route('foo.show', $foo->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foo $foo)
    {
        $foo->delete();

        return redirect()->route('foo.index');
    }
}
