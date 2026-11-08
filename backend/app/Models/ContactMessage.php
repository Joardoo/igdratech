<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

/**
 * Mensaje enviado desde el formulario de contacto (tabla contact_messages).
 */
#[Fillable(['name', 'email', 'message'])]
class ContactMessage extends Model {}
