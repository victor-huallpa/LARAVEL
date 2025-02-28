@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $color = 'text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
        case 'danger':
            $color = 'text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;
        case 'success':
            $color = 'text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400';
            break;
        case 'warning':
            $color = 'text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300';
            break;
        case 'darck':
            $color = 'text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300';
            break;
        default:
            $color = 'text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;

    }
@endphp
<div {{ $attributes->merge(['class' => 'p-4 text-sm '.$color])}} role="alert">
    <span class="font-medium">{{$title ?? 'Info Alert!'}}</span> {{ $slot }}
</div>