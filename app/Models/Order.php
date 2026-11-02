<?php

namespace App\Models;

use Database\Factories\OrderFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    protected $guarded = ['id'];

    /** @use HasFactory<OrderFactory> */
    use HasFactory;

    use SoftDeletes;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    public function discount(): BelongsTo
    {
        return $this->belongsTo(Discount::class);
    }

    public function delivery(): BelongsTo
    {
        return $this->belongsTo(Delivery::class);
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) =>

            [
                'pending' => 'در انتظار',
                'processing' => 'در حال پردازش',
                'completed' => 'تکمیل شده',
                'cancelled' => 'لغو شده',
                'failed' => 'ناموفق',
            ][$value],
        );
    }

    protected function paymentStatus(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => [
                'pending' => 'در انتظار پرداخت',
                'paid' => 'پرداخت شده',
                'failed' => 'ناموفق',
            ][$value],
        );
    }

    protected function paymentMethod(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => [
                'cash' => 'نقدی',
                'bank_transfer' => 'انتقال بانکی',
                'credit_card' => 'کارت اعتباری',
                'debit_card' => 'کارت بدهی',
                'mobile_money' => 'کیف پول',
            ][$value],
        );
    }
}
