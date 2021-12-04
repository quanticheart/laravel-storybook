@storybook([
    'name' => 'Exclamantion Circle',
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
<x-icon.exclamantion-circle width="{{ $size ?? '16' }}" height="{{ $size ?? '16'}}"/>

