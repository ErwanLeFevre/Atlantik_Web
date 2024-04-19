<?php
namespace App\Models;
use CodeIgniter\Model;
class ModeleLiaison extends Model
{
    protected $table = 'liaison';
    protected $primaryKey = 'noliaison'; // clé primaire
    protected $useAutoIncrement = false;
    protected $returnType = 'object'; // résultats retournés sous forme d'objet(s)
    protected $allowedFields = ['noliaison', 'noport_depart', 'nosecteur', 'noport_arrivee', 'distance'];
}