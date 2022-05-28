<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class AppointmentStatusEnum extends Enum
{
    public const CHO_PHE_DUYET = 1;
    public const PHE_DUYET = 2;
    public const TU_CHOI = 3;
    //......
}
