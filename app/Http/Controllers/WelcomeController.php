<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Flasher\Prime\FlasherInterface;
use App\Models\DesignWishlist;
use App\Models\RoomMakeover;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Design;
use App\Models\User;
use Validator;
use Redirect;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function designs($id)
    {

        $design = Design::where('cat_id', $id)->get();
        $designers = User::where('role_id', 2)->orderBy('id', 'DESC')->get();

        return view('welcome.designs', compact('design', 'designers'));
    }
    public function designers()
    {
        $users = User::where('role_id', 2)->where('deleted_at', null)->orderBy('id', 'DESC')->get();

        return view('welcome.designers', compact('users'));
    }
    public function designerDetail($id)
    {

        $designer = User::where('id', $id)
            ->with('feedbacks')
            ->first();
        return view('welcome.designer_detail', compact('designer'));
    }
    public function addToWishlist($id, FlasherInterface $flasher)
    {

        if (auth()->user()) {

            $wishlist = new DesignWishlist();
            $wishlist['design_id'] = $id;
            $wishlist['user_id'] = auth()->user()->id;

            $wishlist->save();

            $flasher->option('position', 'top-center')->addSuccess('Design Added To Wishlist');
            return redirect()->back()->with('message', 'Design Added To Wishlist');
        } else {
            // $flasher->option('position', 'top-right')->addError('Kindly login before sending design to wishlist');
            return redirect()->route('login')->with('error', 'Kindly login before sending design to wishlist');
        }
    }

    public function removeWishlist($id, FlasherInterface $flasher)
    {
        $wishlist = DesignWishlist::where('design_id', $id)
            ->where('user_id', auth()->user()->id)
            ->first();

        if ($wishlist) {
            $wishlist->delete();
            $flasher->option('position', 'top-center')->addSuccess('Design removed from Wishlist successfully');
        } else {
            $flasher->option('position', 'top-center')->addError('Design not found in your Wishlist');
        }

        return redirect()->back()->with('message', 'Wishlist update completed');
    }

    public function wishlist()
    {
        $designs = DesignWishlist::with('design')
            ->where('user_id', auth()->user()->id)
            ->get();
        $designers = User::where('role_id', 2)->orderBy('id', 'DESC')->get();

        return view('welcome.wishlist', compact('designs', 'designers'));
    }
    public function contactUs()
    {
        return view('welcome.contact_us');
    }
    public function contactStore(Request $request, FlasherInterface $flasher)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',

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
            $data['phone'] = $request->phone;
            $data['message'] = $request->message;

            ContactUs::create($data);

            $flasher->option('position', 'top-center')->addSuccess('Your Message Sent Successfully');
            return redirect()->back()->with('message', 'Your Message Sent Successfully');
        } catch (\Exception $e) {

            $flasher->option('position', 'top-center')->addError('Something went wrong');
            return redirect()->route('design.index')->with('message', 'Something went wrong');
        }
    }

    public function faq()
    {
        return view('welcome.faq');
    }
    public function aboutUs()
    {
        return view('welcome.about_us');
    }
    public function privacyPolicy()
    {
        return view('welcome.privacy_policy');
    }
    public function termCondition()
    {

        return view('welcome.term_condition');
    }
    public function trends()
    {
        $design = Design::all();

        return view('welcome.trends', compact('design'));
    }
    public function videos()
    {
        return view('welcome.videos');
    }
    public function roomMaker()
    {
        $makeover = RoomMakeover::orderBy('id', 'DESC')->get();
        return view('welcome.room_maker', compact('makeover'));
    }

    public function feedback(Request $request, FlasherInterface $flasher)
    {

        if (auth()->user()) {

            $feedback = new Feedback();
            $feedback['feedback'] = $request->feedback;
            $feedback['assignee'] = $request->assignee;
            $feedback['reporter'] = auth()->user()->id;
            $feedback->save();

            $flasher->option('position', 'top-center')->addSuccess('Feedback send successfully');
            return redirect()->back()->with('message', 'Feedback send successfully');
        } else {
            $flasher->option('position', 'top-right')->addError('Kindly login before sending any feedback');
            return redirect()->route('login')->with('Kindly login before sending any feedback');
        }
    }

    public function showDetails(FlasherInterface $flasher)
    {

        if (auth()->user()) {
            return redirect()->back()->with('message', 'Feedback send successfully');
        } else {
            $flasher->option('position', 'top-right')->addError('Kindly login before see the designer details');
            return redirect()->route('login')->with('Kindly login before see the designer details');
        }
    }
}
