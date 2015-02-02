<?php

if (!defined('DC_RC_PATH')) {return;}

$core->url->register('presse', 'presse', 'mediatheque/presse', function() { self::serveDocument('presse.html','text/html'); });
