<?php

if (!defined('DC_RC_PATH')) {return;}

class myUrlHandlers extends dcUrlHandlers
{
    public static function serveDocument($tpl,$content_type='text/html',$http_cache=true,$http_etag=true) {
        parent::serveDocument($tpl,$content_type,$http_cache,$http_etag);
    }
}

# CHARTE
$core->url->register('charte', 'charte', 'charte', function() { myUrlHandlers::serveDocument('default-templates/charte.html','text/html'); });

# ACTUALITES
$core->url->register('actualites', 'actualites', 'actualites', function() { myUrlHandlers::serveDocument('default-templates/actualites.html','text/html'); });

# BIOGRAPHIE
$core->url->register('artiste', 'artiste', 'artiste', function() { myUrlHandlers::serveDocument('default-templates/artiste.html','text/html'); });

# DISCOGRAPHIE
# — SIMPLE
$core->url->register('support', 'support', 'discographie/support', function() { myUrlHandlers::serveDocument('default-templates/support.html','text/html'); });
# — LIST
$core->url->register('auteur-compositeur', 'auteur-compositeur', 'discographie/auteur-compositeur', function() { myUrlHandlers::serveDocument('default-templates/support.html','text/html'); });
$core->url->register('participations', 'participations', 'discographie/participations', function() { myUrlHandlers::serveDocument('default-templates/participations.html','text/html'); });
$core->url->register('en-solo', 'en-solo', 'discographie/en-solo', function() { myUrlHandlers::serveDocument('default-templates/en-solo.html','text/html'); });


# MEDIATHEQUE
# — LIST
$core->url->register('mediatheque', 'mediatheque', 'mediatheque', function() { myUrlHandlers::serveDocument('default-templates/mediatheque.html','text/html'); });
$core->url->register('photos', 'photos', 'mediatheque/photos', function() { myUrlHandlers::serveDocument('default-templates/photos.html','text/html'); });
$core->url->register('videos', 'videos', 'mediatheque/videos', function() { myUrlHandlers::serveDocument('default-templates/videos.html','text/html'); });
$core->url->register('presses', 'presses', 'mediatheque/presses', function() { myUrlHandlers::serveDocument('default-templates/presses.html','text/html'); });
# — SIMPLE
$core->url->register('photo', 'photo', 'mediatheque/photo', function() { myUrlHandlers::serveDocument('default-templates/photo.html','text/html'); });
$core->url->register('video', 'video', 'mediatheque/video', function() { myUrlHandlers::serveDocument('default-templates/video.html','text/html'); });
$core->url->register('presse', 'presse', 'mediatheque/presse', function() { myUrlHandlers::serveDocument('default-templates/presse.html','text/html'); });


# PAGES DIVERSES
$core->url->register('liens', 'liens', 'liens', function() { myUrlHandlers::serveDocument('default-templates/liens.html','text/html'); });
$core->url->register('mentions-legales', 'mentions-legales', 'mentions-legales', function() { myUrlHandlers::serveDocument('default-templates/mentions-legales.html','text/html'); });
$core->url->register('plan', 'plan', 'plan', function() { myUrlHandlers::serveDocument('default-templates/plan.html','text/html'); });
$core->url->register('recherche', 'recherche', 'recherche', function() { myUrlHandlers::serveDocument('default-templates/recherche.html','text/html'); });
?>
