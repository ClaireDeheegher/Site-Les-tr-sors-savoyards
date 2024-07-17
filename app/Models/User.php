<?php

    namespace App\Models;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class User extends Model
    {
        use HasFactory;

        protected $fillable = [
            'name',
            'lastname',
            'birthday',
            'gender',
            'phone',
            'address',
            'address2',
            'zipcode',
            'town',
            'country',
            'email',
            'email_verified_at',
            'password',
        ];

        protected $hidden = [
            'password',
            'remember_token',
        ];
    }
