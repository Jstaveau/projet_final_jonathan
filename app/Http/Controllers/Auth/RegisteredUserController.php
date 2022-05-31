<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Avatar;
use App\Models\Banner;
use App\Models\BillingAddress;
use App\Models\Newsletter;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Validation\Rules;
use Jona;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $banner = Banner::where('id', 9)->first();
        return view('auth.register', compact('banner'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        //resize image
        $avatar = new Avatar();
        $image = $request->file('file');
        $input['file'] = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = public_path('/img/images_site/90x100');
        $imgFile = Jona::make($image->getRealPath());
        $imgFile->resize(90, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['file']);
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['file']);
        $avatar->src = $input['file'];
        $avatar->save();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'avatar_id' => $avatar->id,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));

        //newsletter
        $newsletters = Newsletter::all();
        $mailsNewsletter = array();
        foreach ($newsletters as $newsletter) {
            array_push($mailsNewsletter, $newsletter->email);
        }

        if ($request->newsletter && !in_array($request->email, $mailsNewsletter)) {
            $newsletter = new Newsletter();
            $newsletter->email = $request->email;
            $newsletter->save();
        }

        //billing addresses
        $user_id = User::latest()->first();

        $billing = new BillingAddress();
        $billing->name = $request->name;
        $billing->email = $request->email;
        $billing->user_id = $user_id->id;
        $billing->save();

        Auth::login($user);

        $details = [
            'name' => $request->name,
            'subject' => 'Inscription réussie',
            'mail' => $request->email,
            'message' => 'Merci pour votre inscription !',
        ];

        FacadesMail::to($request->email)->send(new ContactMail($details));

        return redirect(RouteServiceProvider::HOME);
    }

    public function edit($id){
        $roles = Role::all();
        $edit = User::find($id);
        return view('pages.pagesDashboard.edit.editUser', compact('edit', 'roles'));
    }
    public function update(Request $request, $id){

        $user = User::find($id);
        $avatar = Avatar::where('id', $user->avatar_id)->first();
        $image = $request->file('file');
        $input['file'] = time() . '.' . $image->getClientOriginalExtension();

        if ($request->file) {
            $destinationPath = public_path('/img/images_site/90x100');
            $imgFile = Jona::make($image->getRealPath());
            $imgFile->resize(90, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['file']);
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $input['file']);
            $avatar->src = $input['file'];
            $avatar->save();
        }

        $user->name = $request->name;
        if ($request->role_id) {
            $user->role_id = $request->role_id;
        } else {
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->company_name = $request->company_name;
            $user->country = $request->country;
            $user->state = $request->state;
            $user->city = $request->city;
            $user->email = $request->email;
        }


        $user->save();
        return redirect()->back();
    }
}
