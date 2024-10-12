<?php

// ========================================
// ============= KONFIGURACJA =============
// ========================================

// Link do webhooka na którego wysyłane mają być komunikaty
$WEBHOOK_URL = "https://discord.com/api/webhooks/1294638687421861918/JpS52F135ZTlbJXBCjt57Algjk14Ii37gu6ekSEIU4pIwNQcPJjaFYUMY8vOXjyOJdHV";

// Świat z którego akceptowane mają być grzyby (sprawdzany po nagłówku origin)
$REQUIRED_WORLD = "valhalla";

// Adres z którego mają być brane obrazki grzybów do pokazania na Discordzie
// (Margonem blokuje IP Discorda, więc nie działa bezpośrednio z cdn!)
// Należy ustawić na "<adres serwera na którym działa serwer>/obrazki"
// (MUSI się kończyć znakiem /)
$NPC_ICON_PATH = "https://priw8.com/margo/grzyby/obrazki/";

// Rola do powiadomienia w webhooku (trzeba skopiować ID roli i zamienić numerki niżej)
$PING = "<@1292475270598754386>";

// ========================================
// ========================================
// ========================================

?>
