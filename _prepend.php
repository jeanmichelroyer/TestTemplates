<?php

if (!defined('DC_RC_PATH')) {return;}

# CHARTE
$core->url->register('charte', 'charte', 'charte', function() { self::serveDocument('charte.html','text/html'); });

# ACTUALITES
$core->url->register('actualites', 'actualites', 'actualites', function() { self::serveDocument('actualites.html','text/html'); });

# BIOGRAPHIE
$core->url->register('artiste', 'artiste', 'artiste', function() { self::serveDocument('artiste.html','text/html'); });

# DISCOGRAPHIE
# — SIMPLE
$core->url->register('support', 'support', 'discographie/support', function() { self::serveDocument('support.html','text/html'); });
# — LIST
$core->url->register('auteur-compositeur', 'auteur-compositeur', 'discographie/auteur-compositeur', function() { self::serveDocument('support.html','text/html'); });
$core->url->register('participations', 'participations', 'discographie/participations', function() { self::serveDocument('participations.html','text/html'); });
$core->url->register('participations', 'participations', 'discographie/participations', function() { self::serveDocument('participations.html','text/html'); });


# MEDIATHEQUE
# — LIST
$core->url->register('mediatheque', 'mediatheque', 'mediatheque', function() { self::serveDocument('mediatheque.html','text/html'); });
$core->url->register('photos', 'photos', 'mediatheque/photos', function() { self::serveDocument('photos.html','text/html'); });
$core->url->register('videos', 'videos', 'mediatheque/videos', function() { self::serveDocument('video.html','text/html'); });
$core->url->register('presses', 'presses', 'mediatheque/presses', function() { self::serveDocument('presses.html','text/html'); });
# — SIMPLE
$core->url->register('photo', 'photo', 'mediatheque/photo', function() { self::serveDocument('photo.html','text/html'); });
$core->url->register('video', 'video', 'mediatheque/video', function() { self::serveDocument('video.html','text/html'); });
$core->url->register('presse', 'presse', 'mediatheque/presse', function() { self::serveDocument('presse.html','text/html'); });


# PAGES DIVERSES
$core->url->register('liens', 'liens', 'liens', function() { self::serveDocument('liens.html','text/html'); });
$core->url->register('mentions-legales', 'mentions-legales', 'mentions-legales', function() { self::serveDocument('mentions-legales.html','text/html'); });
$core->url->register('plan', 'plan', 'plan', function() { self::serveDocument('plan.html','text/html'); });
$core->url->register('recherche', 'recherche', 'recherche', function() { self::serveDocument('recherche.html','text/html'); });
