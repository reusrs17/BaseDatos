<?php

namespace App\Http\Controllers;

use App\Models\Usuarioss;
use Illuminate\Http\Request;

/**
 * Class UsuariossController
 * @package App\Http\Controllers
 */
class UsuariossController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuariosses = Usuarioss::paginate();

        return view('usuarioss.index', compact('usuariosses'))
            ->with('i', (request()->input('page', 1) - 1) * $usuariosses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarioss = new Usuarioss();
        return view('usuarioss.create', compact('usuarioss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Usuarioss::$rules);

        $usuarioss = Usuarioss::create($request->all());

        return redirect()->route('usuariosses.index')
            ->with('success', 'Usuarioss created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarioss = Usuarioss::find($id);

        return view('usuarioss.show', compact('usuarioss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarioss = Usuarioss::find($id);

        return view('usuarioss.edit', compact('usuarioss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Usuarioss $usuarioss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarioss $usuarioss)
    {
        request()->validate(Usuarioss::$rules);

        $usuarioss->update($request->all());

        return redirect()->route('usuariosses.index')
            ->with('success', 'Usuarioss updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usuarioss = Usuarioss::find($id)->delete();

        return redirect()->route('usuariosses.index')
            ->with('success', 'Usuarioss deleted successfully');
    }
}
