<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDescription extends Model
{
    use HasFactory;

    protected $fillable = ['company_name','authorized_person','company_shortname','phone','fax','gsm','whatsapp','company_address','branch_addresses','city_id','county_id','zip_code','tax_county','tax_code'];
}
