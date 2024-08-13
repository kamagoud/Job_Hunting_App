@props(['submit'])


<form wire:submit="{{ $submit }}">
    <div class="px-4 py-5 bg-white sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
        <div class="grid grid-cols-6 gap-6">
            {{ $form }}
        </div>
        @if (isset($actions))
            <div class="d-flex mt-4 align-items-center justify-content-end">
                {{ $actions }}
            </div>
        @endif
</form>
