<?php

namespace App\Http\Controllers;

use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use App\Models\Design;
use App\Models\User;


class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function designs($id)
    {

        $design = Design::where('cat_id', $id)->get();

        return view('welcome.designs', compact('design'));
    }
    public function designers()
    {
        $users = User::where('role_id', 2)->where('deleted_at', null)->orderBy('id', 'DESC')->get();

        return view('welcome.designers', compact('users'));
    }
    public function designerDetail($id)
    {

        return view('welcome.designer_detail');
    }
    public function addToWishlist($id, FlasherInterface $flasher)
    {

        $design = Design::find($id);

        if (!$design) {
            $flasher->option('position', 'top-center')->addError('Id not found');
            return redirect()->back()->with('error', 'Id not found');
        }

        Design::where('id', $id)->update([
            'wishlist' => 1
        ]);

        $flasher->option('position', 'top-center')->addSuccess('Design Added To Wishlist');
        return redirect()->back()->with('message', 'Design Added To Wishlist');
    }

    public function wishlist()
    {
        $design = Design::where('wishlist', 1)->get();
        return view('welcome.wishlist', compact('design'));
    }
    public function contactUs()
    {
        return view('welcome.contact_us');
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
        return view('welcome.trends');
    }
    public function videos()
    {
        return view('welcome.videos');
    }
    public function roomMaker()
    {
        return view('welcome.room_maker');
    }
}
