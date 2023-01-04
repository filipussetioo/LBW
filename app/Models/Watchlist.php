<?php

namespace App\Models;

use CodeIgniter\Model;

class Watchlist extends Model
{
    protected $table = "watchlist";
    protected $primaryKey = "watchlistId";

    protected $returnType = "object";
    protected $allowedFields = ['watchlistId','watchlist_title', 'streaming_platform', 'username', 'backdrop_path'];

    public function getWatchlist()
	{
		$db = \Config\Database::connect();
        $watchlist = $db->table('watchlist')->select('*')->get()->getResultArray();

        return $watchlist;
	}
    public function getRecommendedStreamingPlatform(){
        $db = \Config\Database::connect();
        $watchlist = $db->table('watchlist')->selectCount('streaming_platform','jumlah')->groupBy('streaming_platform')->orderBy('streaming_platform','DESC')->get()->getResultArray();
    }
}