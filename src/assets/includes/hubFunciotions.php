<?php
include_once __DIR__ . '/userFunctions.php';

function getUpcomingEvents()
{
    return [
        ['id'=>1,'title'=>'Entrega do Trabalho Final','subject'=>'Programação Web','date'=>'Hoje, 23:59','type'=>'deadline','priority'=>'high'],
        ['id'=>2,'title'=>'Prova Bimestral','subject'=>'Banco de Dados','date'=>'Amanhã, 10:00','type'=>'exam','priority'=>'medium'],
        ['id'=>3,'title'=>'Lista de Exercícios 3','subject'=>'Algoritmos Avançados','date'=>'Sexta, 18:00','type'=>'homework','priority'=>'low'],
    ];
}

function getActiveMatches()
{
    return [
        [
            'user' => getUserByUsername('anapaula'),
            'lastMessage' => 'Oi! Vi que você também curte IA. Conhece o GPT-4?',
            'time' => '5m',
            'unread' => 2
        ],
        [
            'user' => getUserByUsername('carlosedu'),
            'lastMessage' => 'Vamos marcar aquele café para conversar sobre o projeto?',
            'time' => '1h',
            'unread' => 0
        ]
    ];
}

function getPosts()
{
    return [
        [
            'user' => getUserByUsername('ia-debate'),
            'content' => 'Pessoal, o que vocês acham sobre os avanços recentes em IA generativa?',
            'time' => '35min',
            'likes' => 24,
            'comments' => 12,
            'liked' => false,
            'isAcademic' => false
        ],
        [
            'user' => getUserByUsername('marciasilva'),
            'content' => 'Acabei de me juntar ao TydraPI! Alguém da área de UX/UI?',
            'time' => '2h',
            'likes' => 15,
            'comments' => 8,
            'liked' => true,
            'isAcademic' => false
        ],
        [
            'user' => getUserByUsername('matematica-grupo'),
            'content' => 'Lembrando a todos: sessão de Cálculo 3 amanhã às 19h.',
            'time' => '1h',
            'likes' => 18,
            'comments' => 5,
            'liked' => false,
            'isAcademic' => true
        ]
    ];
}

function getPendingConnections()
{
    return [
        getUserByUsername('pedro_rocha')
    ];
}

function getPriorityClass($priority)
{
    return match($priority) {
        'high'   => 'border-priority-high',
        'medium' => 'border-priority-medium',
        'low'    => 'border-priority-low',
        default  => '',
    };
}
