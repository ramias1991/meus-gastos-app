<?php

namespace App\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;

class ExpenseList extends Component
{
    public function render()
    {
        $expenses = auth()->user()->expenses()->count() ?
                    auth()->user()->expenses()->orderBy('created_at', 'DESC')->paginate(3) :
                    [];
        return view('livewire.expense.expense-list', compact('expenses'));
    }

    public function remove($id)
    {
        $exp = auth()->user()->expenses()->find($id);
        $exp->delete();

        session()->flash('message', 'Registro excluído com sucesso!');
    }
}
