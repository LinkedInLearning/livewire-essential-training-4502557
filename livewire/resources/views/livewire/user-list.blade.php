<div>
    <form wire:submit="search">
        <input type="text" wire:model="query">

        <button type="submit">Search users</button>
    </form>
    <ul>
        @foreach ($users as $user)
        <li>{{ $user->name }}</li>
        @endforeach
    </ul>

    {{ $users->links() }}
</div>