<?php

namespace App\Http\Controllers\Admin;

use App\Models\{Contact, User};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateContactRequest;

class ContactController extends Controller
{
    protected $contact;
    protected $user;

    public function __construct(Contact $contact, User $user)
    {
       $this->contact = $contact;
       $this->user = $user;
    }
    
    public function index(Request $request, $userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        $contacts = $user->contacts()
                            ->where('subject','LIKE',"%{$request->search}%")
                            ->get();

        return view('users.contacts.index', compact('user', 'contacts'));
    }

    public function create($userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

       
        return view('users.contacts.create', compact('user'));
    }

    
    public function store(StoreUpdateContactRequest $request, $userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        $user->contacts()->create([
            'subject' => $request->subject,
            'body' => $request->body,
            'visible' => isset($request->visible)
        ]);

       
        return redirect()->route('contacts.index', $user->id);
    }

    public function edit($userId, $id)
    {
        if (!$contact = $this->contact->find($id)) {
            return redirect()->back();
        }

        $user = $contact->user;
                
        return view('users.contacts.edit', compact('user','contact'));
    }

    public function update(StoreUpdateContactRequest  $request, $id)
    {
        if (!$contact = $this->contact->find($id)) {
            return redirect()->back();
        }

        $contact->update([
            'subject' => $request->subject,
            'body' => $request->body,
            'visible' => isset($request->visible)
        ]);

        return redirect()->route('contacts.index',  $contact->user_id);
    }

    
    
}