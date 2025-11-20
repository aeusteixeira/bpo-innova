<?php
// Página de redirecionamento para WhatsApp com rastreamento do Google Analytics
$whatsapp_number = '5511992122030'; // Número sem caracteres especiais
$whatsapp_message = 'Olá! Gostaria de saber mais sobre os serviços da BPO Innova.';

// URL do WhatsApp Web/App
$whatsapp_url = "https://wa.me/{$whatsapp_number}?text=" . urlencode($whatsapp_message);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecionando para WhatsApp...</title>
    
    <!-- Google Analytics (se você tiver o ID) -->
    <?php if (isset($ga_id) && !empty($ga_id)): ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($ga_id); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo htmlspecialchars($ga_id); ?>');
        
        // Evento de clique no WhatsApp
        gtag('event', 'whatsapp_click', {
            'event_category': 'engagement',
            'event_label': 'WhatsApp Button Click',
            'value': 1
        });
    </script>
    <?php endif; ?>
    
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #D07400 0%, #B86300 100%);
            font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        .redirect-container {
            text-align: center;
            color: white;
            padding: 2rem;
        }
        .spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top: 4px solid white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 0 auto 1rem;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        h1 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        p {
            font-size: 1rem;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="redirect-container">
        <div class="spinner"></div>
        <h1>Redirecionando para WhatsApp...</h1>
        <p>Aguarde um momento</p>
    </div>
    
    <script>
        // Redirecionar após um pequeno delay para garantir que o evento do GA seja enviado
        setTimeout(function() {
            window.location.href = '<?php echo $whatsapp_url; ?>';
        }, 500);
        
        // Fallback: redirecionar imediatamente se o usuário clicar
        document.addEventListener('click', function() {
            window.location.href = '<?php echo $whatsapp_url; ?>';
        });
    </script>
</body>
</html>

