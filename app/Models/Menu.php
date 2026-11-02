<?php

namespace App\Models;

use Database\Factories\MenuFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    protected $guarded = ['id'];

    /** @use HasFactory<MenuFactory> */
    use HasFactory, SoftDeletes;

    protected static function booted(): void
    {
        static::deleting(function (Menu $menu): void {
            $children = $menu->children()->get();

            foreach ($children as $child) {
                if ($menu->isForceDeleting()) {
                    $child->forceDelete();

                    continue;
                }

                $child->delete();
            }
        });
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('sort_order');
    }

    public function locationLabel(): string
    {
        return match ($this->location) {
            'header' => 'هدر',
            'footer' => 'فوتر',
            'sidebar' => 'سایدبار',
            default => $this->location,
        };
    }

    public function isDescendantOf(Menu $menu): bool
    {
        $parent = $this->parent;

        while ($parent !== null) {
            if ($parent->id === $menu->id) {
                return true;
            }

            $parent = $parent->parent;
        }

        return false;
    }
}
