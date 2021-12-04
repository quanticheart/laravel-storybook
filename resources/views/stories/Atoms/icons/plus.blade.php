@storybook([
    'name' => 'Chevron Expand',
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
<x-icon.chevron-expand width="{{ $size ?? '16' }}" height="{{ $size ?? '16'}}"/>

