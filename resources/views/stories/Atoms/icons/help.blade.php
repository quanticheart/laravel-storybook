@storybook([
    'name' => 'Chevron Down',
    'status' => 'stable',
    'argTypes' => [
        'size' => [
            'options' => [
                '16', '32', '64'
            ],
            'defaultValue' => '16',
            'control' => [
                'type' => 'radio'
            ]
        ]
    ]
])
<x-icon.chevron-down width="{{ $size ?? '16' }}" height="{{ $size ?? '16'}}"/>

