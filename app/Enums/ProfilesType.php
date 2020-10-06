<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ProfilesType extends Enum
{
    const ZeroRoleDescription = 'Administrador';
    const ZeroRoleValue = 0;

    const OneRoleDescription = 'Perfil de acesso 1';
    const OneRoleValue = 1;

    const TwoRoleDescription = 'Perfil de acesso 2';
    const TwoRoleValue = 2;

    const ThreeRoleDescription = 'Perfil de acesso 3';
    const ThreeRoleValue = 3;
}
