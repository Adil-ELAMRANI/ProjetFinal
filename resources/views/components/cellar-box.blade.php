@props(['name'=>'Cellier', 'amount' => '0'])
<a class="p-3 bg-card rounded-lg flex flex-col shadow-md border-border-base border hover:shadow-sm hover:bg-card-hover transition-all duration-300" href="#">
   <h2 class="text-2xl font-semibold">{{ $name }}</h2>
   @if ($amount > 1)
       <p class="text-gray-600">{{ $amount }} Bouteilles</p>
    @else
       <p class="text-gray-600">{{ $amount }} Bouteille</p>
   @endif
</a>