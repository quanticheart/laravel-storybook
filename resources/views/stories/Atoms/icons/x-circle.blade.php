@storybook([
    'name' => 'X Circle',
    'status' => 'stable',
    'argTypes' => [
        'size' => [
            'options' => [
                '16', '32', '64'
            ],
            'defaultValue' => '64',
            'control' => [
                'type' => 'radio'
            ]
        ]
    ]
])
<x-icon.x-circle width="{{ $size ?? '64' }}" height="{{ $size ?? '64' }}"/>

