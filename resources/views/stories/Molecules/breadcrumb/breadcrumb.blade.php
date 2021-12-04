@storybook([
    'name' => 'Breadcrumb',
    'status' => 'stable',
    'argTypes' => [
        'link' => [
            'options' => [
                '0', '1', '2' , '3'
            ],
            'defaultValue' => '2',
            'control' => [
                'type' => 'radio'
            ]
        ]
    ]
])
@php
        for ($i = 0; $i <= ($link ?? 2); $i++) {
        $list["Page $i"] = "https://page$i.com";
        }
@endphp
<x-breadcrumb :list=$list />
