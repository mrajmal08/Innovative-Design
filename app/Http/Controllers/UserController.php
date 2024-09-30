<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Flasher\Prime\FlasherInterface;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\UserDesign;
use App\Models\User;
use Carbon\Carbon;
use Validator;
use Redirect;

class UserController extends Controller
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
        $users = User::where('role_id', 2)->orderBy('id', 'DESC')->get();

        return view('dashboard.users.index', compact('users'));
    }
    public function create()
    {

        return view('dashboard.users.create');
    }

    public function store(Request $request, FlasherInterface $flasher)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required',
            'phone_no' => 'required',
            'experience' => 'required',

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
            $data['password'] = Hash::make($request->password);
            $data['phone_no'] = $request->phone_no;
            $data['city'] = $request->city;
            $data['country'] = $request->country;
            $data['experience'] = $request->experience;
            $data['specialization'] = $request->specialization;
            $data['skills'] = $request->skills;
            $data['role_id'] = $request->role_id;

            $timestamp = Carbon::now()->timestamp;

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                $timestamp = now()->timestamp;
                $extension = $file->getClientOriginalExtension();
                $filename = rand(99999, 234567) . '_' . $timestamp . '.' . $extension;

                $file->move(public_path('assets/image/designers'), $filename);

                $data['image'] = $filename;
            }

            User::create($data);

            $flasher->option('position', 'top-center')->addSuccess('User added Successfully');
            return redirect()->route('users.index')->with('message', 'User added Successfully');
        } catch (\Exception $e) {

            $flasher->option('position', 'top-center')->addError('Something went wrong');
            return redirect()->route('users.index')->with('message', 'Something went wrong');
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.users.edit', compact('user'));
    }

    public function update(Request $request, $id, FlasherInterface $flasher)
    {
        $user = User::find($id);

        if (!$user) {
            $flasher->option('position', 'top-center')->addError('Id not found');
            return redirect()->route('users.index')->with('error', 'Id not found');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'phone_no' => 'required',
            'experience' => 'required',
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

            $file->move(public_path('assets/image/designers'), $filename);

            $validatedData['image'] = $filename;
        }

        if ($request->name) {
            $validatedData['name'] = $request->name;
        }
        if ($request->email) {
            $validatedData['email'] = $request->email;
        }
        if ($request->password) {
            $validatedData['password'] = Hash::make($request->password);
        }
        if ($request->phone_no) {
            $validatedData['phone_no'] = $request->phone_no;
        }
        if ($request->city) {
            $validatedData['city'] = $request->city;
        }
        if ($request->country) {
            $validatedData['country'] = $request->country;
        }
        if ($request->experience) {
            $validatedData['experience'] = $request->experience;
        }
        if ($request->specialization) {
            $validatedData['specialization'] = $request->specialization;
        }
        if ($request->skills) {
            $validatedData['skills'] = $request->skills;
        }

        $user->update($validatedData);
        $flasher->option('position', 'top-center')->addSuccess('User updated Successfully');
        return redirect()->route('users.index')->with('message', 'User updated Successfully');
    }

    public function delete($id, FlasherInterface $flasher)
    {
        $user = User::find($id);
        if (!$user) {
            $flasher->option('position', 'top-center')->addError('Id not found');
            return redirect()->route('users.index')->with('error', 'Id not found');
        }
        $user->delete();
        $flasher->options([
            'timeout' => 3000,
            'position' => 'top-center',
        ])->addSuccess('User deleted Successfully');
        return redirect()->route('users.index')->with('message', 'User deleted Successfully');
    }

    public function assignDesign(Request $request, FlasherInterface $flasher){

        try {

            if (auth()->user()) {

            if(!$request->assignee){
                $flasher->option('position', 'top-center')->addError('please select the designer');
                return redirect()->back()->with('please select the designer');
            }

            $userDesign = new UserDesign();

            $alreadyExist = $userDesign->where([
                ['assignee', $request->assignee],
                ['design_id', $request->design_id],
                ['reporter', auth()->user()->id]
            ])->first();

            if ($alreadyExist) {
                $message = 'This design is already assigned to this designer';
                $flasher->option('position', 'top-center')->addError($message);
                return redirect()->back()->with($message);
            }

            $userDesign['assignee'] = $request->assignee;
            $userDesign['design_id'] = $request->design_id;
            $userDesign['reporter'] = auth()->user()->id;

            $userDesign->save();

            $flasher->option('position', 'top-center')->addSuccess('Design assign to the designer Successfully');
            return redirect()->back()->with('message', 'Design assign to the designer Successfully');
        } else {
            $flasher->option('position', 'top-right')->addError('Kindly login before sending design to designer');
            return redirect()->route('login')->with('error', 'Kindly login before sending design to wishlist');
        }


        } catch (\Exception $e) {
            $flasher->option('position', 'top-center')->addError('Something went wrong');
            return redirect()->back()->with('message', 'Something went wrong');
        }


    }

    public function assignTasks(){

        $tasks = UserDesign::with('design')
        ->where('assignee', auth()->user()->id)
        ->get();
        return view('dashboard.tasks.index', compact('tasks'));
    }

    public function reportedTasks() {

        $tasks = UserDesign::with('design')
        ->where('reporter', auth()->user()->id)
        ->get();

        return view('dashboard.tasks.reported', compact('tasks'));
    }


}
