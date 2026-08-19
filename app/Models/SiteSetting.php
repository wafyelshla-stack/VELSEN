<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = ['key', 'value', 'label', 'group'];

    /**
     * Get a setting value by key, returning a default if not found.
     */
    public static function get(string $key, ?string $default = null): ?string
    {
        $setting = static::where('key', $key)->first();

        return ($setting && ! empty($setting->value)) ? $setting->value : $default;
    }

    /**
     * Set a setting value by key.
     */
    public static function set(string $key, ?string $value, ?string $label = null, string $group = 'general'): self
    {
        return static::updateOrCreate(
            ['key' => $key],
            [
                'value' => $value,
                'label' => $label ?? $key,
                'group' => $group,
            ]
        );
    }

    /**
     * Get the full URL for an image setting.
     */
    public static function url(string $key, string $defaultAsset): string
    {
        $val = static::get($key);
        if (! $val) {
            return asset($defaultAsset);
        }
        if (str_starts_with($val, 'http://') || str_starts_with($val, 'https://') || str_starts_with($val, '/')) {
            return $val;
        }

        return asset('storage/'.$val);
    }
}
