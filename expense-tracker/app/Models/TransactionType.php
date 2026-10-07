<?php

namespace App\Models;

enum TransactionType{
    case income;
    case expense;
}