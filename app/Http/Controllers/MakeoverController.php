<?php

namespace App\Http\Controllers;

use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use App\Models\RoomMakeover;
use Carbon\Carbon;
use Validator;
use Redirect;

class MakeoverController extends Controller
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

    public function index()
    {
        $makeover = RoomMakeover::orderBy('id', 'DESC')->get();

        return view('dashboard.makeover.index', compact('makeover'));
    }
    public function create()
    {
        return view('dashboard.makeover.create');
    }

    public function store(Request $request, FlasherInterface $flasher)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'image' => 'required',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            foreach ($errors as $error) {
                $flasher->options([
                    'timeout' => 3000,
                    'position' => 'top-center',
                ])->option('position', 'top-center')->addError('Validation Error', $error);
                return Redirect::back()->withErrors($validator)->withInput();
            }
        }

        try {
            $data['name'] = $request->name;

            $timestamp = Carbon::now()->timestamp;

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                $timestamp = now()->timestamp;
                $extension = $file->getClientOriginalExtension();
                $filename = rand(99999, 234567) . '_' . $timestamp . '.' . $extension;

                $file->move(public_path('assets/image/designs'), $filename);

                $data['image'] = $filename;
            }

            RoomMakeover::create($data);

            $flasher->option('position', 'top-center')->addSuccess('Design added Successfully');
            return redirect()->route('makeover.index')->with('message', 'Design added Successfully');
        } catch (\Exception $e) {

            $flasher->option('position', 'top-center')->addError('Something went wrong');
            return redirect()->route('makeover.index')->with('message', 'Something went wrong');
        }
    }

    public function edit($id)
    {
        $makeover = RoomMakeover::findOrFail($id);
        return view('dashboard.makeover.edit', compact('makeover'));
    }

    public function update(Request $request, $id, FlasherInterface $flasher)
    {
        $design = RoomMakeover::find($id);

        if (!$design) {
            $flasher->option('position', 'top-center')->addError('Id not found');
            return redirect()->route('makeover.index')->with('error', 'Id not found');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            foreach ($errors as $error) {
                $flasher->options([
                    'timeout' => 3000,
                    'position' => 'top-center',
                ])->option('position', 'top-center')->addError('Validation Error', $error);
                return Redirect::back()->withErrors($validator)->withInput();
            }
        }

        $timestamp = Carbon::now()->timestamp;

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $timestamp = now()->timestamp;
            $extension = $file->getClientOriginalExtension();
            $filename = rand(99999, 234567) . '_' . $timestamp . '.' . $extension;

            $file->move(public_path('assets/image/designs'), $filename);

            $validatedData['image'] = $filename;
        }

        if ($request->name) {
            $validatedData['name'] = $request->name;
        }

        $design->update($validatedData);
        $flasher->option('position', 'top-center')->addSuccess('Design updated Successfully');
        return redirect()->route('makeover.index')->with('message', 'Design updated Successfully');
    }

    public function delete($id, FlasherInterface $flasher)
    {

        $design = RoomMakeover::find($id);
        if (!$design) {
            $flasher->option('position', 'top-center')->addError('Id not found');
            return redirect()->route('makeover.index')->with('error', 'Id not found');
        }
        $design->delete();
        $flasher->options([
            'timeout' => 3000,
            'position' => 'top-center',
        ])->addSuccess('Design deleted Successfully');
        return redirect()->route('makeover.index')->with('message', 'Design deleted Successfully');
    }
}
