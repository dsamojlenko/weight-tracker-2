<?php

namespace App\Http\Controllers;

use App\Data;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $data;

    public function __construct(Data $data)
    {
        $this->data = $data;
    }

    public function index()
    {
        $user1 = User::find(1);
        $user2 = User::find(2);

        return view('home', [
            'user1' => [
                'user' => $user1,
                'weights' => $this->data->getWeights($user1),
                'today' => $this->data->getToday($user1),
                'change' => $this->data->getChange($user1),
            ],
            'user2' => [
                'user' => $user2,
                'weights' => $this->data->getWeights($user2),
                'today' => $this->data->getToday($user2),
                'change' => $this->data->getChange($user2),
            ],
            'data' => $this->data->getData(),
            'labels' => $this->data->getLabels()
        ]);
    }

    public function save(User $user, Request $request)
    {
        $request->validate([
            'weight' => 'required|numeric'
        ]);

        $today = $user->weights()->whereDate('created_at', Carbon::today())->get();

        if ($today->count()) {
            return back()->with('error', 'You already recorded your weight today ' . Carbon::today()->format('M d') . '. Come back tomorrow.');
        }

        $user->weights()->create([
            'weight' => request('weight'),
        ]);

        return back()->with('success', 'Weight recorded!');
    }
}
