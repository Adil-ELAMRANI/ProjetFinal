<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cellier extends Model
{
    use HasFactory;

    // La table est correcte
    protected $table = 'celliers';

    // Désactive les colonnes 'created_at' et 'updated_at' (selon le schéma bd_vino.pdf)
    public $timestamps = false; 

    // ✔ Garde les timestamps créés par Laravel
    //public $timestamps = true;

    // ✔ Colonnes que tu peux remplir
    protected $fillable = [
        'nom',
        'id_utilisateur',
    ];

    /**
     * Le cellier appartient à un utilisateur.
     */
    public function utilisateur(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Le cellier contient plusieurs bouteilles.
     */
    public function bouteilles(): HasMany
    {
        return $this->hasMany(BouteilleCellier::class, 'id_cellier');
    }
}
