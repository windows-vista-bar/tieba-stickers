<?php
use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return (new Extend\Formatter)
        ->configure(function (Configurator $config){
            $config->BBCodes->addCustom(
                '[tieba={TEXT1}]',
                '<img class="tieba_stickers" src="https://community.wvbtech.com/assets/tieba/{TEXT1}.png" width="30px"/>',
            );
        });
