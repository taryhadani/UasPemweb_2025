<?php
// app/OpenApi/Schemas/Category.php

namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="Category",
 *     type="object",
 *     title="Category",
 *     required={"id", "name"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="Electronics"),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-07-21T12:34:56Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-07-21T12:34:56Z"),
 * )
 */

class Category {}
