<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $member_id
 * @property int $manager_id
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $update_at
 * 
 */
class Order extends Model
{
    use HasFactory;
}
