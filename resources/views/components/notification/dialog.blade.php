@props([
    'event' => 'dialog-notification'
])

<modal
    x-data="{ show: false, type: '' }"
    x-init="
        new bootstrap.Modal($el);
        $watch('show', value => value ? bootstrap.Modal.getInstance($el).show() : bootstrap.Modal.getInstance($el).hide());
        $el.addEventListener('hidden.bs.modal', () => show = false);
        window.addEventListener('{{ $event }}', notification => {
            type = notification.detail.type
            $refs.title.innerText = notification.detail.title
            $refs.content.innerHTML = notification.detail.content
            show = true
        });
    "
>
    <modal.body>
        <div class="d-grid gap-3 px-4">
            <div class="text-center text-green-500" x-show="type === 'success'">
                <icons.check-circle width="80" height="80"/>
            </div>
            <div class="text-center text-blue-500" x-show="type === 'info'">
                <icons.info-circle width="80" height="80"/>
            </div>
            <div class="text-center text-yellow-500" x-show="type === 'warning'">
                <icons.exclamation-circle width="80" height="80"/>
            </div>
            <div class="text-center text-red-500" x-show="type === 'error'">
                <icons.x-circle width="80" height="80"/>
            </div>
            <div x-ref="title" class="fs-4 text-center text-secondary"></div>
            <div x-ref="content" class="text-gray-600 text-center"></div>
            <div class="d-flex justify-content-center">
                <button.success x-show="type === 'success'" data-bs-dismiss="modal" class="px-4">OK</button.success>
                <button.primary x-show="type === 'info'" data-bs-dismiss="modal" class="px-4">OK</button.primary>
                <button.warning x-show="type === 'warning'" data-bs-dismiss="modal" class="px-4">OK</button.warning>
                <button.danger x-show="type === 'error'" data-bs-dismiss="modal" class="px-4">OK</button.danger>
            </div>
        </div>
    </modal.body>
</modal>
