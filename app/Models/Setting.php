<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = "settings";

    protected $fillable = [
        "id",
        "type",
        "value",
    ];

    protected $casts = [
        'value' => 'array'
    ];

    public static function getSetting() {
        return self::all();
    }

    public static function getSettingByName($type) {
        $config = self::where('type', $type)->count();
        if ($config > 0) {
            return true;
        }
        return false;
    }

    public static function getConfig($type) {
        return self::where('type', $type)->first();
    }

    public static function getConfigValue($type) {
        return self::where('type', $type)->first()->pluck('value');
    }
}
