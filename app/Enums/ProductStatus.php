<?php

namespace App\Enums;

enum ProductStatus:int
{
  case DRAFT = 0;
  case ENABLE = 1;
  case DISABLE = 2;
}
