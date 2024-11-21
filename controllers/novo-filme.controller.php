<?php

// carrega informações do usuário
$usuario = user($database);

view('novo-filme', compact('usuario'));