@props(['name' => 'Cellier', 'amount' => '0', 'id' => ''])
    


<div
    id="addWineBtnContainer"
    class="fixed z-10 bottom-0 left-0 w-full p-4 pt-10 bg-card border border-border-base shadow-lg rounded-t-lg transform translate-y-full transition-transform duration-300"
>
    <span class="flex items-center justify-between mb-4">
        <h1 class="text-3xl text-heading font-heading">Ajouter un vin</h1>
        <x-dynamic-component :component="'lucide-x'" id="closeAddWine" class="w-6 h-6" />
    </span>

    <x-cellar-box  editable="false" :name="$name" :amount="$amount" :id="$id" />
</div>