@storybook([
    'name' => 'Link',
    'status' => 'stable',
    'args' => [
        'label' => 'Button',
    ],
    'argTypes' => [
        'size' => [
            'options' => [
                'sm', 'lg', 'null'
            ],
            'defaultValue' => 'null',
            'control' => [
                'type' => 'radio'
            ]
        ],
        'iconPosition' => [
            'options' => [
                'before', 'after', 'null'
            ],
            'defaultValue' => 'null',
            'control' => [
                'type' => 'radio'
            ]
        ],
        'status' => [
            'options' => [
                'enabled', 'disabled'
            ],
            'defaultValue' => 'enabled',
            'control' => [
                'type' => 'radio'
            ]
        ],
        'icon' => [
            'options' => [
                'bone', 'candy-cane', 'carrot'
            ],
            'control' => [
                'type' => 'select'
            ],
            'description' => 'Buttom with primary CSS style',
            'defaultValue' => 'bone',
            'table' => [
                'type' => [
                    'summary' => 'string'
                ],
                'defaultValue' => [
                    'summary' => "null"
                ],
            ],
        ]
    ]
])
<x-button.link
    enable="{{($status ?? '') === 'enabled' }}"
    size="{{$size ?? ''}}"
    icon="{{$icon ?? ''}}"
    iconPosition="{{$iconPosition ?? ''}}"
>
    {{ $label }}
</x-button.link>

