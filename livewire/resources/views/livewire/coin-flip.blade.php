<div wire:poll.1s="flip">
    {{ $coin }}
    <form wire:submit="flip">
        <button type="submit">Flip</button>
    </form>
    
    <p>Last flip: {{ $last }}</p>
</div>