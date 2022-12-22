<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class UserFilter extends ApiFilter {
  protected $safeParms  = [
    'name' => ['eq'],
    'numTelefono'=>['eq'],
    'email'=>['eq']
  ];

  protected $columnMap = [
    'numTelefono' => 'phone',
];

protected $operatorMap = [
  'eq' => '='
];

}