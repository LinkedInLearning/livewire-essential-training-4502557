<div>
    <form wire:submit="search">
        <input class="bg-gray-100" type="text" wire:model.live="query">
        <div>@error('query') {{ $message }} @enderror</div>
    </form>
    <ul>
        @foreach ($users as $user)
        <li>{{ $user->name }}</li>
        @endforeach
    </ul>

    {{ $users->links() }}
</div>