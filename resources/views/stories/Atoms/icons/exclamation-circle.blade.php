@storybook([
    'name' => 'Exclamantion Circle',
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
<x-icon.exclamation-circle width="{{ $size ?? '64' }}" height="{{ $size ?? '64' }}"/>

