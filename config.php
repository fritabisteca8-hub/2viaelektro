<?php
// ========== CONFIGURAÇÃO ==========
// Coloque seu número do WhatsApp aqui (com código do país, sem + ou espaços)
$whatsapp_numero = "5511922037905";

// Mensagens personalizadas por serviço
$whatsapp_links = [
    'login'          => "https://wa.me/" . $whatsapp_numero . "?text=" . urlencode("Olá! Gostaria de acessar minha conta na Agência Virtual ELEKTRO."),
    'pix'            => "https://wa.me/" . $whatsapp_numero . "?text=" . urlencode("Olá! Gostaria de pagar minha conta com PIX."),
    'segunda_via'    => "https://wa.me/" . $whatsapp_numero . "?text=" . urlencode("Olá! Gostaria de solicitar a 2ª via da minha fatura."),
    'titularidade'   => "https://wa.me/" . $whatsapp_numero . "?text=" . urlencode("Olá! Gostaria de fazer a troca de titularidade da minha conta."),
];
?>
