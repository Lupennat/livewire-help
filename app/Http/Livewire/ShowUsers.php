<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowUsers extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $status = null;
    
    public function render()
    {
        $status = $this->status;

        $users = User::when($status, function ($query, $status) {
            return $query->where('is_active', $status);
        })->paginate(15);

        return view('livewire.show-users', compact('users'));
    }

    public function updatedStatus()
    {
        if ($this->status == 'all') {
            $this->status = null;
        }
    }
}
