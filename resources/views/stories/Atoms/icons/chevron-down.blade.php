@storybook([
    'name' => 'Chevron Down',
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
<x-icon.chevron-down width="{{ $size ?? '64' }}" height="{{ $size ?? '64' }}"/>

