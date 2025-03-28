<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
class Matkul extends Model
{
    use HasFactory;

	

	public static function getMatkul()
	{
		return Session::get('matkuls', [
			1 => ['name' => 'Algoritma Pemgraan', 'code' => 'algpmgk1', 'credit' => 3],
			2 => ['name' => 'Sistem Operasi', 'code' => 'stmoprk1', 'credit' => 2],
			3 => ['name' => 'Teknologi Cloud', 'code' => 'cldljtk1', 'credit' => 1],
		]);
	}

	public static function allMatkul()
	{
		return self::getMatkul();
	}

	public static function addMatkul($data)
	{
		$matkuls = self::allMatkul();
		$newId = max(array_keys($matkuls)) + 1;
		$matkuls[$newId] = $data;
	}
	}

