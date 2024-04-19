<?php
namespace App\Models;
use CodeIgniter\Model;
class ModeleTarifer extends Model
{
    protected $table = 'tarifer';
    protected $primaryKey = 'noperiode, lettrecategorie, notype, noliaison'; // clé primaire
    protected $useAutoIncrement = false;
    protected $returnType = 'object'; // résultats retournés sous forme d'objet(s)
    protected $allowedFields = ['noperiode', 'lettrecategorie', 'notype', 'noliaison', 'tarif'];
}