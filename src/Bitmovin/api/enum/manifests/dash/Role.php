<?php

namespace Bitmovin\api\enum\manifests\dash;

use Bitmovin\api\enum\AbstractEnum;

class Role extends AbstractEnum
{
    const ALTERNATE = "ALTERNATE";
    const CAPTION = "CAPTION";
    const COMMENTARY = "COMMENTARY";
    const DUB = "DUB";
    const MAIN = "MAIN";
    const SUBTITLE = "SUBTITLE";
    const SUPPLEMENTARY = "SUPPLEMENTARY";
}