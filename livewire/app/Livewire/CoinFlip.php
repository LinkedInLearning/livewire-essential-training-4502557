<?php

namespace App\Livewire;

use Livewire\Component;

class CoinFlip extends Component
{

    public string $coin = 'Click the flip button to flip a coin!';
    public string $last = '';

    public function flip() {
        $this->last = $this->coin;
        $this->coin = rand(0, 1) ? 'Heads!' : 'Tails!';
    }

    public function render()
    {
        return view('livewire.coin-flip');
    }
}
