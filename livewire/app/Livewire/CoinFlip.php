<?php

namespace App\Livewire;

use Livewire\Component;

class CoinFlip extends Component
{

    public string $coin = 'Always tails!';

    public function mount() {
        $this->coin = rand(0, 1) ? 'Heads!' : 'Tails!';
    }

    public function render()
    {
        return view('livewire.coin-flip');
    }
}
