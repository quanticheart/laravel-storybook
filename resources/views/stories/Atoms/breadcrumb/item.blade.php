@storybook([
    'name' => 'Item',
    'status' => 'stable',
    'args' => [
        'label' => 'Page 1',
    ],
    'argTypes' => [
        'active' => [
            'options' => [
                'true', 'false'
            ],
            'defaultValue' => 'true',
            'control' => [
                'type' => 'radio'
            ]
        ]
    ]
])

<x-breadcrumb.item active="{{$active ?? 'true'}}" label="{{$label}}"/>
