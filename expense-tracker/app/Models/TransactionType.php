<?php

namespace App\Models;

enum TransactionType:string{
    case income='income';
    case expense='expense';
}