<?php

function getAllUsers()
{
    return [
        [
            'id' => 1,
            'name' => 'Ana Paula',
            'username' => 'anapaula',
            'avatar' => 'https://i.pravatar.cc/150?img=5',
            'status' => 'online',
            'bio' => '',
            'mutualInterests' => [],
            'isGroup' => false
        ],
        [
            'id' => 2,
            'name' => 'Carlos Eduardo',
            'username' => 'carlosedu',
            'avatar' => 'https://i.pravatar.cc/150?img=8',
            'status' => 'offline',
            'bio' => '',
            'mutualInterests' => [],
            'isGroup' => false
        ],
        [
            'id' => 3,
            'name' => 'Márcia Silva',
            'username' => 'marciasilva',
            'avatar' => 'https://i.pravatar.cc/150?img=31',
            'status' => 'online',
            'bio' => '',
            'mutualInterests' => [],
            'isGroup' => false
        ],
        [
            'id' => 4,
            'name' => 'Pedro Rocha',
            'username' => 'pedro_rocha',
            'avatar' => 'https://i.pravatar.cc/150?img=12',
            'status' => 'offline',
            'bio' => 'Desenvolvedor Full Stack | React & Node.js',
            'mutualInterests' => ['Programação', 'IA', 'Café'],
            'isGroup' => false
        ],
        [
            'id' => 5,
            'name' => 'Grupo de Estudos - Matemática Avançada',
            'username' => 'matematica-grupo',
            'avatar' => 'https://i.pravatar.cc/150?img=42',
            'status' => 'online',
            'bio' => '',
            'mutualInterests' => [],
            'isGroup' => true
        ],
        [
            'id' => 6,
            'name' => 'Grupo de Debate Sobre IA',
            'username' => 'ia-debate',
            'avatar' => 'https://i.pravatar.cc/150?img=20',
            'status' => 'online',
            'bio' => '',
            'mutualInterests' => [],
            'isGroup' => true
        ]
    ];
}

function getUserByUsername($username)
{
    foreach (getAllUsers() as $user) {
        if ($user['username'] === $username) {
            return $user;
        }
    }
    return null;
}
