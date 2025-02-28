<div {{ $attributes->merge(['class' => 'p-4 text-sm '.$color])}} role="alert">
    <span class="font-medium">{{$title ?? 'Info Alert!'}}</span> {{ $slot }}
</div>