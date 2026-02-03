<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Requests\UserRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UsersCrud extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public $userId;
    public $name;
    public $email;
    public $password;
    public $isEdit = false;

    protected function rules()
    {
        return (new UserRequest())->rules($this->userId);
    }

    public function render()
    {
        $this->authorize('view', User::class);

        return view('livewire.users-crud', [
            'users' => User::paginate(20)
        ]);
    }

    public function save()
    {
        $this->authorize('create', User::class);

        $validated = $this->validate();
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        $this->resetForm();
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);

        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->isEdit = true;
    }

    public function update()
    {
        $user = User::findOrFail($this->userId);
        $this->authorize('update', $user);

        $validated = $this->validate();

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        $this->resetForm();
    }

    public function delete(User $user)
    {
        $this->authorize('delete', $user);
        $user->delete();
    }

    private function resetForm()
    {
        $this->reset([
            'userId',
            'name',
            'email',
            'password',
            'isEdit'
        ]);
    }
}
