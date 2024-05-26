<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;
use Carbon\Carbon;

class BudgetController extends Controller
{
    public function index(){
        $budgets = Budget::all();
        return view('budgets.index', compact('budgets'));
    }

    public function new(){
        return view('budgets.register');
    }

    public function store(Request $request){
        try{
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'date' => 'required',
                'quantity_people' => 'required',
            ]);

            $formattedDate = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');
            $budget = new Budget();
            $budget->name = $request->name;
            $budget->email = $request->email;
            $budget->phone = $request->phone;
            $budget->date = $formattedDate; // Atribuição da data formatada
            $budget->quantity_people = $request->quantity_people;
            $budget->save();

            return back()->with('success', 'Orçamento enviado. Fique de olho no seu email e telefone');
        }catch(Execption $e){
            return back()->with('error', 'Não foi possível enviar orçamento. Tente novamente mais tarde');
        }
    }
}
