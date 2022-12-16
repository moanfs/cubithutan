<?php

namespace App\Models;

use CodeIgniter\Model;

class PodcastModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'podcast';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_episode', 'slug', 'link', 'session', 'created_at', 'updated_at' . 'deleted_at'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // set podcast
    public function setpodcast($data_podcast)
    {
        $this->db->table('podcast')->insert($data_podcast);
    }

    // set episode
    public function setEpisode($data_episode)
    {
        $this->db->table('episode')->insert($data_episode);
    }

    // get episode
    public function getEpisode()
    {
        return $this->db->table('episode')
            ->get()->getResultArray();
    }

    public function getpodcast()
    {
        return $this->db->table('podcast')
            ->join('episode', 'episode.id_epi=podcast.id_episode')
            ->get()->getResultArray();
    }

    // delete podcast
    public function getDelete($id)
    {
        $this->db->table('podcast')
            ->where('id', $id)
            ->delete();
    }

    public function getIndexPodcast()
    {
        return $this->db->table('podcast')
            ->orderBy('id', 'desc')
            ->limit('3')
            ->get()->getResultArray();
    }

    // update podcast
    public function updatePodcast($dataUpdate, $id)
    {
        $this->db->table('podcast')
            ->where('id', $id)
            ->update($dataUpdate);
    }

    // get podcast 1
    public function getPodcastsatu($id)
    {
        return $this->db->table('podcast')
            ->join('episode', 'episode.id_epi=podcast.id_episode')
            ->where('id', $id)
            ->get()->getRowArray();
    }
}
