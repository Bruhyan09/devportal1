<?php
// Endpoint de exemplo: devolve a hora do servidor em JSON.
header('Content-Type: application/json; charset=utf-8');
echo json_encode(['hora' => date('H:i:s'), 'data' => date('d/m/Y'), 'origem' => 'PHP no servidor'], JSON_UNESCAPED_UNICODE);
