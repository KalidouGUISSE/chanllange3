<?php
namespace App\entity;

enum Statut: string {
    case PAYE = 'Paye';
    case IMPAYER = 'Impayer';
}