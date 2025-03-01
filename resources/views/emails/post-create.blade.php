<x-mail::message>
# Correo por abrobar post

<x-mail::panel>
Se a creado un nuevo post que necesita ser aprobado
</x-mail::panel>

<x-mail::button :url="route('posts.index')" color="success">
Click para aprobar
</x-mail::button>
</x-mail::message>
