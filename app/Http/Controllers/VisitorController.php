<?php

namespace App\Http\Controllers;

use Flasher\Prime\FlasherInterface;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Redirect;

class VisitorController extends Controller
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
        $visitors = User::where('role_id', 3)->orderBy('id', 'DESC')->get();

        return view('dashboard.visitors.index', compact('visitors'));
    }
    public function create()
    {

        return view('dashboard.visitors.create');
    }

    public function store(Request $request, FlasherInterface $flasher)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required',
            'phone_no' => 'required',

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
            $data['email'] = $request->email;
            $data['password'] = $request->password;
            $data['phone_no'] = $request->phone_no;
            $data['city'] = $request->city;
            $data['role_id'] = $request->role_id;

            User::create($data);

            $flasher->option('position', 'top-center')->addSuccess('Visitor added Successfully');
            return redirect()->route('visitor.index')->with('message', 'Visitor added Successfully');
        } catch (\Exception $e) {

            $flasher->option('position', 'top-center')->addError('Something went wrong');
            return redirect()->route('visitor.index')->with('message', 'Something went wrong');
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.visitors.edit', compact('user'));
    }

    public function update(Request $request, $id, FlasherInterface $flasher)
    {
        $user = User::find($id);

        if (!$user) {
            $flasher->option('position', 'top-center')->addError('Id not found');
            return redirect()->route('visitor.index')->with('error', 'Id not found');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'phone_no' => 'required',
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

        if ($request->name) {
            $validatedData['name'] = $request->name;
        }
        if ($request->email) {
            $validatedData['email'] = $request->email;
        }
        if ($request->password) {
            $validatedData['password'] = $request->password;
        }
        if ($request->phone_no) {
            $validatedData['phone_no'] = $request->phone_no;
        }
        if ($request->city) {
            $validatedData['city'] = $request->city;
        }

        $user->update($validatedData);
        $flasher->option('position', 'top-center')->addSuccess('Visitor updated Successfully');
        return redirect()->route('visitor.index')->with('message', 'Visitor updated Successfully');
    }

    public function delete($id, FlasherInterface $flasher)
    {

        $user = User::find($id);
        if (!$user) {
            $flasher->option('position', 'top-center')->addError('Id not found');
            return redirect()->route('visitor.index')->with('error', 'Id not found');
        }
        $user->delete();
        $flasher->options([
            'timeout' => 3000,
            'position' => 'top-center',
        ])->addSuccess('Visitor deleted Successfully');
        return redirect()->route('visitor.index')->with('message', 'Visitor deleted Successfully');
    }
}

