@props([
'title' => null,
'buttons' => null,
'action'=> 'save',
'actions'=> null
])
@php
@endphp
<div class="rpd-edit">
    <form autocomplete="off">
        <div class="d-flex mb-4">
            <div class="flex-grow-1">
                <div class="row g-2">
                    <x-rpd::heading :title="$title" />
                    <x-rpd::button-group :buttons="$buttons" />
                </div>
            </div>
        </div>
    </form>

    <div>
        <form wire:submit.prevent="{{ $action }}">
            {{ $slot }}
        </form>
    </div>

    <div class="d-flex">
        <div class="flex-grow-1">
            <div class="row g-2">
                <x-rpd::button-group :buttons="$actions" position="center" />
            </div>
        </div>
    </div>

</div>

