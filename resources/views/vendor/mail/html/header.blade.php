@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{-- encaso quieras colcoar una imagen recueda que teien que estar en internet porque si no la imagen no s emostrara --}}
{{ $slot }}
@endif
</a>
</td>
</tr>
