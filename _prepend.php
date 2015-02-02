<?php

if (!defined('DC_RC_PATH')) {return;}

# CHARTE
$core->url->register('charte', 'charte', 'charte', function() { self::serveDocument('charte.html','text/html'); });

# ACTUALITES
$core->url->register('actualite', 'actualite', 'actualite', function() { self::serveDocument('actualite.html','text/html'); });

# BIOGRAPHIE
$core->url->register('artiste', 'artiste', 'artiste', function() { self::serveDocument('artiste.html','text/html'); });

# DISCOGRAPHIE
# — SIMPLE
$core->url->register('support', 'support', 'discographie/support', function() { self::serveDocument('support.html','text/html'); });


# MEDIATHEQUE
# — LIST

# — SIMPLE
$core->url->register('photo', 'photo', 'mediatheque/photo', function() { self::serveDocument('photo.html','text/html'); });
$core->url->register('video', 'video', 'mediatheque/video', function() { self::serveDocument('video.html','text/html'); });
$core->url->register('presse', 'presse', 'mediatheque/presse', function() { self::serveDocument('presse.html','text/html'); });
