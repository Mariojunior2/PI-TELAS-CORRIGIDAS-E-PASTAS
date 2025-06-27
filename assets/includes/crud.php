<?php

function getNotifications($type = 'all')
{
    $notifications = [
        [
            'id' => 1,
            'title' => "Entrega de Trabalho",
            'message' => "Lembrete: O trabalho final de Programação Web deve ser entregue hoje até às 23:59.",
            'date' => "13/04/2025",
            'time' => "09:30",
            'type' => "academic",
            'priority' => "high",
            'read' => false,
            'academicType' => "deadline"
        ],
        [
            'id' => 2,
            'title' => "Prova Amanhã",
            'message' => "Não se esqueça da prova de Banco de Dados amanhã às 10:00 na sala 302.",
            'date' => "12/04/2025",
            'time' => "14:45",
            'type' => "academic",
            'priority' => "high",
            'read' => false,
            'academicType' => "exam"
        ],
        [
            'id' => 3,
            'title' => "Material Disponível",
            'message' => "O professor de Algoritmos disponibilizou o material para a próxima aula.",
            'date' => "11/04/2025",
            'time' => "16:20",
            'type' => "materials",
            'priority' => "medium",
            'read' => false,
            'academicType' => "homework"
        ],
    ];

    if ($type !== 'all') {
        return array_filter($notifications, fn($n) => $n['type'] === $type);
    }
    return $notifications;
}

function countUnread($list, $type = null)
{
    return count(array_filter($list, fn($n) => !$n['read'] && ($type === null || $n['type'] === $type)));
}

function getNotificationIcon($n)
{
    if ($n['type'] === 'academic') {
        switch ($n['academicType'] ?? '') {
            case 'homework':
                return '<i class="fa-solid fa-book text-primary"></i>';
            case 'exam':
                return '<i class="fa-solid fa-graduation-cap text-warning"></i>';
            case 'deadline':
                return '<i class="fa-solid fa-clock text-danger"></i>';
            case 'event':
                return '<i class="fa-solid fa-calendar-days text-success"></i>';
        }
        return '<i class="fa-solid fa-graduation-cap text-danger"></i>';
    }
    if ($n['type'] === 'calendar')  return '<i class="fa-solid fa-calendar-days text-danger"></i>';
    if ($n['type'] === 'materials') return '<i class="fa-solid fa-book text-danger"></i>';
    return '<i class="fa-solid fa-bell text-danger"></i>';
}

function getPriorityIcon($p)
{
    return match ($p) {
        'high'   => '<i class="fa-solid fa-exclamation-circle text-danger"></i>',
        'medium' => '<i class="fa-solid fa-info-circle text-warning"></i>',
        default  => '<i class="fa-solid fa-info-circle text-success"></i>',
    };
}
