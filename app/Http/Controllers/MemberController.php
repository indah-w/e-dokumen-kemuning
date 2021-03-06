<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        $member = Member::all();
        return view('member.index', compact('member'));
    }

    public function create() {
        return view('member.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'no_kk' => 'required|unique:member,no_kk',
            'no_ktp' => 'required|unique:member,no_ktp',
            // 'body' => 'required',
        ]);
        Member::create($request->all());
        return redirect()->route('member.index')->with('status', 'Member Stored!!!')->with('success', true);
    }

    public function edit(Member $member) {
        return view('member.edit', compact('member', 'status'));
    }

    public function update(Request $request, Member $member) {

        $member->update($request->all());
        return redirect()->route('member.index')->with('status', 'Member updated!!!')->with('success', true);
    }

    public function destroy(Member $member) {
        // $member = Member::find($id);
        $member->delete();
        return redirect()->route('member.index')->with('status', 'Member deleted!!!')->with('success', true);
    }
}
