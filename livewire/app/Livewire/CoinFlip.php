<?php

namespace App\Livewire;

use Livewire\Component;

class CoinFlip extends Component
{
    public function render()
    {
        return view(
            'livewire.coin-flip',
            [
                'coin' => rand(0, 1) ? 'heads' : 'tails'
            ]
        );
    }
}
