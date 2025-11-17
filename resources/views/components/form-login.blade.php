<form method="POST" action="">
    @csrf
    <x-input 
        label="Adresse courriel" 
        name="email" 
        type="email" 
        placeholder="Entrez votre adresse courriel" 
    />

    <x-input 
        label="Mot de passe" 
        name="password" 
        type="password" 
        placeholder="Entrez votre mot de passe" 
    />

    <button 
        type="submit" 
        class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">
        Se connecter
    </button>
</form>