<?php

namespace App;

use Carbon\Carbon;

class Data
{
    public function getData()
    {
        $users = User::all();
        $result = collect();

        $colours = collect([
            'rgb(54, 162, 235)', 'rgb(75, 192, 192)'
        ]);

        foreach ($users as $user) {
            $userWeights = $user->weights()->get()->map(function ($item) {
                return [
                    "weight" => $item->weight,
                    "date" => $item->created_at->format('Y-m-d'),
                ];
            });
            $weights = collect();
            $dates = $this->getLabels();

            foreach ($dates as $date) {
                if ($userWeights->contains('date', $date)) {
                    $weights->push($userWeights->where('date', $date)->first()['weight']);
                } else {
                    $weights->push(null);
                }
            }

            $result->push([
                'name' => $user->name,
                'data' => $weights,
            ]);
        }

        return $result;
    }

    public function getLabels()
    {
        $weights = Weight::orderBy('created_at')->get();

        $weights = $weights->groupBy(function ($item) {
            return Carbon::parse($item['created_at'])->format('Y-m-d');
        })->map(function ($item) {
            return $item->all();
        });

        $dates = $weights->keys();

        return $dates;
    }

    public function getChange($user)
    {
        $change = null;

        if ($today = $user->weights()->whereDate('created_at', Carbon::today())->first()) {
            $previous = $user->weights()->where('id', '!=', $today->id)->latest('created_at')->first();

            if ($previous) {
                if ($today->weight > $previous->weight) {
                    return 'up';
                }

                if ($today->weight == $previous->weight) {
                    return 'nc';
                }

                if ($today->weight < $previous->weight) {
                    return 'down';
                }
            }

            return false;
        }
    }

    public function getFirst($user)
    {
        return $user->weights()->orderBy('created_at')->first();
    }

    public function getLast($user)
    {
        return $user->weights()->orderBy('created_at', 'desc')->first();
    }

    public function getTotal($user)
    {
        $first = $this->getFirst($user);
        $last = $this->getLast($user);
        $change = $last === $first ? 'nc' : ($last < $first ? 'up' : 'down');


        return [
            'difference' => $first ? $last->weight - $first->weight : 0,
            'percentage' => $first ? ($first->weight - $last->weight) / $first->weight * 100 : 0,
            'change' => $change
        ];
    }

    public function getToday($user)
    {
        return $user->weights()->whereDate('created_at', Carbon::today())->first();
    }

    public function getWeights($user)
    {
        return $user->weights()->orderBy('created_at')->get();
    }
}
