<?php

    namespace App\Models;
<<<<<<< HEAD
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

=======

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

>>>>>>> a456567 (+2)
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
