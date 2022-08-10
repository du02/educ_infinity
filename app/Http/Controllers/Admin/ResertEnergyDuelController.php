<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResertEnergyDuelController extends Controller
{
    protected function resetEnergy()
    {
        DB::table('characters')
            ->update(['energy' => 5]);

        toastr()->success('Toda a energia dos alunos foram renovadas!');
        return redirect()->route('home');
    }
}
