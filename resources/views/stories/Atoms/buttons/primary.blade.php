@storybook([
    'name' => 'Primary Button',
    'status' => 'readyForQA',
    'args' => [
        'label' => 'Button'
    ]
])
<x-button.primary>
    {{ $label }}
</x-button.primary>
