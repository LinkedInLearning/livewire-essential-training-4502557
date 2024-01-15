<div>
    <div>Search: <input class="bg-gray-100" type="text" wire:model.live="query"></div>
    <div># of users: <input class="bg-gray-100" type="number" wire:model.live="numberOfUsers"></div>
    <div>@error('query') {{ $message }} @enderror</div>
    <ul>
        @foreach ($users as $user)
        <livewire:user-display :$user :key="$user->id">
        @endforeach
    </ul>

    {{ $users->links() }}
</div>