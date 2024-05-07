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

    public function getAllLiaisonSecteurPort()
    {
        return $this->join('secteur sec', 'liaison.nosecteur = sec.nosecteur', 'inner')
        ->join('port port', 'liaison.noport = pord.noport',  'inner')
        ->select('nom.nosecteur, liaison.noport as pord.noport, datecommande, referenceproduit, quantitecommandee, libelle, prixht')
        ->get();
  }
}