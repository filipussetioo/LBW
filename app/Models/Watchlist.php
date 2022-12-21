<?php

namespace App\Models;

use CodeIgniter\Model;

class Watchlist extends Model
{
    protected $table = "watchlist";
    protected $primaryKey = "watchlistId";

    protected $returnType = "object";
    protected $allowedFields = ['watchlistId','watchlist_title', 'streaming_platform', 'username'];

    public function getWatchlist()
	{
		$db = \Config\Database::connect();
        $watchlist = $db->table('watchlist')->select('*')->get()->getResultArray();

        return $watchlist;
	}

}